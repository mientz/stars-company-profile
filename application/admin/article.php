<?php
$app->group('/admin/article', function () {

    $select_article = function ($req, $res, $next) {
        $route = $req->getAttribute('route');
        $category = $route->getArgument('category');

        $query = "
            select * from article where not article_title = ''"
            .(isset($_POST['search']) ? " and article_title like CONCAT('%', '".$_POST['search']."', '%')" : " ")
            .($category != null ? " and article_type='".$category."' " : "")
            ."order by article_date";
        $select = $this->db->prepare($query);
        if($select->execute()){
            $req = $req->withAttribute('articles', $select->fetchALL(PDO::FETCH_ASSOC));
            if($select->rowCount() == 0){
                $req = $req->withAttribute('found', true);
            }else{
                $req = $req->withAttribute('found', false);
            }
        }
        $search_param = [];
        if($category != null){
            array_push($search_param, ["title"=>$category, "id"=>$category]);
        }
        if(isset($_POST['search'])){
            array_push($search_param, ["title"=>$_POST['search'], "id"=>""]);
        }
        $req = $req->withAttribute('search_param', $search_param);
        $res = $next($req, $res);
        return $res;
    };

    $this->map(['GET', 'POST'], '/view[/{category}]', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/article.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'articles'=>$req->getAttribute('articles'),
            'search_param'=>$req->getAttribute('search_param'),
            'article_category'=>["Berita"=>"news", "Promosi"=>"promo"]
        ]);


    })->setName('admin-article')->add($select_article);

    $this->get('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/article-add.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
        ]);
    })->setName('admin-article-add');

    $this->post('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        if(isset($_FILES["article_image"])){
            if ($_FILES["article_image"]["type"] == "image/bmp" || $_FILES["article_image"]["type"] == "image/png" || $_FILES["article_image"]["type"] == "image/jpeg"){
                $user_id = $this->session->user_id;
                $article_title = $_POST['article_title'];
                $article_text = $_POST['article_text'];
                $article_type = $_POST['article_type'];

                $ext = end((explode(".", $_FILES['article_image']['name'])));
                $sourcePath = $_FILES['article_image']['tmp_name'];
                $file = 'article-'.$article_title."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                $file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $product_name);
                $targetPath = "public/data/article/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                insert into article
                values('', :article_title, :article_date, :article_text, :article_image, '',  :article_type);
                ");
                $insert->bindParam(':article_title', $article_title, PDO::PARAM_STR);
                $insert->bindParam(':article_date', date('Y-m-d h:i:s', time()), PDO::PARAM_STR);
                $insert->bindParam(':article_text', $article_text, PDO::PARAM_STR);
                $insert->bindParam(':article_image', $file, PDO::PARAM_STR);
                $insert->bindParam(':article_type', $article_type, PDO::PARAM_STR);
                if($insert->execute()){
                    $article_id = $this->db->lastInsertId();
                    $this->db->exec("insert into do_article values('', '".$user_id."', '".$article_id."', 'add', '".date('Y-m-d h:i:s', time())."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-article'));
                }else{
                    return $c['response']->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
                return $c['response']->withStatus(500)
                    ->withHeader('Content-Type', 'text/html')
                    ->write('Something went wrong!');
            }
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }
    });

})->add($user_detail);
