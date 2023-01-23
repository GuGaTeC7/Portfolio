<html>
<head>
	<meta charset="UTF-8">
	<title>Loja do Zé</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

	<?php
	$mysqli = new mysqli("localhost","root","","lojadoze");

	// Check connection
	if ($mysqli -> connect_error) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}
	
?>
	
	<form action="inserir.php" method="post">
		<p>Escreva o Nome:</p> 
			<p><input type="text" name="nome"></p>

		<p>Escreva o Endereço:</p>
			<p><input type="text" name="endereco"></p>

		<?php	
		$foto = "";
		if ($foto != "") {
			echo '<img src="image/jpeg;base64'.base64_encode($foto).'"/><br/>'; 
		}
		echo '<input type="file" name="xbox"><br/>';
		echo '<br>';
		echo '<p><input type="submit" value="Inserir"></p>';
		echo '</form>';
		?>
	</form>

	<form action="tabela.php" method="post">
	<p><input type="submit" value="Ver Tabela" /></p>
	</form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>