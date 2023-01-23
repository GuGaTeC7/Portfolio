<?php 
	include('conexao.php');

	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$sql = "INSERT INTO Clientes VALUES (null, '$nome', '$endereco');";
	$conn->query($sql);
	$conn->close();

	header("location:index.php");
?>