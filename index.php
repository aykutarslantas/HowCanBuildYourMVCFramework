<?php
require_once 'Autoloader.php';


$router = new Core\Router();


/*
 * You can find pages in below urls's
 * / , /folder1, /folder2
 */
$router->add('', ['controller' => 'PageController', 'action' => 'index']);
$router->add('folder1', ['controller' => 'PageController', 'action' => 'folderOne']);
$router->add('folder2', ['controller' => 'PageController', 'action' => 'folderTwo']);


/*
 * Another way you can find with controller and function name
 * exp: /PageController/index , /PageController/folderOne, /PageController/folderTwo
 */
$router->add('{controller}/{action}');

$router->dispatch($_SERVER['QUERY_STRING']);
