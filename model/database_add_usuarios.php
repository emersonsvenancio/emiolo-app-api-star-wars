<?php 
//check if submit button is clicked
//  If(isset($_POST['submit'])){

try {

	require_once('inc/conexao_pdo.php');
  
		// prepare sql and bind parameters
		$stmt4 = $conn->prepare("INSERT INTO tb_login (Usuario, email, Senha, nivelacesso_id) VALUES (:Usuario, :email, :Senha, :nivelacesso_id)");

		$stmt4->bindParam(':Usuario', $Usuario);
		$stmt4->bindParam(':email', $email);
		$stmt4->bindParam(':Senha', $Senha);
		$stmt4->bindParam(':nivelacesso_id', $nivelacesso_id);
		  
		// insert a row
		$Usuario = "Novo";
		$email = "teste@teste.com";
		$Senha = "Nova";
		$nivelacesso_id = "1";

		$stmt4->execute();

		header('location: ../view/usuarios.php');
	}
catch(PDOException $e)
	{
		echo "Error: " . $e->getMessage();
	}
	$conn = null;
//}
?>
