<?php
    session_start();
?>

<head>

    <script src="<?php if (file_exists("js/jquery.min.js")){ echo $url = "js/jquery.min.js"; }  
                        else { echo $url = "../js/jquery.min.js"; } ?>"></script>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    
    <script src="<?php if (file_exists("js/bootstrap.min.js")){ echo $url = "js/bootstrap.min.js"; }  
                        else { echo $url = "../js/bootstrap.min.js"; } ?>"></script>        
    <link rel="stylesheet" href="<?php 
                        if (file_exists("css/bootstrap-responsive.min.css")){ echo $url = "css/bootstrap-responsive.min.css"; }  
                        else { echo $url = "../css/bootstrap-responsive.min.css"; } 
                        ?>" />

    <link rel="stylesheet" href="<?php 
                        if (file_exists("css/matrix-style.css")){ echo $url = "css/matrix-style.css"; }  
                        else { echo $url = "../css/matrix-style.css"; } 
                        ?>" />

    <link rel="stylesheet" href="<?php 
                        if (file_exists("css/matrix-media.css")){ echo $url = "css/matrix-media.css"; }  
                        else { echo $url = "../css/matrix-media.css"; } 
                        ?>" />
    <link href="<?php 
                        if (file_exists("css/font-awesome.css")){ echo $url = "css/font-awesome.css"; }  
                        else { echo $url = "../css/font-awesome.css"; } 
                        ?>" rel="stylesheet" />
<link href="<?php 
                        if (file_exists("css/bootstrap_table.css")){ echo $url = "css/bootstrap_table.css"; }  
                        else { echo $url = "../css/bootstrap_table.css"; } 
                        ?>" rel="stylesheet" />                        

       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />  

</head>

    <div id="user-nav" class="navbar navbar-inverse">
        <div id="menu">
            <ul class="nav">
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bem vindo <?php echo $_SESSION['usuarioNome']; ?></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php 
                        if (file_exists("controller/login/login.php")){ echo $url = "controller/login/login.php"; }  
                        else { echo $url = "../controller/login/login.php"; } 
                        ?>"><i class="icon-key"></i> Usuários </a>
                    </li>
                </ul>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("index.php")){ echo $url = "index.php"; }  
                else { echo $url = "../index.php"; } 
                ?>"><i class="icon icon-home"></i> <span class="text">Home</span></a>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("view/api.php")){ echo $url = "view/api.php"; }  
                else { echo $url = "../view/api.php"; } 
                ?>"><i class="icon icon-star"></i> <span class="text">APIs</span></a>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("view/usuarios.php")){ echo $url = "view/usuarios.php"; }  
                else { echo $url = "../view/usuarios.php"; } 
                ?>"><i class="icon icon-star"></i> <span class="text">Usuários</span></a>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("controller/login/login.php")){ echo $url = "controller/login/login.php"; }  
                else { echo $url = "../controller/login/login.php"; } 
                ?>"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a>
            </li>
        </ul>
        </div>
    </div>
