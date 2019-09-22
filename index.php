<?php 

require_once("vendor/autoload.php");

use Ecommerce\DB\Pager;

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {

	$pager = new Pager();
	$pager->setTpl('index');


});

$app->run();

 ?>