<?php 
	try {
		$conn = new PDO("mysql:dbname=major_db;host=localhost", "root", "");
	} catch (PDOException  $e) {
	   print $e->getMessage();
	}
 ?>