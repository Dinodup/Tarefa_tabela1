<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ifsp';
    $port     = 3308;

    $con = mysqli_connect($hostname, $username, $password, $database, $port);

    if(mysqli_connect_errno()){
        printf("Erro conexão: %s", mysqli_connect_error());
        exit();
    }

?>