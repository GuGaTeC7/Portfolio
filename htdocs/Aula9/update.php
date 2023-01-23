<html>
<head>
	<title>Alterar</title>	
</head>
<body>

<?php
	
	$mysqli = mysqli_connect("localhost", "root", "", "lojadoze");
	
	$id = $_GET["id"];

	if ($mysqli->connect_error) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit(); 
	}


	$DADOS = $mysqli -> query("SELECT * FROM tbclientes WHERE id = ".$id.""); 

	while($row = $DADOS->fetch_assoc()) {

		$nome = $row["nome"];
		$endereco = $row["endereco"];
		$foto = "";

	}

	echo '<form action="alterar.php?id='.$id.'" method="post" enctype="multipart/form-data">'; 
	echo '<input type="hidden" value="'.$id.'" name="id">';
	echo '<p>Escreva o Nome:</p>';
	echo '<p><input type="text" name="nome" value="'.$nome.'"></p>';
	echo '<p>Escreva o Endereço:</p>';
	echo '<p><input type="text" name="endereco" value="'.$endereco.'"></p>';
	if ($foto != "") {
		echo '<img src="image/jpeg;base64'.base64_encode($foto).'"/><br/>'; 
	}
	echo '<input type="file" name="xbox"><br/>';
	echo '<p><input type="submit" value="Alterar"></p>';
	echo '</form>';

?>

</body>
</html>