<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Solicitud de Citas</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="../CSS/fuentes.css">
</head>
<body>

<?php if (count($errores)==0)  { ?>
    <hr>
    <div class="caja">
        <h1> Su Cita ha sido registrada correctamente</h1>
        <p>Servicio: <?= $servicio ?> </p>
        <p>Nombre: <?= $nombre ?> </p>
        <p>Fecha: <?= $fechaSalida ?> </p>
        <p>Hora: <?= $hora ?> </p>
        <p>En breve recibira un email de confirmación en la dirección:  <?= $email ?> </p>
    </div>

    <?php
    include"envioEmail.php";
    enviar_emai($email,$nombre,$fechaSalida,$hora,$servicio);
}
?>

</body>
</html>
