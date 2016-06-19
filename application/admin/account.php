<?php
$app->group('/admin/account', function () {
    $this->map(['GET', 'POST'], '/view', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/account.html', [
            'user_detail'=>$req->getAttribute('user_detail')
        ]);
    })->setName('admin-account');
})->add($user_detail);
