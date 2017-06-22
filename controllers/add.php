<?php
session_start();

if(isset($_SESSION['user'])){

	require 'views/add.view.php';

} else{
	
	echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";

}