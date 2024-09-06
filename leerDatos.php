
<?php
session_start();
//1. verificamos que no esten vacios los campos para poder validar,
if (!empty($_GET["servicio"]) && !empty($_GET["fecha"]) && !empty($_GET["hora"]) 
&& !empty($_GET["nombre"]) && !empty($_GET["email"]) && !empty($_GET["telefono"])) {  
    //con el method GET, guardamos el valor leido en una variable por campo
    $servicio = $_GET["servicio"];
    $fecha = $_GET["fecha"];//YYYY-mm-DD
    $fechaT = date_create($_GET["fecha"]); // creo una variable tipo fecha para luego darle formato
    $fechaSalida = date_format($fechaT, "d-m-Y"); // formateo a D-M-AAAA la fecha indicada    
    $hora = $_GET["hora"];
    $nombre = ucwords(mb_strtolower($_GET["nombre"]));//pasamos el nombre a minuscula y luego a la primera en mayuscula
    $email = $_GET["email"];
    $telefono = (int) $_GET["telefono"]; // (int) convierte el texto en entero
    $mensaje = $_GET["msn"];
    $errores=array();
   //validamos que el telefono tenga el formato +0034 que comience por 679 y luego 8 numeros mas
    if (!preg_match("/^(?:(?:\+|00)?34)?[679]\d{8}$/", $telefono)) {
         $errores[] = "<p style='color: darkred'><strong> ERROR: </strong>Los telefonos"
             . " solo numeros con formato:000000000.</p>";
    }
    //a partir de aqui comenzamos a validar cada campo de nombre -> texto sin numero,
    if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $errores[] = "<p style='color: darkred'><strong> ERROR: </strong>El nombre debe ser texto sin numeros</p>";
    }
    //En php tenemos las expresiones regulares para validar, pero tambien tiene filtros->url,email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $errores[] = "<p style='color: darkred'><strong> ERROR: </strong>Verifique el email.</p>";
    }    

} else {
    //en caso de campos vacios, mostramos un mensaje de error, redirigiendo al index, que recibe ese error y lo muestra
    $errores[]="<p style='color: darkred'><strong> ERROR: </strong>Todos los datos son requeridos</p>";
}
if (count($errores)>0)  { 
     for ($x = 0; $x < count($errores); $x++) {
                    $cadena .=$errores[$x] ;
                }
   
    header("Location:index.php?cadena=$cadena");
}else{
    $_SESSION["nombre"] = $nombre;
    $_SESSION["servicio"] = $servicio;
    $_SESSION["fecha"] = $fecha;
    $_SESSION["hora"] = $hora;
    $_SESSION["email"] = $email;
    header("Location:confirmacion.php");
}
