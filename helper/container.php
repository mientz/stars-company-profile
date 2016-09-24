<?php

// container list
// database container
$container['db'] = function ($c) {
    $settings = $c->get('settings')['database'];
    $pdo = new PDO("mysql:host=" . $settings['host'] . ";dbname=" . $settings['database_name'], $settings['user'], $settings['pass']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
};

// twig templating container
$container['view'] = function ($container) {
    $settings = $container->get('settings')['template'];
    if ($settings['cache']) {
        $view = new \Slim\Views\Twig('template', [
            'cache' => $settings['cache_location']
        ]);
    }else{
        $view = new \Slim\Views\Twig('template');
    }
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};

//session helper
$container['session'] = function ($c) {
    return new \SlimSession\Helper;
};

$container['mailler'] = function ($container){

    $mail = new PHPMailer;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'kartunamapal@gmail.com';                 // SMTP username
    $mail->Password = 'transistor';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    $mail->setFrom('kartunamapal@gmail.com', 'PT. STARS Internasional');
    return $mail;
};
