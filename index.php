<?php

//class User
//{
//    public string $name;
//
//    public int $age;
//}
//
//$user = new User;
//$user->name = 'Jim';
//$user->age = 25;
//
//$serializeObject = serialize($user);
//
////echo $serializeObject;
//echo "<pre>";
//print_r(unserialize($serializeObject));
//echo "<pre>";
//
//
//exit;
session_start();


define('APP_URL', 'http://localhost:8080/');
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
require_once APP_DIR . 'system/Auth.php';
require_once APP_DIR . 'interfaces/SQLQueryBuilder.php';
require_once APP_DIR . 'system/MysqlQueryBuilder.php';
require_once CONTROLLERS_DIR . 'Controller.php';


$connector = Connector::getInstance();
$builder = new MysqlQueryBuilder();
$repository = new UserRepository($connector, $builder);

echo "<br>";
print_r($repository->find(18));
echo "<br>";
exit;

$router = new Router;
$router->addRoute('/login', [
    'get' => 'AuthController@login',
    'post' => 'AuthController@auth'
]);

$router->addRoute('/logout', [
    'get' => 'AuthController@logout',
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

