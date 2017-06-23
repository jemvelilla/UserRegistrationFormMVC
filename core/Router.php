<?php

namespace App\Core;
	
class Router{
	
	protected $routes = [];
	
	public static function load($file){
		$router = new static;
		require $file;
		return $router;
	}
	
	public function define($routes){
		$this->routes = $routes;	
	}
	
	public function direct($uri){
		
		if (array_key_exists($uri, $this->routes)){
			//return $this->routes[$uri];
			
			return $this->callAction(
				...explode('@', $this->routes[$uri])
			);
			
		}
		
		throw new Exception('No route found for this uri.');
	}
	
	protected function callAction($controller, $action){
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;
		
		if(! method_exists($controller, $action)){
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}
		return $controller->$action();
		
	}
	
}