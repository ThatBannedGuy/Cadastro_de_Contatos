<?php



include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome_curso = $_POST['nome_curso'];
    $id_escola = $_POST['id_escola'];
    $id_professor = $_POST['id_professor'];

    $sql = "INSERT INTO curso (nome_curso, id_escola, id_professor)
    VALUES ('$nome_curso', '$id_escola', '$id_professor')"; 

    if ($mysqli->query($sql) ) {
        echo "Curso cadastrado";
    } else {
        echo "Erro: " . $mysqli->error;
    }

}