<?php
$app->group('/admin/account', function () {
    $this->map(['GET', 'POST'], '/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        if(isset($_POST["oldpassword"])){
            if(md5($_POST["oldpassword"]) != $this->db->query("select password from user where user_id='".$this->session->user_id."'")->fetchColumn()){
                return $this->view->render($res, 'admin/account.html', [
                    'user_detail'=>$req->getAttribute('user_detail'),
                    'error_password'=>"password lama yang anda masukkan tidak benar"
                ]);
            }else if(strlen($_POST["newpassword"]) < 6){
                return $this->view->render($res, 'admin/account.html', [
                    'user_detail'=>$req->getAttribute('user_detail'),
                    'error_password'=>"password baru yang anda masukkan kurang dari 6 karakter"
                ]);
            }else if($_POST["repassword"] != $_POST["newpassword"]){
                return $this->view->render($res, 'admin/account.html', [
                    'user_detail'=>$req->getAttribute('user_detail'),
                    'error_password'=>"password baru anda tidak sama"
                ]);
            }else{
                $this->db->exec("update user set password='".md5($_POST["newpassword"])."' where user_id='".$this->session->user_id."'");
                return $this->view->render($res, 'admin/account.html', [
                    'user_detail'=>$req->getAttribute('user_detail'),
                    'success_password'=>"Password berhasil diganti"
                ]);
            }
        }
        if(isset($_POST["fullname"])){
            $this->db->exec("update user set fullname='".$_POST["fullname"]."' where user_id='".$this->session->user_id."'");
            if(isset($_FILES["profile_image"]) && $_FILES['profile_image']['tmp_name'] != ""){
                if ($_FILES["profile_image"]["type"] == "image/bmp" || $_FILES["profile_image"]["type"] == "image/png" || $_FILES["profile_image"]["type"] == "image/jpeg"){
                    $ext = end((explode(".", $_FILES['profile_image']['name'])));
                    $sourcePath = $_FILES['profile_image']['tmp_name'];
                    $file = mb_ereg_replace("([^\w\s\d\-_~,;\[\]\(\).])", '', $this->db->query("select username from user where user_id='".$this->session->user_id."'")->fetchColumn());
                    $file = 'profile-'.$file."-".date("-Y-m-d-H-i-s-").'.'.$ext;
                    $targetPath = "public/data/user/".$file; // Target path where file is to be stored
                    move_uploaded_file($sourcePath, $targetPath) ; // Moving Uploaded file
                    $this->db->exec("update user set image='".$file."' where user_id='".$this->session->user_id."'");
                }
            }
            return $this->view->render($res, 'admin/account.html', [
                'user_detail'=>$this->db->query("select * from user where user_id='".$this->session->user_id."'")->fetch(PDO::FETCH_ASSOC),
                'success_save'=>"Perubahan berhasil disimpan"
            ]);
        }
        return $this->view->render($res, 'admin/account.html', [
            'user_detail'=>$req->getAttribute('user_detail')
        ]);
    })->setName('admin-account');

})->add($user_detail);
