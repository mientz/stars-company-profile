<?php
$app->group('/contact', function () {
    $this->get('/', function ($req, $res, $args) {
        return $this->view->render($res, 'contact.html', [

        ]);
    })->setName('contact');

    $this->post('/', function ($req, $res, $args) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $insert = $this->db->prepare("
                insert into contact (contact_name, contact_email, contact_subject, contact_messages, contact_status, contact_date)
                values(:contact_name, :contact_email, :contact_subject, :contact_messages, 'unread', :contact_date);
                ");
        $insert->bindParam(':contact_name', $name, PDO::PARAM_STR);
        $insert->bindParam(':contact_email', $email, PDO::PARAM_STR);
        $insert->bindParam(':contact_date', date('Y-m-d h:i:s', time()), PDO::PARAM_STR);
        $insert->bindParam(':contact_subject', $subject, PDO::PARAM_STR);
        $insert->bindParam(':contact_messages', $message, PDO::PARAM_STR);
        if($insert->execute()){
            return $res->withStatus(302)->withHeader('Location', $this->router->pathFor('contact'));
        }
    })->setName('contact');
})->add($front_category);
