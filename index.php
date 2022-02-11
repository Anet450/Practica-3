<?php 
    include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anet Muñoz BlackMon_service</title>
</head>
<body>
    <h1>BLACK MOON </h1>
    <h2>servicios....</h2>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">formulario</a>
        </li>
    </ul>
    <table>   
        <thead>
            <tr> <th>Nombre</th> 
                <th>Edad</th> 
                <th>Grupo</th> 
                <th>Telefono</th>
                <th>Casa</th>
            </tr>
            <tr>
            <tbody>
                <?php 
                    $sql = "SELECT * FROM Integrantes";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);

                    foreach($stmt->fetchAll() as $row){
                        echo"<tr><td>".$row['Nombre'] ."</td>";
                        echo "<td>".$row['Edad']."</td>";
                        echo "<td>".$row['Grupo']."</td>";
                        echo "<td>".$row['Telefono']."</td>";
                        echo "<td>".$row['Casa']."</td>";
                        "</tr>";
                    }
                ?>
            </tr>
            </tbody>
        </thead>

    </table>
    <footer>
        <p id = "Deespedida">
        Actividad: Conexión básica a Base de Datos
        </p><p>
        Nombre: Anet Guadalupe Muñoz De Santiago
         </p>
    </footer>
</body>
</html>