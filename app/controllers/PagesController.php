<?php

namespace App\Controllers;

class PagesController{
	
	public function home(){
		return view('login', []);
	
	}
	
	
	public function addview(){
		session_start();
	
		if(isset($_SESSION['user'])){
	
			return view('add', []);
	
		} else{
	
			echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";
	
		}
	
	}
	
	public function updateview(){
	
		session_start();
		
		if(isset($_SESSION['user'])){
		
			return view('update');
		
		} else{
		
			echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";
		
		}
	}
	
	public function logout(){
		session_start();
		
		unset($_SESSION['user']);
		
		header('location: /');
	}
}