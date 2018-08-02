<?php 
  session_start();
  //echo $_SESSION['usuarioNome'];
 ?>

 
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">      
    <meta http-equiv="X-UA-Compatible" content="chrome=1,FF=3">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página para login">
    <meta name="author" content="Emerson">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/signin.css" rel="stylesheet">
  </head>

  <body background="img/fundo1.jpg" class="text-center">
    
      <?php 
          session_unset();
      ?>
      
    <div id="site">
    <form class="form-signin" method="POST" ACTION="validalogin.php">
      <h1 class="h3 mb-3 font-weight text-center title" style="color:gray">Digite seu email e senha</h1>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="email" name="usuariocampo" class="form-control" placeholder="Email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" name="senhacampo" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    </div>
  </body>
</html>