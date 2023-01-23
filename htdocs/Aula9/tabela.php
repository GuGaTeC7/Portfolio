<html>
<head>
	<meta charset="UTF-8">
	<title>Loja do Zé</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<h1>Tabela</h1>
	<?php
		
	$mysqli = new mysqli("localhost","root","","lojadoze");


	if ($mysqli->connect_error) {
	  die("Connection failed: " . $mysqli->connect_error);
	}

	$result = $mysqli -> query("SELECT * FROM tbclientes WHERE 1"); 
	
	if ($result->num_rows > 0) {
  
	  echo"<table class='table table-hover'";
	  echo "<thead>";
	  echo "<tr>";
	  echo"<th scope='col'>ID</th>";
	  echo"<th scope='col'>Nome</th>";
	  echo"<th scope='col'>Endereço</th>";
	  echo"<th scope='col'>Excluir</th>";
	  echo"<th scope='col'>Alterar</th>";
	  echo"<th scope='col'>Foto</th>";
	  echo "</tr>";
	  echo "</thead>";
	  
	  while($row = $result->fetch_assoc()) {
		echo"<tbody>";
		echo"<tr>";
		echo  "<th scope='row'>".$row['id']."</th>";
		echo "<td>".$row['nome']."</td>";
		echo "<td>".$row['endereco']."</td>";
		echo "<td><a href='remover.php?id=".$row["id"]."'><img src='excluir.png'style='height:30px;width:30px'></a></td>";
	    echo "<td><a href='update.php?id=".$row["id"]."'><p>Alterar</p></td>";
		if ($row["foto"] != ""){
						echo "	<td><img src='data:image/jpeg;base64,".base64_encode($row['foto'])."' style='height:30px;width:30px'/></td>";
					}else{
						echo "  <td></td>";
					}
		echo"</tr>";
		echo"</tbody>";
	}
}
		echo "</table>";
		$mysqli->close();
	?>
	
	<form action="index.php" method="post">
	<p><input type="submit" value="Retornar início"></p>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>