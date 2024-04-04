<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bdaero";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_errno){
    die("conexion fallida" . $conexion->connect_errno);
}

else{
    echo "conectado";
}
?>
