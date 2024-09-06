<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Solicitud de Citas</title>
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="../CSS/fuentes.css">
    </head>
    <body>

           <hr>
            <div class="caja">      
                <h1> Su Cita ha sido registrada correctamente</h1>
                <p>Servicio: <?= $servicio ?> </p>
                <p>Nombre: <?= $nombre ?> </p>
                <p>Fecha: <?= $fechaSalida ?> </p>
                <p>Hora: <?= $hora ?> </p>
                <p>En breve recibira un email de confirmación en la dirección:  <?= $email ?> </p>
            </div>
    </body>
</html>