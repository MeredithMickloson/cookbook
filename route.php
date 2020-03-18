<?php

class Route
{

	static function start($url)
	{
		$controller_name = 'main';
		$action_name = 'index';
		$routes = explode('/', $url);
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		if ( !empty($routes[2]) )
		{
			if(stristr($routes[2], "?")){
				$action_name = stristr($routes[2], '?', true);
			}
			else{
				$action_name = $routes[2];
			}
		}
		else if ( empty($routes[2]) ){
			$action_name = "index";
		}

		$model_name = 'Model_' . $controller_name;
		$controller_name = 'Controller_' . $controller_name;
		$action_name = 'action_' . $action_name;

		$model_file = strtolower($model_name) . '.php';
		$model_path = "models/" . $model_file;
		if(file_exists($model_path))
		{
			include $model_path;
		}

		$view_path = "views/view.php";
		if(file_exists($view_path))
		{
			include $view_path;
		}

		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include $controller_path;
		}
		else
		{
			Route::Error_404();
		}

		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			$controller->$action();
		}
		else
		{
			Route:: Error_404();
		}
        return $controller_name;
	}
	static function Error_404(){
		$host = 'http://'.$_SERVER['HTTP_HOST'].'/';
		header('Location:'.$host.'404');
	}
}
