<?php
$app->group('/admin/banner', function () {
    $this->map(['GET', 'POST'], '/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/banner.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'banners'=>$this->db->query('select * from carousel')->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-banner');

    $this->get('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/banner-add.html', [
            'user_detail'=>$req->getAttribute('user_detail')
        ]);
    })->setName('admin-banner-add');

    $this->post('/add', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        if(isset($_FILES["banner_image"])){
            if ($_FILES["banner_image"]["type"] == "image/bmp" || $_FILES["banner_image"]["type"] == "image/png" || $_FILES["banner_image"]["type"] == "image/jpeg"){
                $user_id = $this->session->user_id;
                $banner_status = ($_POST['banner_status'] == "" ? "visible" : "hidden");

                $ext = end((explode(".", $_FILES['banner_image']['name'])));
                $sourcePath = $_FILES['banner_image']['tmp_name'];
                $file = 'banner'.date("-Y-m-d-H-i-s").'.'.$ext;
                $targetPath = "public/data/banner/".$file; // Target path where file is to be stored
                move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                $insert = $this->db->prepare("
                    insert into carousel
                    values('', :banner_status, :banner_date, :banner_image);
                ");
                $insert->bindParam(':banner_status', $banner_status, PDO::PARAM_STR);
                $insert->bindParam(':banner_date', date('Y-m-d h:i:s', time()), PDO::PARAM_STR);
                $insert->bindParam(':banner_image', $file, PDO::PARAM_STR);
                if($insert->execute()){
                    $banner_id = $this->db->lastInsertId();
                    $this->db->exec("insert into do_carousel values('', '".$user_id."', '".$banner_id."', 'add', '".date('Y-m-d h:i:s', time())."')");
                    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-banner'));
                }else{
                    return $c['response']->withStatus(500)
                        ->withHeader('Content-Type', 'text/html')
                        ->write('Something went wrong!');
                }
            }
        }
    });



    $this->get('/edit/{banner_id}/{status}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $update = $this->db->prepare("update carousel set carousel_status='".$args['status']."' where carousel_id='".$args['banner_id']."'");
        if($update->execute()){
            $this->db->exec("insert into do_carousel values('', '".$this->session->user_id."', '".$args['banner_id']."', 'edit', '".date('Y-m-d h:i:s', time())."')");
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-banner'));
        }else{
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }
    })->setName('admin-banner-edit');

    $this->get('/delete/{banner_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $this->db->exec("delete from do_carousel where carousel_id='".$args['banner_id']."'");
        $delete = $this->db->prepare("delete from carousel where carousel_id='".$args['banner_id']."'");
        if($delete->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-banner'));
        }else{
            return $c['response']->withStatus(500)
                ->withHeader('Content-Type', 'text/html')
                ->write('Something went wrong!');
        }
    })->setName('admin-banner-delete');
})->add($user_detail);
