<?php 

include('conexao.php');

    $mysqli = new mysqli("localhost", "root", "", "mercadinho");

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $result = $mysqli ->query("INSERT INTO tbprodutos(nome, preco) VALUES ('".$nome."', '".$preco."')");

    echo "Dados cadastrados!";

?>