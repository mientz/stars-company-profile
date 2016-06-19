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

})->add($user_detail);
