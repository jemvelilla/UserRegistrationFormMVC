<?php

$users = $app['database']->selectUser('records');

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