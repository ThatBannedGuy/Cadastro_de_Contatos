<?php



include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $endereco = $_POST['endereco'];

    $sql = "INSERT INTO escola (nome, cnpj, endereco)
    VALUES ('$nome', '$cnpj', '$endereco')"; 

    if ($mysqli->query($sql) ) {
        echo "Escola cadastrada";
    } else {
        echo "Erro: " . $mysqli->error;
    }

}