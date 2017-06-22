<?php

session_start();
if(isset($_SESSION['user'])){
	
	$app['database'] -> insert('records', [
			'Username' => $_POST['username'],
			'Password' => sha1($_POST['password']),
			'Email' => $_POST['email'],
			'First_Name' => $_POST['firstname'],
			'Last_Name' => $_POST['lastname'],
			'Birthdate' => $_POST['birthdate'],
			'Gender' => $_POST['gender']
	]);
	
	if(isset($_POST['addUser'])){
		echo "<script> alert('Successfully Created!');
						window.location.href='/view';
						</script>";
	} else if(isset($_POST['addAnother'])){
		echo "<script> alert('Successfully Created!');
						window.location.href='/add';
						</script>";
	} else{
		header('location: /');
	}

} else{
	echo "<script> alert('Login first!');
						window.location.href='/';
						</script>";
}