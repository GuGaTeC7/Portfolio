<?php

	$id = $_GET["id"];

	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "lojadoze";

	$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

	if ($mysqli->connect_error) {
	  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	  exit();
	}
	
	$sql = "DELETE FROM tbclientes WHERE id = ".$id ;
	$mysqli->query($sql);
	
	$mysqli->close();

	header("location: tabela.php");
?>