<?php
session_start();
require '../functions/loadTemplate.php';
require '../database.php';
require '../classes/DatabaseTable.php';
require '../controllers/kitchenController.php';
require '../controllers/menuController.php';
require '../controllers/commentsController.php';
require '../controllers/imageController.php';
require '../controllers/loginController.php';


// var_dump($_SESSION);
// echo password_hash('password', PASSWORD_DEFAULT);

$kitchenTable = new DatabaseTable($pdo, 'category','id');
$menuTable = new DatabaseTable($pdo, 'menu', 'id');
$commentTable = new DatabaseTable($pdo, 'comments', 'id');
$imageTable = new DatabaseTable($pdo, 'images', 'id');
$loginTable = new DatabaseTable($pdo, 'users', 'id');



$controllers = [];
$controllers['kitchen'] = new kitchenController($kitchenTable);
$controllers['dishes'] = new menuController($menuTable, $kitchenTable, $commentTable);
$controllers['comments'] = new commentsController($commentTable);
$controllers['image'] = new imageController($imageTable, $menuTable, $kitchenTable );
$controllers['login'] = new loginController($loginTable);





$route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
if ($route == '') {
$page = $controllers['kitchen']->home();
}

else { 
    list($controllerName, $functionName) = explode ('/', $route);
    $controller = $controllers[$controllerName];
    $page = $controller->$functionName();

}
$output = loadTemplate('../templates/' . $page['template'], $page['variables']);
$title = $page['title'];
$option = $page['option']; 
require  '../templates/layoutside.html.php';
