<?php

namespace App\Controllers;

use App\Core\App;
use App\Models\User;

class UsersController extends User{
	
	public function login(){
		
		$this->set();
		
		$users = App::get('database')->selectUser('records');
		
		foreach ($users as $row){
			
			if($this->getUsername() == $row->Username 
				&& sha1($this->getPassword()) == $row->Password){

				session_start();
				$_SESSION['user'] = "active";
				
				return redirect('view');		
			} 

			echo script('Invalid Credentials.', '/');
		}
	}
	
	public function view(){
	
		session_start();
	
		if(isset($_SESSION['user'])){
	
			$users = App::get('database')->selectUser('records');
	
			return view('view', ['users' => $users]);
	
		}
			
		echo script('Login first!', '/');
	}
	
	public function add(){
		$this->set();
		
		App::get('database') -> insert('records', [
		'Username' => $this->getUsername(),
		'Password' => sha1($this->getPassword()),
		'Email' => $this->getEmail(),
		'First_Name' => $this->getFirstname(),
		'Last_Name' => $this->getLastname(),
		'Birthdate' => $this->getBirthdate(),
		'Gender' => $this->getGender()
		]);
	
		if(isset($_POST['create'])){
			
			echo script('Successfully Created!', '/');
			
		} else if (isset($_POST['addUser'])) {
			
			echo script('Successfully Added!', '/view');
	
		} else if (isset($_POST['addAnother'])){
			
			echo script('Successfully Added!', '/add');
		
		}
	
	}
	public function update(){
		
		$this->set();
		
		session_start();
		
		if(isset($_SESSION['user'])){
			App::get('database') -> update('records', [
			'Username= :Username' => $this->getUsername(),
			'Password= :Password' => sha1($this->getPassword()),
			'Email= :Email' => $this->getEmail(),
			'First_Name= :First_Name' => $this->getFirstname(),
			'Last_Name= :Last_Name' => $this->getLastname(),
			'Birthdate= :Birthdate' => $this->getBirthdate(),
			'Gender= :Gender' => $this->getGender()
			], [
			':Username' => $this->getUsername(),
			':Password' => sha1($this->getPassword()),
			':Email' => $this->getEmail(),
			':First_Name' => $this->getFirstname(),
			':Last_Name' => $this->getLastname(),
			':Birthdate' => $this->getBirthdate(),
			':Gender' => $this->getGender()
			], $_SESSION['selected']);
			
			$_SESSION['message'] = "Update successful";
			return redirect('view');

		}
			
		echo script('Login first!', '/');
	}
	
	public function delete(){
		
		session_start();
		
		if(isset($_SESSION['user'])){
				
			App::get('database') -> delete('records', $_POST['delete']);
				
			$_SESSION['message'] = "Delete successful";
			return redirect('view');
				
		} 
		
		echo script('Login first!', '/');
	}
	
	public function deleteall(){
		
		session_start();
		
		if(isset($_SESSION['user'])){
	
			App::get('database') -> deleteall('records');
	
			$_SESSION['message'] = "Delete successful";
			return redirect('view');
	
		}
		
		echo script('Login first!', '/');
	}
	
	public function select(){
	
		session_start();
	
		if(isset($_SESSION['user'])){
		
			$users = App::get('database')->selectToUpdate('records',  $_POST['update']);
			
			$_SESSION['selected'] = $_POST['update'];
			
			return view('update', ['users' => $users]);
				
		}	
		
		echo script('Login first!', '/');
	}

}