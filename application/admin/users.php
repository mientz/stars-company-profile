<?php
$app->group('/admin/users', function () {
    $this->map(['GET', 'POST'], '/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/users.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'users'=>$this->db->query("select * from user")->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-users');

    $this->post('/invite', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $email = $_POST['email'];
        $invitor = $_POST['name'];
        $this->mailler->addAddress($email);
        $this->mailler->isHTML(true);
        $this->mailler->Subject = 'Undangan Akses Manajemen Website PT.STARS Indonesia';
        $this->mailler->Body = $this->view->render($res, 'email/email.html', [
            'link'=>$req->getUri()->getHost().$this->router->pathFor('admin-register', ['email'=>$email]),
        ]);
        if(!$this->mailler->send()) {
            $result["status"]='failed';
            $result["message"]=$this->mailler->ErrorInfo;
            echo json_encode($result);
        }else{
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-users'));
        }
    })->setName('admin-users-invite');

    $this->post('/moderation', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $update = $this->db->prepare("update user set permission='".$_POST['permission']."' where user_id='".$_POST['id']."'");
        if($update->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-users'));
        }
    })->setName('admin-users-moderation');

    $this->get('/delete/{user_id}', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        $delete = $this->db->prepare("delete from user where user_id='".$args['user_id']."'");
        if($delete->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-users'));
        }
    })->setName('admin-users-delete');
})->add($user_detail);
