<?php



include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $materia = $_POST['materia'];
    $idade = $_POST['idade'];

    $sql = "INSERT INTO professor (nome, materia, idade)
    VALUES ('$nome', '$materia', '$idade')"; 

    if ($mysqli->query($sql) ) {
        echo "Professor cadastrado";
    } else {
        echo "Erro: " . $mysqli->error;
    }

}