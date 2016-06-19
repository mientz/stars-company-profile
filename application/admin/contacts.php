<?php
$app->group('/admin/contact', function () {
    $this->map(['GET', 'POST'], '/list', function ($req, $res, $args) {
        if(!isset($this->session->user_id)){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-login'));
        }
        return $this->view->render($res, 'admin/contact.html', [
            'user_detail'=>$req->getAttribute('user_detail'),
            'contacts'=>$this->db->query("select * from contact order by contact_date desc")->fetchAll(PDO::FETCH_ASSOC)
        ]);
    })->setName('admin-contact');
    $this->get('/list/{contact_id}', function ($req, $res, $args){
        $this->db->exec("update contact set contact_status='read' where contact_id='".$args["contact_id"]."'");
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-contact'));
    })->setName('admin-contact-read');
    $this->get('/delete/{contact_id}', function ($req, $res, $args){
        $this->db->exec("delete from contact where contact_id='".$args["contact_id"]."'");
        return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('admin-contact'));
    })->setName('admin-contact-delete');
})->add($user_detail);
