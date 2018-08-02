<?php 

ob_start(); //tirar espaços em branco entre as variáveis

if(($_SESSION['usuarionivelacesso_id'] == "") || ($_SESSION['usuarioNome'] == "") || ($_SESSION['usuarioSenha'] == "") || (is_null($_SESSION['usuarionivelacesso_id'])) || (is_null($_SESSION['usuarioNome'])) || (is_null($_SESSION['usuarioSenha']))) {
     
    session_unset();
	
	//Mensagem de erro
	$_SESSION['loginErro'] = "Área restrita para usuários cadastrados!";
	//Manda usuário para tela de Login
	$filename = "controller/login/login.php";
	if (file_exists($filename)){
		header("Location: controller/login/login.php");
	}else{
			header("Location: ../controller/login/login.php");

	}

	}

 ?>
