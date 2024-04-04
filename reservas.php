<?php
require_once "./conexion.php";

// Verificar si se recibieron los datos del formulario
if (isset($_POST['nombre'], $_POST['rut'], $_POST['paisOrigen'], $_POST['paisDestino'], $_POST['tipo1'], $_POST['tipo2'], $_POST['fechaViaje1'], $_POST['fechaViaje2'], $_POST['tiquete'])) {
    // Asignar los datos del formulario a variables
    $nombre = $_POST["nombre"];
    $rut = $_POST["rut"];
    $paisOrigen = $_POST["paisOrigen"];
    $paisDestino = $_POST["paisDestino"];
    $tipo1 = $_POST["tipo1"];
    $tipo2 = $_POST["tipo2"];
    $fechaViaje1 = $_POST["fechaViaje1"];
    $fechaViaje2 = $_POST["fechaViaje2"];
    $tiquetes = $_POST["tiqueteS"];

    // Protección contra inyección SQL usando sentencias preparadas
    $statement = $conexion->prepare("INSERT INTO reservar (nombre, rut, paisOrigen, paisDestino, tipo1, tipo2, fechaViaje1, fechaViaje2, tiquetes) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $statement->bind_param("sssssssssi", $nombre, $rut, $paisOrigen, $paisDestino, $tipo1, $tipo2, $fechaViaje1, $fechaViaje2, $tiquetes);
    $success = $statement->execute();

    if ($success) {
        echo "Registrado";
        // Redirigir al usuario a otra página después de registrar los datos
        header('<Location:./index.php');
        exit;
    } else {
        echo '<div class="alert">Error al registrar los datos en la base de datos</div>';
    }
} else {
    echo '<div class="alert">Error: Todos los campos del formulario deben ser completados</div>';
}
?>
