<?php
    include 'conexao.php';

    $sql = "SELECT * FROM aluno";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>ID</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Idade</th>
        <th>Id_curso</th></tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id']  . "</td>";
            echo "<td>" . $row['nome']  . "</td>";
            echo "<td>" . $row['cpf']  . "</td>";
            echo "<td>" . $row['idade']  . "</td>";
            echo "<td>" . $row['id_curso']  . "</td>";
            echo "</tr>";
        }


        echo"</table>";
     } else {
        echo"<p>Nenhum aluno cadastrado</p>";
        }
    


?>    