<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = 'dino2626:)'; //mudar para nulo
    $database = 'IFSP';
    $port     = 3308; //3307

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro conexão: %s", mysqli_connect_error());
        exit();
    }

?>