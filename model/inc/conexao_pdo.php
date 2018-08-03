<?php 
	try {
		$conn = new PDO("mysql:dbname=user_api_db;host=localhost", "root", "");
	} catch (PDOException  $e) {
	   print $e->getMessage();
	}
 ?>