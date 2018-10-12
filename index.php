<!DOCTYPE html>
<html>
<head>
	<title>Registo | GOMA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="David Parreira">
	<meta name="keywords" content="GOMA, Front End, WebSite Development">
	<meta name="description" content="Registo de Clientes">
	<link rel="stylesheet" type="text/css" href="./css/styles.css">
</head>
<body>
	<header>
		<img id="logo" src="./img/gomalogo.png" class="responsive">
		<h2>CLIENTES</h2>	
	</header>
	<section class="subHeader">
			<h3>BEM-VINDO</h3>
			<a href="listarClientes.php">Listar Clientes</a>
		<div class="welcome">
			<p> GOMA is a company from Portugal that creates integrated web-based solution.</p>
			<p>We work with organizations of all sizes to designand build great digital products.</p>
		</div>
	</section>
	<section class="form">
	
		<div id="success">
			<p>Os dados foram inseridos na base de dados<p>
		</div>
		<div id="fail">
			<p>ERRO, Verifique se preencheu os campos devidamente</p>
		</div>
		
		<form id="form1" action="includes/controler.php" method="POST">
			<h3>INSERIR CLIENTE</h3>
			<label for="name">
				Nome
			</label>
			<input class="bigField" type="text" name="name">
			<label for="nif">
				NIF
			</label>	
			<input class="smallField" type="number" name="nif">
			<label for="tel">
				Telefone
			</label>
			<input class="smallField" type="number" name="tel">
			<label for="address">
				Morada
			</label>
			<input class="bigField" type="text" name="address">
			<label for="city">
				Localidade
			</label>
			<input class="smallField" type="text" name="city">
			<label for="country">
				País
			</label>
			<input class="smallField" list="countries"  name="country">
			<datalist id="countries">
			    <option value="Chile">Chile</option>
			    <option value="China">China</option>
			    <option value="Ireland">Ireland</option>
			    <option value="Portugal">Portugal</option>
			    <option value="Spain">Spain</option>
			   	<option value="Other">Other</option>
		    </datalist>
		    <input type="submit" value="SUBMETER" id="sendBtn">	
		</form>
		
	</section>

	<footer><a href="https://gomadevelopment.pt">HTTPS://GOMADEVELOPMENT.PT</a></footer>
</body>
</html>