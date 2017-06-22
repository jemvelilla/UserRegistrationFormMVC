<?php

session_start();

if(isset($_SESSION['user'])){
	
	$users = $app['database']->selectUser('records');
	
	require 'views/view.view.php';

} else{

	echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";

}
