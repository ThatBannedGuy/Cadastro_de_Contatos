<?php



include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $horario_de_trabalho = $_POST['horario_de_trabalho'];

    $sql = "INSERT INTO funcionario (nome, cpf, horario_de_trabalho)
    VALUES ('$nome', '$cpf', '$horario_de_trabalho')"; 

    if ($mysqli->query($sql) ) {
        echo "Funcionario cadastrado";
    } else {
        echo "Erro: " . $mysqli->error;
    }

}