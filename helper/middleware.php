<?php
$app->add(new \Slim\Middleware\Session([
    'name' => 'stars',
    'autorefresh' => true,
    'lifetime' => '1 hour'
]));

// user detail middleware
$user_detail = function ($req, $res, $next) {
    $user_id = $this->session->user_id;
    $select = $this->db->prepare("select * from user where user_id=:user_id");
    $select->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    $select->execute();
    $req = $req->withAttribute('user_detail', $select->fetch(PDO::FETCH_ASSOC));
    $response = $next($req, $res);
    return $response;
};
