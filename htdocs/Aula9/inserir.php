<html>
<head>
	<title>Loja do Zé</title>
</head>
<body>
	
	<?php
	$mysqli = new mysqli("localhost","root","","lojadoze"); 

	// Check connection
	if ($mysqli -> connect_error) {
	  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	  exit();
	}

		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];

		$foto = addslashes(file_get_contents($_FILES["xbox"]['tmp_name']));


		$result = $mysqli -> query("INSERT INTO tbclientes (nome, endereco, foto) VALUES ('".$nome."', '".$endereco."', '".$foto."')");

		echo "Dados cadastrados!";
?>

	<form action="index.php" method="post">
 		<input type="submit" value="Retornar início">
 	</form>

</body>
</html>