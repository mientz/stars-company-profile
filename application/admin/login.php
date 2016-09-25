<?php
$app->get('/admin', function ($req, $res, $args) {
    if(isset($this->session->user_id)){
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
    }
    $select = $this->db->query("select * from user")->fetchAll(PDO::FETCH_ASSOC);
    return $this->view->render($res, 'admin/login.html', [
        'users' => $select
    ]);
})->setName('admin-login');

$app->get('/admin/error', function ($req, $res, $args) {
    if(isset($this->session->user_id)){
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
    }
    $select = $this->db->query("select * from user")->fetchAll(PDO::FETCH_ASSOC);
    return $this->view->render($res, 'admin/login.html', [
        'users' => $select,
        'error' => true
    ]);
})->setName('admin-login');

$app->post('/admin', function ($req, $res, $args) {
    $select = $this->db->prepare("select * from user where password=:password and (username=:username or email=:email) group by user_id");
    $select->bindParam(':username', $_POST["username"], PDO::PARAM_STR);
    $select->bindParam(':email', $_POST["username"], PDO::PARAM_STR);
    $select->bindParam(':password', md5($_POST["password"]), PDO::PARAM_STR);
    $select->execute();
    $count = $select->rowCount();
    $data = $select->fetch(PDO::FETCH_ASSOC);
    if($count == 1){
        $this->session->set('user_id', $data["user_id"]);
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
    }else{
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login')."/error");
    }
    return $res;
});

$app->get('/admin/logout', function ($req, $res, $args) {
    $session = new \SlimSession\Helper;
    $session::destroy();
    return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-product'));
})->setName('admin-logout');
