
		<?php 
			include ('header.php');

			include('conexao.php');

			//SELECT
			$sql = "SELECT * FROM produtinhos";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {

				while($linha = $result->fetch_assoc()) {
					echo '<div class="card">';
					echo '  <img src="data:image/jpeg;base64,'.base64_encode($linha['foto']).'" alt="Avatar" style="width:100%">';
					echo '  <div class="container">';
					echo '    <h4><b>'.$linha["nome"].'</b></h4>';
					echo '    <p>'.$linha["preco"].'</p>';
					echo '    <a class="excluir" href="exc.php?cod='.$linha["codigo"].'"><img src="excluir.png"/></a>';
					echo '    <a class="alterar" href="dados.php?cod='.$linha["codigo"].'"><img src="editar.png"/></a>';
					echo '  </div>';
					echo '</div>';


					/*echo "  <td><a href='dados.php?cod=".$linha["codigo"]."'><img src='editar.png' style='height:20px;width:20px'/></a></td>";
					echo "  <td><a href='exc.php?cod=".$linha["codigo"]."'><img src='excluir.png' style='height:20px;width:20px'/></a></td>";
*/
				}

			}else{
				echo "Não existem clientes cadastrados!";
			}
			$conn->close();
		?>
		<a href="dados.php" class="inserir">+</a>
	</body>
</html>