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
