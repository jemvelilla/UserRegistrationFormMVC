<?php

session_start();

if(isset($_SESSION['user'])){

	$app['database'] -> update('records', [
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
	
	if(isset($_POST['updateUser'])){
		echo "<script> alert('Successfully Updated!');
						window.location.href='/view';
						</script>";
	} else {
		header('location: /');
	}
} else{

	echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";

}
