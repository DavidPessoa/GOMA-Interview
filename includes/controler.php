<?php
		include_once 'dbh.php';
		$name= $_POST['name'];
		$nif= $_POST['nif'];
		$tel= $_POST['tel'];
		$address= $_POST['address'];
		$city= $_POST['city'];
		$country= $_POST['country'];	

		$sql = "INSERT INTO clients(name, nif, tel, address, city, country) VALUES ('$name', '$nif', '$tel', '$address', '$city','country');";
		
		mysqli_query($conn,$sql);
	

	header("Location: ../index.php?signup=success");

/*
 DATABASE QUERY CODE
		$sql = "SELECT * FROM clients;";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['name']. "<br>";
			}
		}*/