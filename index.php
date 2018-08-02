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
  <ul class="quick-actions">
         <li class="bg_ly"> <a href=""> <i class="glyphicon glyphicon-inbox" style="color:white;font-size:2.6em"></i><span class="label label-success"></span></br></br>APIs </a> </li>
      </ul>
</body>	
