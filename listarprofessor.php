<?php
    include 'conexao.php';

    $sql = "SELECT * FROM professor";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>Id_professor</th>
        <th>Nome</th>
        <th>Materia</th>
        <th>Idade</th></tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_professor']  . "</td>";
            echo "<td>" . $row['nome']  . "</td>";
            echo "<td>" . $row['materia']  . "</td>";
            echo "<td>" . $row['idade']  . "</td>";
            echo "</tr>";
        }


        echo"</table>";
     } else {
        echo"<p>Nenhum professor cadastrado</p>";
        }
    


?>    