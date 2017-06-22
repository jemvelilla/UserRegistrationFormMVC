<?php

$app['database'] -> insert('records', [
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
} else{
		header('location: /');
}
