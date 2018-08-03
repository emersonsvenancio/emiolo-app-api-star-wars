<?php 
require_once('inc/conexao_pdo.php');

  $usuariot = $_POST['usuariocampo'];
  $senhat = $_POST['senhacampo'];
  
  $stmt1 = $conn->prepare("SELECT * FROM tb_login WHERE email ='$usuariot' and Senha = '$senhat' limit 1");
  
  $stmt2 = $conn->prepare("SELECT * FROM tb_login ORDER BY Cod_Usuario DESC");
  
 
?>