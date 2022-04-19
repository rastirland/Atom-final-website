<?php
namespace ikdb;

class Routes  {
    
    public function getController($name) {
        require '../database.php';
        $kitchenTable = new \classes\DatabaseTable($pdo, 'category','id');
        $menuTable = new \classes\DatabaseTable($pdo, 'menu', 'id');
        $commentTable = new \classes\DatabaseTable($pdo, 'comments', 'id');
        
        
        $controllers = [];
        $controllers['kitchen'] = new \ikdb\controllers\kitchenController($kitchenTable);
        $controllers['dishes'] = new \ikdb\controllers\menuController($menuTable, $kitchenTable);
        $controllers['comments'] = new \ikdb\controllers\commentsController($commentTable);
        
        return $controllers[$name];
        // if ($route == '') {
        // $page = $controllers['kitchen']->home();
        // }
    }
    // public function checkLogin($route) {
		
	// 	$loginRoutes = [];

	// 	$loginRoutes['/joke/edit'] =  true;
	// 	$loginRoutes['/category/edit'] = true;

	// 	$requiresLogin = $loginRoutes[$route] ?? false;

	// 	if ($requiresLogin && !isset($_SESSION['loggedin'])) {
	// 		header('location: /user/login');
	// 		exit();
	// 	}

	public function getDefaultRoute() {
		return 'kitchen/home';
	}
    }
