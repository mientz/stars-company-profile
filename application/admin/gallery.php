<?php
$app->group('/admin/gallery', function () {
    $this->get('/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/gallery.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'pics'=>$this->db->query("select * from gallery")->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-gallery');

    $this->post('/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        if(isset($_FILES["gallery_image"])){
            if ($_FILES["gallery_image"]["type"] == "image/bmp" || $_FILES["gallery_image"]["type"] == "image/png" || $_FILES["gallery_image"]["type"] == "image/jpeg"){
                $user_id = $this->session->user_id;

                $ext = end((explode(".", $_FILES['gallery_image']['name'])));
                $sourcePath = $_FILES['gallery_image']['tmp_name'];
                $file = 'article-'.rand()."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                $targetPath = "public/data/gallery/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                insert into gallery
                values('', '', :gallery_image, :gallery_date);
                ");
                $insert->bindParam(':gallery_image', $file, PDO::PARAM_STR);
                $insert->bindParam(':gallery_date', date('Y-m-d h:i:s', time()), PDO::PARAM_STR);
                if($insert->execute()){
                    $article_id = $this->db->lastInsertId();
                    $this->db->exec("insert into do_gallery values('', '".$user_id."', '".$article_id."', 'add', '".date('Y-m-d h:i:s', time())."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-gallery'));
                }else{
                    return $res->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
                return $res->withStatus(500)
                    ->withHeader('Content-Type', 'text/html')
                    ->write('Something went wrong!');
            }
            return $res->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }else{
            return $res->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong! picture not uploade');
        }
    });
})->add($user_detail);

