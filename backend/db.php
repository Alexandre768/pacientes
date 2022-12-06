<?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $database = "Clinica";
    $username = "root";
    $password = "";
    // Criar conexão
    $conection = mysqli_connect($servername, $username, $password, $database);
    // Checando a conexão
    if (!$conection) {
        die ("Erro ao tentar conectar ao banco de dados! " .mysqli_connect_error());
    }
    //echo "Conexão bem sucedida!";
    // Fim conexão com o banco de dados
?>
