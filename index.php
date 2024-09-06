<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Solicitud de Citas</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/index.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <h1>Solicitud de Cita Previa</h1>        
        <form method="get" class="caja" id="formulario" action="leerDatos.php">
            <fieldset >
                <p>Indique el servicio al que desea solicitar la cita</p>                
                <p><label for="servicio" class="etiqueta" >Seguros</label>
                    <input type="radio" name="servicio" id="servicio" value="Seguros" class="cirulos" >
                    <label for="servicio2" class="etiqueta">Consultoria Jurídica</label>
                    <input type="radio" name="servicio" id="servicio2" value="Consultoria Jurídica" class="cirulos">
                    <label for="servicio4" class="etiqueta">Administración de Comunidades</label>
                    <input type="radio" name="servicio" id="servicio4" value="Administración de Comunidades" class="cirulos" ></p>
                <p><label for="fecha" class="etiqueta" >Seleccione la fecha</label>
                    <input type="date" name="fecha" id="fecha">
                    <label for="hora" class="etiqueta">Hora:</label>
                    <select id="hora" name="hora" id="hora">
                        <option>Seleccione</option>
                        </select></p>
                    <p><label for="nombre" class="etiqueta">Nombre y Apellido: </label></p>
                    <p><input type="text" id="nombre" name="nombre" class="entrada"></p>
                    <p><label for="email" class="etiqueta">Email: </label></p>
                    <p><input type="text" id="email" name="email" class="entrada"></p>
                    <p><label for="telefono" class="etiqueta">Teléfono: </label></p>
                    <p><input type="tel" id="telefono" name="telefono" class="entrada"></p>
                    <p><label for="msn" class="etiqueta">Mensaje: </label></p>
                    <p><textarea rows="3" cols="15"  id="msn" name="msn" class="entrada textarea"></textarea></p>
                    <p><input type="submit" disabled id="enviar" name="enviar" value="Solicitar Cita" 
                              class="boton" />
                        <input type="reset" value="Limpiar" class="boton"/></p>
                    <p><input id="casilla" type="checkbox" class="cuadrado">Acepta la Política de
                        <a target="_blank" href="https://www.aepd.es/es/politica-de-privacidad-y-aviso-legal">Protección de Datos</a></p>

                   
            <?php
            // Si existe un error, el index lee  y muestra un mensaje en pantalla de error.
                if(isset($_GET["cadena"])){
                        $errores=$_GET["cadena"];                                                  
                        echo  $errores ;                
                }
            ?>
                        
        </fieldset>
            </form>   



    </body>
</html>
