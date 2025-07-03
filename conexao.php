<?php
    $hostname = 'localhost';
    $nomeBanco = 'cadastro_de_contatos';
    $senha = '';
    $usuario = 'root';

    $mysqli = new mysqli($hostname, $usuario, $senha, $nomeBanco);

    if($mysqli->connect_errno){
        echo 'falha ao conectar' . $mysqli->connect_errno;
    }else{
        echo 'Conectado';
    }
?>