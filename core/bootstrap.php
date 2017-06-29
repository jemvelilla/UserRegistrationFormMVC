<?php

use App\Core\App;

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
		Connection::connectToDb(App::get('config')['database'])
));

function view($name, $data){
	
	extract($data);
	return require "app/views/{$name}.view.php";
}

function redirect($location){
	return header("Location: /{$location}");
}

function script($message, $location){
	return "<script> alert('{$message}');
				window.location.href='{$location}';
			</script>";
}