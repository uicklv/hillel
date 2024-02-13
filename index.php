<?php
session_start();


define('APP_DIR', __DIR__ . '/');
define('CONTROLLERS_DIR', __DIR__ . '/controllers/');
define('VIEWS_DIR', __DIR__ . '/views/');

require_once APP_DIR . 'functions.php';
require_once APP_DIR . 'database/config.php';
require_once APP_DIR . 'database/Connector.php';
require_once APP_DIR . 'database/Repository.php';
require_once APP_DIR . 'database/UserRepository.php';
require_once APP_DIR . 'system/Request.php';
require_once APP_DIR . 'system/Router.php';
require_once APP_DIR . 'system/Session.php';
require_once APP_DIR . 'system/Response.php';
require_once APP_DIR . 'traits/Validator.php';
require_once APP_DIR . 'system/View.php';
require_once CONTROLLERS_DIR . 'Controller.php';

$router = new Router;
$router->addRoute('/login', [
    'get' => 'AuthController@login',
    'post' => 'AuthController@auth'
]);

$router->addRoute('/register', [
    'get' => 'AuthController@register',
    'post' => 'AuthController@registerProcess'
]);

$router->addRoute('/blogs', [
    'get' => 'BlogController@index',
    'post' => 'BlogController@create'
]);

$router->processRoute(Request::getUrl(), Request::getMethod());

