<?php

Class Connection{
	
	public static function connectToDb($config){
		try{
		
			return new PDO(
				$config['connection'].';dbname='.$config['name'],
				$config['username'],
				$config['password'],
				$config['options']
					
			);
		} catch (PDOException $e){
			die($e->getMessage());
		}
	
	
	}	
}

//$conn = Connection::connectToDb();