<?php

Class QueryBuilder{
	
	protected $conn;
	
	public function __construct($conn){
		$this->conn = $conn;	
		
	}
	public function selectUser($table){
		$statement = $this->conn->prepare('SELECT * FROM '. $table);
		
		$statement->execute();
		
		return $statement->fetchAll(PDO::FETCH_CLASS);
		
	}
	
	public function insert($table, $parameters){
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table, 
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters))
		);
		
		$statement = $this->conn->prepare($sql);
		
		$statement->execute($parameters);
	}
	
	public function delete($table, $parameters){
		try{
			$sql = sprintf(
					'delete from %s where id IN (%s)',
					$table,
					$parameters
			);
			
			$statement = $this->conn->prepare($sql);
		
			$statement->execute();
		} catch (PDOException $e){
			session_start();
			$_SESSION['message'] = "Delete not successful.";
		}
		
	}
	
	public function deleteall($table){
		try{
			$sql = sprintf(
					'delete from %s',
					$table
			);
		
			$statement = $this->conn->prepare($sql);
		
			$statement->execute();
		} catch (PDOException $e){
			session_start();
			$_SESSION['message'] = "Delete not successful.";
		}
	}
		
	public function selectToUpdate($table, $parameters){

			$sql = 'SELECT * FROM '. $table . ' where id=' . $parameters;
			
			return $this->conn->query($sql);
	
	}
	
	public function update($table, $parameters, $values, $id){
		try{
			$sql = sprintf(
					'update %s SET %s where id = %s',
					$table,
					implode(', ', array_keys($parameters)),
					$id
			);
			
			$statement = $this->conn->prepare($sql);
			$statement->execute($values);
		} catch (PDOException $e){
			session_start();
			$_SESSION['message'] = "Update not successful.";
		}	
	}
}