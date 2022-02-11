<?php 
    include('conexion.php');
    if(count($_POST) > 0){
        $Nombre = $_POST['Nombre'];
        $Edad = $_POST['Edad'];
        $Grupo = $_POST['Grupo'];
        $Telefono = $_POST['Telefono'];
        $Casa = $_POST['Casa'];
    
    $sql = "INSERT INTO Integrantes(Nombre, Edad, Grupo, Telefono, Casa) VALUES ('$Nombre','$Edad','$Grupo','$Telefono','$Casa')";
    $conn->exec($sql);
    header('Location: index.php');
    }   
?>