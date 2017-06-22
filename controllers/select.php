<?php

session_start();
if(isset($_SESSION['user'])){

	if(isset($_POST['selected']) && isset($_POST['delete'])){
		$app['database'] -> delete('records', $_POST['selected']);
		echo "<script> alert('Successfully Deleted!');
						window.location.href='/view';
			</script>";
		
		$_SESSION['selected'] = $_POST['selected'];
	
	} else if(isset($_POST['selected']) && isset($_POST['update'])){
		
		$users = $app['database']->selectToUpdate('records', $_POST['selected']);
		require 'views/update.view.php';
		
		$_SESSION['selected'] = $_POST['selected'];
	
	} else {
		echo "<script> alert('Select atleast one item');
						window.location.href='/view';
			</script>";
	}
	
} else{
	
	echo "<script> alert('Login first!');
			window.location.href='/';
		</script>";

}
