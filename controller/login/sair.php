<?php 
session_start();
session_unset();
session_destroy();
$filename = "login/login.php";
	if (file_exists($filename)){
		header("Location: login/login.php");
	}else{
			header("Location: ../login/login.php");

	}
?>