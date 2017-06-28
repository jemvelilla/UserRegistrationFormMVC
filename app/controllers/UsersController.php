<?php

namespace App\Controllers;

use App\Core\App;

class UsersController{
	
	public function login(){
		$users = App::get('database')->selectUser('records');
	
		foreach ($users as $row){
	
			if($_POST['username'] == $row->Username && sha1($_POST['password']) == $row->Password){
	
				session_start();
				$_SESSION['user'] = "active";
	
				header('Location: /view');
				exit ();
			}
			else{
				echo "<script> alert('Invalid Credentials!');
					window.location.href='/';
					</script>";
			}
		}
	}
	
	public function view(){
	
		session_start();
	
		if(isset($_SESSION['user'])){
	
			$users = App::get('database')->selectUser('records');
	
			return view('view', ['users' => $users]);
	
		} else{
	
			echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";
	
		}
	
	}
	
	public function add(){
	
		App::get('database') -> insert('records', [
		'Username' => $_POST['username'],
		'Password' => sha1($_POST['password']),
		'Email' => $_POST['email'],
		'First_Name' => $_POST['firstname'],
		'Last_Name' => $_POST['lastname'],
		'Birthdate' => $_POST['birthdate'],
		'Gender' => $_POST['gender']
		]);
	
		if(isset($_POST['create'])){
			echo "<script> alert('Successfully Created!');
				window.location.href='/';
			</script>";
		} else if (isset($_POST['addUser'])) {
			echo "<script> alert('Successfully Added!');
				window.location.href='/view';
			</script>";
		} else if (isset($_POST['addAnother'])){
			echo "<script> alert('Successfully Added!');
				window.location.href='/add';
			</script>";
		}
	
	}
	public function update(){
		session_start();
	
		if(isset($_SESSION['user'])){
			App::get('database') -> update('records', [
			'Username= :Username' => $_POST['username'],
			'Password= :Password' => sha1($_POST['password']),
			'Email= :Email' => $_POST['email'],
			'First_Name= :First_Name' => $_POST['firstname'],
			'Last_Name= :Last_Name' => $_POST['lastname'],
			'Birthdate= :Birthdate' => $_POST['birthdate'],
			'Gender= :Gender' => $_POST['gender']
			], [
			':Username' => $_POST['username'],
			':Password' => sha1($_POST['password']),
			':Email' => $_POST['email'],
			':First_Name' => $_POST['firstname'],
			':Last_Name' => $_POST['lastname'],
			':Birthdate' => $_POST['birthdate'],
			':Gender' => $_POST['gender']
			], $_SESSION['selected']);
			
			$_SESSION['message'] = "Update successful";
			header('location: /view');

		} else{
	
			echo "<script> alert('Login first!');
			window.location.href='/';
			</script>";
	
		}
	
	}
	
	public function delete(){
		session_start();
		if(isset($_SESSION['user'])){
				
				
			App::get('database') -> delete('records', $_POST['delete']);
				
			$_SESSION['message'] = "Delete successful";
			header('location: /view');
				
		} else{
	
			echo "<script> alert('Login first!');
				window.location.href='/';
				</script>";
	
		}
	
	}
	
	public function deleteall(){
		session_start();
		if(isset($_SESSION['user'])){
	
	
			App::get('database') -> deleteall('records');
	
			$_SESSION['message'] = "Delete successful";
			header('location: /view');
	
		} else{
	
			echo "<script> alert('Login first!');
				window.location.href='/';
				</script>";
	
		}
	
	}
	
	public function select(){
	
		session_start();
	
		if(isset($_SESSION['user'])){
		
			$users = App::get('database')->selectToUpdate('records',  $_POST['update']);
			
			$_SESSION['selected'] = $_POST['update'];
			
			return view('update', ['users' => $users]);
				
		} else {
			echo "<script> alert('Login first!');
			window.location.href='/';
			</script>";
		}
	}
	
	
}