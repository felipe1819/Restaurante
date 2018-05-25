<?php 
require "db.php";
?>

<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8">
	  <title>Busca</title>
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  
	  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.1/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-4KIc2mnKfAA7VjirNLk2Sqp7jxFNq1q8+FhYGxhW2l52lt4HJsfksL+hjswHfbl/" crossorigin="anonymous">
		
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		  <a class="navbar-brand" href="index.php"><i>Coltello Nell'impasto</a></i>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		<div class="container">
		  <div class="collapse navbar-collapse" id="navbarColor01">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">História <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="cardapio.html">Cardápio</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="bebidas.html">Bebidas</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="reserva.php">Reserva</a>
		      </li>
		    </ul>
		  </div>
		</div>

		        <form class="form-inline my-2 my-lg-0" action="busca.php" method="post">
	      			<input name="buscar" class="form-control mr-sm-2" type="text" placeholder="Buscar">
	      			<button class="btn btn-danger mr-2 my-sm-0" type="submit">Buscar</button>
	      		</form>
		          		            
		        

		</div>
  		</nav>
<br><br><br><br><br>

		<?php

			$buscar = isset($_POST["buscar"]) ? addslashes(trim($_POST["buscar"])) : FALSE;

			
		?>
		<legend><h1>Cardapio:</h1></legend>

<div class="row">
				    <div class="col-sm-6">
		<?php
			$res = $MySQLiconn->query("SELECT * FROM cardapio WHERE nome LIKE '%".$buscar."%'");
			while($row=$res->fetch_array())
			{
			?>	

			<div class="card text-white mb-3" >
						  <div class="card-header"><h5><?php echo $row['nome']; ?></h5></div>
						  <div class="card-body">
						    
						    <p class="card-body border-light"><img class="img-fluid" width="300 px" height="300 px" data-toggle="tooltip" title="Pastel" data-placement="top" src="<?php echo $row['img']; ?>" alt="Imagem Indisponível" /></p>
						  <div class="card-text">
						  	<p id="paragra">
				    		<?php echo $row['porcao']; ?> <br/>
				    		<?php echo $row['valor']; ?><br/>
				    		
				    		
				    	</p>

						  </div>
						  </div>
						</div>
					    	
					    
			
					    <?php
					}
					?>

					    	

				    </div>


		
				    <div class="col-sm-6">
		<?php
			$res = $MySQLiconn->query("SELECT * FROM bebida WHERE nome LIKE '%".$buscar."%'");
			while($row=$res->fetch_array())
			{
			?>	

			<div class="card text-white mb-3" >
						  <div class="card-header"><h5><?php echo $row['nome']; ?></h5></div>
						  <div class="card-body">
						    
						    <p class="card-body border-light"><img class="img-fluid" width="300 px" height="300 px" data-toggle="tooltip" title="vinho" data-placement="top" src="<?php echo $row['img']; ?>" alt="Imagem Indisponível" /></p>
						  <div class="card-text">
						  	<p id="paragra">
				    		<?php echo $row['litros']; ?> <br/>
				    		<?php echo $row['valor']; ?><br/>
				    		
				    		
				    	</p>

						  </div>
						  </div>
						</div>
					    	
					    
			
					    <?php
					}
					?>

					    	

				    </div>
</div>

<br><br><br><br><br>


		<div class="footer">
		<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #282828; border-color: #00000;">
		<div class="container">
		<a class="navbar-brand"> Restaurante Coltello Nell'impasto © 2018 | Rua Senador Dantas, 23, loja A - Centro - Cinelândia - Rio de Janeiro - RJ </a>
		

		
<script src="js/jquery-3.2.1.min.js"></script> 
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>		

		


	</body>
</html>