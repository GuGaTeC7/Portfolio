<?php
	
	$mysqli = mysqli_connect("localhost", "root", "", "lojadoze");
	
	$id = $_GET['id'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];

	$foto = addslashes(file_get_contents($_FILES["xbox"]['tmp_name']));

	if ($mysqli->connect_error) {
		die("connection error:" . $mysqli->connect_error);
	} else {
		echo 'successfully connected';
	}

	$mysqli -> query("UPDATE tbclientes SET nome='$nome', endereco='$endereco', foto='$foto' WHERE id = $id"); 

	$mysqli->close();


	header('location:tabela.php');
?>
