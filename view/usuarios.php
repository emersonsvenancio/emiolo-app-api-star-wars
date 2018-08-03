<?php include_once 'header.php'; ?>

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="<?php 
      if (file_exists("css/matrix-style.css")){ echo $url = "css/matrix-style.css"; }  
      else { echo $url = "../css/matrix-style.css"; }   
      ?>" 
/>

<?php 
  error_reporting(0);
  require_once('../model/inc/conexao_pdo.php');
  require_once ('../model/database.php'); 
?>

  <?php 

  $stmt2->execute();
  $result = $stmt2->fetchAll(PDO::FETCH_ASSOC);
  
  ?>


    <title>Usuários</title>

  <body>
    <div class="col-md-12">
        <div id="example" style="height: 180px; width: 100%;"></div>
        <?php include_once 'exibe_usuarios.php'; ?>
    </div>
  </body>
