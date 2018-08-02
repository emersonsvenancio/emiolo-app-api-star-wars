<?php  
	session_start();
    require_once("controller/login/secure.php");
    require_once('model/inc/conexao_pdo.php');

?>		

    <h1>Emiolo - API - Star Wars</h1>		<hr />		
        
        <head>
            <script src="<?php if (file_exists("js/jquery.min.js")){ echo $url = "js/jquery.min.js"; }  
                else { echo $url = "../js/jquery.min.js"; } ?>">
            </script>

            <script src="<?php if (file_exists("js/bootstrap.min.js")){ echo $url = "js/bootstrap.min.js"; }  
                else { echo $url = "../js/bootstrap.min.js"; } ?>">
            </script>       

            <link rel="stylesheet" href="<?php 
                if (file_exists("css/bootstrap.min.css")){ echo $url = "css/bootstrap.min.css"; }  
                else { echo $url = "../css/bootstrap.min.css"; } 
            ?>" />

            <link rel="stylesheet" href="<?php 
                if (file_exists("css/bootstrap-responsive.min.css")){ echo $url = "css/bootstrap-responsive.min.css"; }  
                else { echo $url = "../css/bootstrap-responsive.min.css"; } 
            ?>" />

            <link rel="stylesheet" href="<?php 
                if (file_exists("css/matrix-style.css")){ echo $url = "css/matrix-style.css"; }  
                else { echo $url = "../css/matrix-style.css"; } 
            ?>" />

            <link href="<?php 
                if (file_exists("css/font-awesome.css")){ echo $url = "css/font-awesome.css"; }  
                else { echo $url = "../css/font-awesome.css"; } 
            ?>" rel="stylesheet" />
        </head>

<body>	
    <div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bem vindo <?php echo $_SESSION['usuarioNome']; ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="<?php 
                        if (file_exists("login/login.php")){ echo $url = "login/login.php"; }  
                        else { echo $url = "../login/login.php"; } 
                        ?>"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a></li>
  </ul>
</div>
<div>
  <ul class="quick-actions">
         <li class="bg_ly"> <a href="view/api.php"> <i class="glyphicon glyphicon-inbox" style="color:white;font-size:2.6em"></i><span class="label label-success"></span></br></br>APIs </a> </li>
         <li class="bg_ly"> <a href="<?php 
            if (file_exists("controller/login/login.php")){ echo $url = "controller/login/login.php"; }  
            else { echo $url = "../controller/login/login.php"; } 
            ?>"> <i class="glyphicon glyphicon-inbox" style="color:white;font-size:2.6em"></i><span class="label label-success"></span></br></br>Sair </a> 
        </li>
      </ul>
      </div>
</body>	
