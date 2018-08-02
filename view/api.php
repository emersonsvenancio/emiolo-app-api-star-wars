    <?php include_once '../view/header.php'; ?>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php 
        if (file_exists("css/matrix-style.css")){ echo $url = "css/matrix-style.css"; }  
        else { echo $url = "../css/matrix-style.css"; } 
    ?>" />

 <br>	
 <br>	


 <form class="px-4 py-3" method="post">
 	<div class="col-md-8"  style="background-color: #300000">
		<span style="background-color: #080000; color: white; height: 100%; " class = "box-content">Star Wars - API </span>
 		<br>
 		<b style="color:white;">Cód_Personagem:</b> 
 		<input class="form-control" style="margin-bottom: 6px" type="text" name="cmd" placeholder="Digite um número de 1 a 88" required autofocus>

 		<b style="color:white;">Cód_Planeta:</b> 
 		<input class="form-control" style="margin-bottom: 8px" type="text" name="cmd1" placeholder="Digite um número de 1 a 61" required autofocus>
 		
 		<button class="btn btn-dark" type="submit">Buscar</button>
	   

 		<hr style="margin-bottom: 0px" />
 	
	</div>
 

 	<div class="col-md-8" style="background-color: #080000">
 		<?php 
			
			if ($_SERVER["REQUEST_METHOD"] === 'POST') {
				if ($_POST["cmd"] > '0' && $_POST["cmd"] < '89' && $_POST["cmd1"] > '0' && $_POST["cmd1"] < '62') {
					
					$cmd = $_POST["cmd"];
					$cmd1 = $_POST["cmd1"];
				  	
				  	//API 1
				  	$json = file_get_contents("https://swapi.co/api/people/".$cmd."/?format=json");
					$json_data = json_decode($json, true);
						echo '<span style="background-color: #180000; color: white; height: 100%" class = "box-content">Personagem(características) e Destino(características) </span>';
					
						echo "<br>";
						echo "<pre>";
					  	echo "Nome: ". "<h2 style='margin-bottom: 0px;'>".$json_data["name"]."</h2>". "<i style='font-size: 13px;'><b>Altura</b>: ".$json_data["height"]. " cm</i> | " . "<i style='font-size: 13px;'><b>Peso</b>: ".$json_data["mass"]." km</i>";
						echo "</pre>";

				  	//API 2
				  	$json1 = file_get_contents("https://swapi.co/api/planets/".$cmd1."/?format=json");
					$json_data1 = json_decode($json1, true);
						echo "<pre>";
						echo "Destino: "."<h3 style='margin-bottom: 0px;'>". $json_data1["name"]. "</h3>". "<i style='font-size: 13px;'><b>Diâmetro</b>: ".$json_data1["diameter"]. " km</i> | " . "<i style='font-size: 13px;'><b>Clima</b>: ".$json_data1["climate"]."</i>";
						echo "</pre>";
				}
				
		  	}

		?>
 		<hr style="margin-bottom: 0px" />
 	

 </form>
