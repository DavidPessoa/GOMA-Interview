<!DOCTYPE html>
<html>
<head>
	<title>Registo | GOMA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="author" content="David Parreira">
	<meta name="keywords" content="GOMA, Front End, WebSite Development">
	<meta name="description" content="Registo de Clientes">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/styles2.css">
</head>
<body>
	<header>
		<img id="logo" src="./img/gomalogo.png">
		<h2>CLIENTES</h2>	
	</header>
	<section>
		<div id="cabeca">
			<a href="index.php">Inserir novo</a>
			<br>
			<h3>Lista de Clientes</h3>
			<?php
			include_once 'includes/dbh.php';
			$sql = "SELECT * FROM clients;";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_num_rows($result);

    		?>
    		<p>(<span><?php echo $row;?></span> resultados no sistema)<p>
    		<a id="rightLink"href=#>ULTIMOS 3 REGISTOS</a>
        	
		</div>
	</section>
	<section class="blueBackground">
		<?php
			include_once 'includes/dbh.php';
			$sql = "SELECT * FROM clients;";
			$result = mysqli_query($conn,$sql);
			$sum = mysqli_num_rows($result);
			$counter = 0;
    		while ($row = mysqli_fetch_assoc($result)) {
        		if($counter < $sum-1){
        		?>
	            	<div style="border-bottom: #979797 1px solid;padding: 0;" class = "result">
	                 	<h4>Cliente número<?php echo $row['client_id'];?> </h3>
	                 	<p><?php echo $row['address'];?>, <?php echo $row['city']; ?>, <?php echo $row['country'];?> - NIF <?php echo $row['nif'];?>, Tel. <?php echo $row['client_id']; ?></p>
	            	</div>
        	<?php
        		}else{
        			?>
        			<div class = "result">
	                 	<h4>Cliente número<?php echo $row['client_id'];?> </h3>
	                 	<p><?php echo $row['address'];?>, <?php echo $row['city']; ?>, <?php echo $row['country'];?> - NIF <?php echo $row['nif'];?>, Tel. <?php echo $row['client_id']; ?></p>
	            	</div>
	            	<?php
        		}
        		$counter++;

    }
?>
		<div>
			
		</div>
		
	</section>

	<footer><a href="https://gomadevelopment.pt">HTTPS://GOMADEVELOPMENT.PT</a></footer>
</body>
</html>