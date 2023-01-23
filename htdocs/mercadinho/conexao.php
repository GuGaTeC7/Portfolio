<?php
    
    $mysqli = new mysqli("localhost", "root", "", "mercadinho");

    // Check connection
    if ($mysqli -> connect_error) {
        echo "Falha na conexão MySQL" . $mysqli -> connect_error;
        exit();
    }

?>