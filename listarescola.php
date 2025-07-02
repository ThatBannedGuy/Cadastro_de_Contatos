<?php
    include 'conexao.php';

    $sql = "SELECT * FROM escola";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table border='1' cellpading='5' >";
        echo "
        <tr><th>Id_escola</th>
        <th>Nome</th>
        <th>Cnpj</th>
        <th>Endereco</th></tr>";

        while ($row = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_escola']  . "</td>";
            echo "<td>" . $row['nome']  . "</td>";
            echo "<td>" . $row['cnpj']  . "</td>";
            echo "<td>" . $row['endereco']  . "</td>";
            echo "</tr>";
        }


        echo"</table>";
     } else {
        echo"<p>Nenhuma escola cadastrada</p>";
        }
    


?>    