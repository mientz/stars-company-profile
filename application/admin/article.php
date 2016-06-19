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
                $file = preg_replace("/[^a-z0-9\.]/", "", strtolower($article_title));
                $file = 'article-'.$file."-".date("-Y-m-d-H-i-s-").'.'.$ext;
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

    $this->get('/edit/{article_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/article-edit.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'article'=>$this->db->query("select * from article where article_id='".$args["article_id"]."'")->fetch(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-article-edit');

    $this->post('/edit/{article_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $user_id = $this->session->user_id;;
        $article_id = $args['article_id'];
        $article_title = $_POST['article_title'];
        $article_text = $_POST['article_text'];
        $article_type = $_POST['article_type'];

        if(isset($_FILES["article_image"]) && $_FILES['article_image']['tmp_name'] != ""){
            if ($_FILES["article_image"]["type"] == "image/bmp" || $_FILES["article_image"]["type"] == "image/png" || $_FILES["article_image"]["type"] == "image/jpeg"){

                $ext = end((explode(".", $_FILES['article_image']['name'])));
                $sourcePath = $_FILES['article_image']['tmp_name'];
                $file = preg_replace("/[^a-z0-9\.]/", "", strtolower($article_title));
                $file = 'product-'.$file."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                $targetPath = "public/data/article/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                update article
                set
                    article_title=:article_title,
                    article_text=:article_text,
                    article_image=:article_image,
                    article_type=:article_type
                where
                    article_id=:article_id
            ");
                $insert->bindParam(':article_id', $article_id, PDO::PARAM_INT);
                $insert->bindParam(':article_title', $article_title, PDO::PARAM_STR);
                $insert->bindParam(':article_text', $article_text, PDO::PARAM_STR);
                $insert->bindParam(':article_image', $file, PDO::PARAM_STR);
                $insert->bindParam(':article_type', $article_type, PDO::PARAM_STR);
                if($insert->execute()){
                    $this->db->exec("insert into do_article values('', '".$user_id."', '".$article_id."', 'edit', '".date('Y-m-d h:i:s', time())."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-article'));
                }else{
                    return $c['response']->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
                return $c['response']->withStatus(500)
                    ->withHeader('Content-Type', 'text/html')
                    ->write('Something went wrong on upload process!');
            }
        }else{
            $insert = $this->db->prepare("
                update article
                set
                    article_title=:article_title,
                    article_text=:article_text,
                    article_type=:article_type
                where
                    article_id=:article_id
            ");
            $insert->bindParam(':article_id', $article_id, PDO::PARAM_INT);
            $insert->bindParam(':article_title', $article_title, PDO::PARAM_STR);
            $insert->bindParam(':article_text', $article_text, PDO::PARAM_STR);
            $insert->bindParam(':article_type', $article_type, PDO::PARAM_STR);
            if($insert->execute()){
                $this->db->exec("insert into do_article values('', '".$user_id."', '".$article_id."', 'edit', '".date('Y-m-d h:i:s', time())."')");
                return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-article'));
            }else{
                return $c['response']->withStatus(500)
                    ->withHeader('Content-Type', 'text/html')
                    ->write('Something went wrong!');
            }
        }
    });

    $this->get('/delete/{article_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $this->db->exec("delete from do_article where article_id='".$args['article_id']."'");
        $delete = $this->db->prepare("delete from article where article_id='".$args['article_id']."'");
        if($delete->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-article'));
        }else{
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }
    })->setName('admin-article-delete');

})->add($user_detail);
