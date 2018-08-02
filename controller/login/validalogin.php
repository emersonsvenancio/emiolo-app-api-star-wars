<?php 
  session_start();
  require_once('../../model/inc/conexao_pdo.php');
  require_once('../../model/database.php');

  $stmt13->execute();
  $result = $stmt13->fetchAll(PDO::FETCH_ASSOC);
 
 if (empty($result)) { //se os dados estão incorretos
  $_SESSION['loginErro'] = "Usuário ou senha inválido";
 
  //Manda o usário para tela de login
  header("Location: login.php");
  
 } else { // se estão corretos
        foreach ($result as $row) {
            $_SESSION['usuarionivelacesso_id'] =  $row['nivelacesso_id'];
            $_SESSION['usuarioSenha']          =  $row['Senha'];
            $_SESSION['usuarioNome']           =  $row['Usuario'];
            
        }

        if ($row['nivelacesso_id'] == 1){
            header("Location: ../../index.php");
          }else{  
            header("Location: ../../view/api.php");
          }
 }
 

 ?>


