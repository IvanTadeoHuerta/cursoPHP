<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

include_once '../config.php';

$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'.$_SERVER['HTTP_HOST']. $baseDir;

define('BASE_URL',$baseUrl);

$route = $_GET['route'] ?? '/';

function render($fileName, $params =[]){
	ob_start();
	extract($params);
	include $fileName;
	return ob_get_clean();
}

/*
 *https://packagist.org/packages/phroute/phroute
 */
use Phroute\Phroute\RouteCollector;

$router = new RouteCollector();

$router->controller('/admin', App\Controller\Admin\IndexController::class);

$router->Controller('/admin/nuevo');

$router->controller('/admin/nuevo', App\Controller\Admin\PostController::class);


$router->controller('/',App\Controller\IndexController::class);
# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);

echo $response;

?>