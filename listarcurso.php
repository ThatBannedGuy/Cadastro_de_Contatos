<?php
    include 'conexao.php';

    $sql = "SELECT * FROM curso";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>ID</th>
        <th>Nome_curso</th>
        <th>Id_escola</th>
        <th>Id_professor</th></tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id']  . "</td>";
            echo "<td>" . $row['nome_curso']  . "</td>";
            echo "<td>" . $row['id_escola']  . "</td>";
            echo "<td>" . $row['id_professor']  . "</td>";
            echo "</tr>";
        }


        echo"</table>";
     } else {
        echo"<p>Nenhum curso cadastrado</p>";
        }
    


?>    