<?php

namespace App\Models;

class User{
	
	private $username;
	private $password;
	private $email;
	private $firstname;
	private $lastname;
	private $birthdate;
	private $gender;
	
	public function getUsername(){
		return $this->username;
	}
	
	public function getPassword(){
		return $this->password;
	}
	
	public function getEmail(){
		return $this->email;
	}
	
	public function getFirstname(){
		return $this->firstname;
	}
	
	public function getLastname(){
		return $this->lastname;
	}
	
	public function getBirthdate(){
		return $this->birthdate;
	}
	
	public function getGender(){
		return $this->gender;
	}
	
	public function set(){
		$this->username = $_POST['username'];
		$this->password = $_POST['password'];
		$this->email = $_POST['email'];
		$this->firstname = $_POST['firstname'];
		$this->lastname = $_POST['lastname'];
		$this->birthdate = $_POST['birthdate'];
		$this->gender = $_POST['gender'];
	}
}