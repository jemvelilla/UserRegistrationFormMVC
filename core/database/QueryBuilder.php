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
		
		$sql = sprintf(
				'delete from %s where id IN (%s)',
				$table,
				$parameters
		);
		
		$statement = $this->conn->prepare($sql);
	
		$statement->execute();
	}
	
	public function selectToUpdate($table, $parameters){

			$sql = 'SELECT * FROM '. $table . ' where id=' . $parameters;
			return $this->conn->query($sql);
	
	}
	
	public function update($table, $parameters, $values, $id){
		
		$ids = $id;
		
		for ($i=0;$i< sizeof($ids);$i++) {
			$sql = sprintf(
					'update %s SET %s where id = %s',
					$table,
					implode(', ', array_keys($parameters)),
					$ids[$i]
			);
			
			$statement = $this->conn->prepare($sql);
			$statement->execute($values);
			
		}
	}
}