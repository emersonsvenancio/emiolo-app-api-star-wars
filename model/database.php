<?php 
require_once('inc/conexao_pdo.php');

  $usuariot = $_POST['usuariocampo'];
  $senhat = $_POST['senhacampo'];
  
  $stmt1 = $conn->prepare("SELECT * FROM tb_login WHERE Usuario ='$usuariot' and Senha = '$senhat' limit 1");
  $stmt2 = $conn->prepare("SELECT * FROM tb_login");
  
  $stmt3 = $conn->prepare("UPDATE tb_login set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  Cod_Usuario=".$_POST["id"]);
  
  $stmt3->execute(); 

    
?>