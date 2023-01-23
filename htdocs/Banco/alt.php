<?php 
	include('conexao.php');

	$codigo = $_POST["txtCodigo"];
	$nome = $_POST["txtNome"];
	$endereco = $_POST["txtEndereco"];

	$sql = "UPDATE produtinhos SET nome='$nome', endereco='$endereco' WHERE codigo = $codigo";
	$conn->query($sql);
	$conn->close();

	header("location:index.php");
?>