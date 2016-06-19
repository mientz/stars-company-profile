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
    $view = new \Slim\Views\Twig('template'/*, [
        'cache' => 'template/cache'
    ]*/);
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
