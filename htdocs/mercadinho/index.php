<?php 

include("conexao.php");

if(isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];
 
    if($arquivo["error"])
        die('Falha ao enviar arquivo'); 

    if($arquivo['size'] > 2097152)
        die('Arquivo muito grande!! Max: 2MB');
 
    $pasta = "arquivos/";
    $nomeDoArquivo = $arquivo['name'];
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo, PATHINFO_EXTENSION));

    if($extensao != 'jpg' && $extensao != 'png')
        die('Tipo de arquivo não aceito');

    $deu_certo = move_uploaded_file($arquivo["tmp_name"], $pasta . $novoNomeDoArquivo . "." . $extensao);
    if ($deu_certo) {
        //echo "<p>Arquivo enviado com sucesso! Para acessá-lo, <a target=\"blank\" href=\"arquivos/$novoNomeDoArquivo.$extensao\">Clique Aqui</a><p>";
    }
    else 
        echo "<p>Falha ao enviar arquivo</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inserir.php" method="post"> 
        <p>Nome:</p>
        <p><input type="text" name="nome"></p>
    
        <p>Preço:</p>
        <p><input type="text" name="preco"></p>
        <!-- <form method="POST" enctype="multipart/form-data" action="">
            <p><label for="">Selecione um arquivo</label>
            <input name="arquivo" type="file"></p>
        </form> -->
        <button name="upload" type="submit">Enviar arquivo</button>
    </form>
        
</body>
</html>