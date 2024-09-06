<?php
function enviar_emai($email,$nombre,$fecha,$hora,$servicio){
     // Correo al que queremos que llegue
      $destinatario = $email;
     // Asunto
     $asunto = " Tu solicitud de cita Previa";
     // Mensaje
      $mensaje = "Te agradecemos".$nombre. "por solicitar nuestros servicios. A continuación te confirmamos tu cita: <br><br> 
            Fecha: ".$fecha."<br>
            Hora: ".$hora."<br>
            Servicio: ".$servicio."<br><br>
 
            ¡Te esperamos!";
      // Cabeceras
      // Para enviar un correo HTML, debe establecerse la cabecera Content-type
       $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
       $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
     // Enviamos el email
      if(@mail($destinatario, $asunto, $mensaje, $cabeceras))
     {
         echo"Email enviado";
      }
     else{
         echo "El email no se pudo enviar.";
     }
 
    }
