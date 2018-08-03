<?php 
	require_once('inc/conexao_pdo.php');
  
  	$stmt3 = $conn->prepare("UPDATE tb_login set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  Cod_Usuario=".$_POST["id"]);
  
  	$stmt3->execute(); 

?>