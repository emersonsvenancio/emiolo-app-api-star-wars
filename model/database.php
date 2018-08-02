<?php 
require_once('inc/conexao_pdo.php');

  $usuariot = $_POST['usuariocampo'];
  $senhat = $_POST['senhacampo'];
  
  $stmt13 = $conn->prepare("SELECT * FROM tb_login WHERE Usuario ='$usuariot' and Senha = '$senhat' limit 1");
    
?>