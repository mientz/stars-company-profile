<?php
$app->group('/admin/register', function () {
    $this->map(['GET'], '/{email}', function ($req, $res, $args) {
        return $this->view->render($res, 'admin/register.html', [
            'email_data'=>$args['email']
        ]);
    })->setName('admin-register');

    $this->map(['post'], '/{email}', function ($req, $res, $args) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $email = $_POST['email'];
        $name = $_POST['name'];
		$md5pass = md5($password);
		$last_login = date("Y-m-d H:i:s");
        $cek_username = $this->db->query("select count(user_id) from user where username='".$username."'")->fetchColumn();
        $cek_email = $this->db->query("select count(user_id) from user where email='".$email."'")->fetchColumn();
        if($cek_username == 0 && $cek_email == 0 && strlen($password) >= 6 && $repassword == $password){
            $insert = $this->db->prepare(
                "insert into
                user(username, password, email, fullname, image, activated, permission, last_login)
                values(:username, :password, :email, :real_name, 'no-photo.png', '1', 'member', :last_login)"
            );
            $insert->bindParam(':username', $username, PDO::PARAM_STR);
            $insert->bindParam(':password', $md5pass, PDO::PARAM_STR);
            $insert->bindParam(':email', $email, PDO::PARAM_STR);
            $insert->bindParam(':real_name', $name, PDO::PARAM_STR);
            $insert->bindParam(':last_login', $last_login, PDO::PARAM_STR);
            if($insert->execute()){
                return $this->view->render($res, 'admin/after-register.html', []);
            }
        }else{
            return $this->view->render($res, 'admin/register.html', [
                'email_data'=>$args['email'],
                'username'=>($cek_username > 0 ? array(
                    "type"=>"danger",
                    "message"=>"username telah digunakan, coba username lain",
                    "status"=>false
                ) : ""),
                'password'=>(strlen($password) < 6 ? array(
                    "type"=>"danger",
                    "message"=>"password kurang dari 6 karakter"
                ) : ""),
                'repassword'=>($repassword != $password > 0 ? array(
                    "type"=>"danger",
                    "message"=>"kedua password tidak sama"
                ) : ""),
                'email'=>(cek_email > 0 ? array(
                    "type"=>"danger",
                    "message"=>"email telah digunakan, coba email lain"
                ) : "")
            ]);
        }
    });

    $this->get('/check/{username}', function ($req, $res, $args) {
        $count = $this->db->query("select count(user_id) from user where username='".$args['username']."'")->fetchColumn();
        if($count > 0){
            echo json_encode(array(
                "type"=>"danger",
                "message"=>"username telah digunakan, coba username lain",
                "status"=>false
            ));
        }else{
            echo json_encode(array(
                "type"=>"success",
                "message"=>"username tersedia untuk digunakan",
                "status"=>true
            ));
        }
    })->setName('admin-register-check-username');




})->add($user_detail);
