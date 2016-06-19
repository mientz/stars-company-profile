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
})->add($user_detail);
