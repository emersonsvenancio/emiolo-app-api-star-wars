<?php 
  
$id = $_GET['id']; 

	require_once('inc/conexao_pdo.php');

try {
  $conn -> beginTransaction();

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt1 = $conn->prepare("DELETE FROM tb_login WHERE Cod_Usuario = :id");
   
  $stmt1->bindParam(':id', $id); 
  $stmt1->execute();
// $conn ->rollback();   CANCELA UMA TRANSAÇAO
  $conn ->commit(); // CONFIRMA UMA TRANSAÇAO


		header('location: ../view/usuarios.php');
     
  echo $stmt1->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();

}
?>