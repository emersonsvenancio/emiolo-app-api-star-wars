<?php
    session_start();
?>

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

    <div id="user-nav" class="navbar navbar-inverse">
        <div id="menu">
            <ul class="nav">
            <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Bem vindo <?php echo $_SESSION['usuarioNome']; ?></span><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php 
                        if (file_exists("controller/login/login.php")){ echo $url = "controller/login/login.php"; }  
                        else { echo $url = "../controller/login/login.php"; } 
                        ?>"><i class="icon-key"></i> Sair</a>
                    </li>
                </ul>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("index.php")){ echo $url = "index.php"; }  
                else { echo $url = "../index.php"; } 
                ?>"><i class="icon icon-share-alt"></i> <span class="text">Home</span></a>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("view/api.php")){ echo $url = "view/api.php"; }  
                else { echo $url = "../view/api.php"; } 
                ?>"><i class="icon icon-share-alt"></i> <span class="text">APIs</span></a>
            </li>
            <li class=""><a title="" href="<?php 
                if (file_exists("controller/login/login.php")){ echo $url = "controller/login/login.php"; }  
                else { echo $url = "../controller/login/login.php"; } 
                ?>"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a>
            </li>
        </ul>
        </div>
    </div>
