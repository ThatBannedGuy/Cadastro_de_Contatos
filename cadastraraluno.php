<?php



include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $id_curso = $_POST['id_curso'];

    $sql = "INSERT INTO aluno (nome, cpf, idade, id_curso)
    VALUES ('$nome', '$cpf', '$idade', '$id_curso')"; 

    if ($mysqli->query($sql) ) {
        echo "Aluno cadastrado";
    } else {
        echo "Erro: " . $mysqli->error;
    }

}