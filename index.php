<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency ADSO</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div id="mensaje"><p>No se puede escoger el pais de destino igual que el pais de origen</p></div>
    <h1 class="title">Reservar Vuelo Internacional</h1>
    <form id="formulario" method="POST" action="./reservas.php">
        <ul>
            <li>
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" placeholder="Nombre Completo" required>
            </li>

            <li>
                <label for="rut">RUT:</label>
                <input type="text" id="rut" placeholder="Registro Unico Tributario" required>
            </li>

            <li>
                <label for="paisOrigen">País Origen:</label>
                <select name="paisOrigen" id="paisOrigen" required>
                    <option value="">Seleccione un país</option>
                    <option value="Peru">Perú</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Panama">Panamá</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Chile">Chile</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="España">España</option>
                    <option value="Francia">Francia</option>
                    <option value="Mexico">México</option>
                </select>
            </li>

            <li>
                <label for="paisDestino">País Destino:</label>
                <select name="paisDestino" id="paisDestino" required>
                    <option value="">Seleccione un país</option>
                    <option value="Peru">Perú</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Panama">Panamá</option>
                    <option value="Brasil">Brasil</option>
                    <option value="Chile">Chile</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="España">España</option>
                    <option value="Francia">Francia</option>
                    <option value="Mexico">México</option>
                </select>
            </li>

            <li>
                <label>Tipo de Viaje:</label>
                <br>
                <input type="radio" name="tipo1" id="tipo1">
                <label for="tipo1">Ida/Regreso</label>

                <input type="radio" name="tipo2" id="tipo2">
                <label for="tipo2">Sin Regreso</label>
            </li>
            <br> 

            <li>
                <label for="fechaIda">Fecha Viaje/Ida:</label>
                <input type="date" name="fechaViaje1" id="fechaIda" required>
            </li>

            <li id="fechaRegreso">
                <label for="fechaRetorno">Fecha Viaje/Retorno:</label>
                <input type="date" name="fechaViaje2" id="fechaRetorno">
            </li>

            <li>
                <label for="numeroTiquetes">Número de Tiquetes:</label>
                <input type="number" name="tiquetes" id="numeroTiquetes">
            </li>
            <br>
            

            <button type="submit"  href='./index.php'
            >Reservar Tiquete</button>
        </ul>
    </form>
    <script src="js/validaciones.js" async defer></script>
</body>

</html>
