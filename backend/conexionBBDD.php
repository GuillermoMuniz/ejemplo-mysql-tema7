<?php

//Conectarse a la base de datos de MYSQL 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "gestion_empleados";

// Creación de la conexion
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida". $conn->connect_error);
    }

// Consulta SQL para obtener los datos
$sql = "SELECT * FROM empleados";
$result = $conn->query($sql);

// Comprobamos si se encontraron resultados

if ($result->num_rows > 0) {
    // Crer un array para almacenar los datos
    $data= array();
    // Recorrer los resultados y almacenarlos en el array
    while ($row = $result->fetch_assoc()) {
        $data[]=$row;
   }
   //Es como imprimir por pantalla
   var_dump($data);

} else {
    echo"0 resultados";
}

$conn->close();