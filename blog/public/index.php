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

$router->get('/admin', function(){
	return render('../views/admin/index.php');
});

$router->get('/admin/nuevo', function(){
	return render('../views/admin/nuevo.php');
});

$router->get('/admin/posts', function() use ($pdo){
	$query = $pdo->prepare('SELECT * FROM blog_post ORDER BY id DESC');
	$query->execute();
	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	return render('../views/admin/posts.php' , ['blogPosts' => $blogPosts]);
});

$router->get('/', function () use ($pdo){
	$query = $pdo->prepare('SELECT * FROM blog_post ORDER BY id DESC');
	$query->execute();
	$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);
	return  render('../views/index.php',['blogPosts' => $blogPosts]);
}); 

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$route);

echo $response;

?>