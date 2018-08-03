<?php include_once 'view/header.php'; ?>
<?php  
    error_reporting(0);
    require_once("controller/login/secure.php");
    require_once('model/inc/conexao_pdo.php');
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
<br>    
<br>   

<body style="background-color: #cccccc; vertical-align: center; ">
    <div>
    </div>
</body>   
