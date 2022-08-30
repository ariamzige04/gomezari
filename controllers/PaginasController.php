<?php

namespace Controllers;

use MVC\Router;

// use Classes\Email;

use PHPMailer\PHPMailer\PHPMailer;

class PaginasController {
    public static function index( Router $router ) {
            
        $router->render('paginas/index', [
            'descripcion' =>  "Soy freelancer y me llamo Ari Gómez, creo sitios web con servicio personalizado, adaptables a dispositivos, posicionamiento en buscadores (SEO), el rendimiento y la accesibilidad para el usuario, ¡has tu cotización!",
            'title' => "Ari Gómez | Inicio ",


        ]);
    }

    public static function portafolio( Router $router ) {
            
        $router->render('paginas/portafolio', [
            'descripcion' =>  "Observa mi portafolio de sitios web que he hecho aplicando tecnologías nuevas para desarrollar más rápido, haciéndolos seguros y optimizados, con atractiva interfaz",
            'title' => "Ari Gómez | Portafolio ",


        ]);
    }

    public static function sobre_mi( Router $router ) {
            
        $router->render('paginas/sobre_mi', [
            'descripcion' =>  "Me he dedicado al desarrollo web durante mucho tiempo, observa mis estudios enfocados a la programación, he implementado tecnologías nuevas para maquetar, diseñar y crear sitios web seguros y optimizados.",
            'title' => "Ari Gómez | Sobre mi ",


        ]);
    }

    
    public static function pagina_no_encontrada( Router $router ) {
            
        $router->render('paginas/pagina_no_encontrada', [
            'descripcion' =>  "Página no encontrada, error 404",
            'title' => "Página no encontrada (404) | Ari Gómez",
            'footerAbsolute' => "footer-absolute"

        ]);
    }

     public static function contacto( Router $router ) {
         $mensaje = null;

         if($_SERVER['REQUEST_METHOD'] === 'POST') {


            //   Validar 
             $respuestas = $_POST['contacto'];
        
            //   create a new object
             $mail = new PHPMailer();
            //   configure an SMTP
             $mail->isSMTP();

            //  $mail->Host = 'smtp.mailtrap.io';
            //  $mail->SMTPAuth = true;
            //  $mail->Username = '79f6e8667dadbf';
            //  $mail->Password = '25e021030297ef';
            //  $mail->SMTPSecure = 'tls';
            //  $mail->Port = 2525;

            $mail->Host = 'p3plzcpnl489529.prod.phx3.secureserver.net';
            $mail->SMTPAuth = true;
            $mail->Username = 'arigomez@ecutroniccomputadorasautomotrices.com';
            $mail->Password = '+ga2fOMgL@)w';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            //  configurar el contenido del email
             $mail->setFrom('clientesari@ecutroniccomputadorasautomotrices.com', $respuestas['nombre']);//quien envia elemail setFrom
             $mail->addAddress('arigomez@ecutroniccomputadorasautomotrices.com', 'arigomez.herokuapp.com');//que email va a llegar ese correo addAddres (la direccion donde se va a recibir) (quien lo recibe...)
             $mail->Subject = 'Tienes un Nuevo Correo';

            //   Set HTML 
            //  Habilitar HTML

            $recaptcha_secret = '6LfHv4EfAAAAAKIZ7niLcJOaCVH46eR62OfMyNeW'; 
            $recaptcha_response = $_POST['recaptcha_response']; 
            $url = 'https://www.google.com/recaptcha/api/siteverify'; 

            $data = array( 'secret' => $recaptcha_secret, 'response' => $recaptcha_response, 'remoteip' => $_SERVER['REMOTE_ADDR'] ); 
            $curlConfig = array( CURLOPT_URL => $url, CURLOPT_POST => true, CURLOPT_RETURNTRANSFER => true, CURLOPT_POSTFIELDS => $data ); 
            $ch = curl_init(); 
            curl_setopt_array($ch, $curlConfig); 
            $response = curl_exec($ch); 
            curl_close($ch);

            $jsonResponse = json_decode($response);
            if ($jsonResponse->success === true) { 
                // Código para procesar el formulario
                $mail->isHTML(TRUE);
             $mail->CharSet = 'UTF-8'; 
            
            //  definir el contenido
             $contenido = '<html>';
             $contenido .= "<p><strong>Has Recibido un Correo:</strong></p>";

             $contenido .= "<p>Nombre: " . s($respuestas['nombre']) . "</p>";

             $contenido .= "<p>Apellido: " . s($respuestas['apellido']) . "</p>";

             $contenido .= "<p>Correo: " . s($respuestas['correo']) . "</p>";

             $contenido .= "<p>Su teléfono es: " .  s($respuestas['telefono']) ." </p>";

             $contenido .= "<p>El nombre de su negocio es: " .  s($respuestas['negocio']) ." </p>";

             if($respuestas['sitio-cuentas'] === 'si') {
                $contenido .= "<p>Si tiene sitio web</p>";
                $contenido .= "<p>Su dominio es: " .  s($respuestas['sitio']) ." </p>";
               
            } else {
                $contenido .= "<p>No tiene sitio web</p>";
            }

             $contenido .= "<p>Su presupuesto es: " .  s($respuestas['presupuesto']) ." </p>";

             $contenido .= "<p>Mensaje: " . s($respuestas['mensaje']) . "</p>";

             $contenido .= '</html>';
             $mail->Body = $contenido;
             $mail->AltBody = 'Esto es texto alternativo';

            

            //   send the message
            //  send (es si se envia, has esto...) (si tiene ! es lo opuesto)
             if(!$mail->send()){
                 $mensaje = false;
             } else {
                 $mensaje = true;
             }
            } else {
                // Código para aviso de error
                // header('Location: /');
                echo ' <script>alert("No se pudo enviar el formulario, intente de nuevo");</script> ';
            }


             



         }
        
         $router->render('paginas/contacto', [
            'mensaje' => $mensaje,
            'descripcion' =>  "Contáctame y has tu cotización; contesta el siguiente formulario con ocho preguntas básicas. Cuéntame como deseas tu sitio web personalizado.",
            'title' => "Ari Gómez | Contacto ",
            // 'whatsapp' => true




         ]);
     }

     public static function curriculum( Router $router ) {
        
        
        $router->render('paginas/curriculum', [
            'descripcion' =>  "Curriculum de Ari Gómez como Desarrollador Web",
            'title' => "Ari Gómez | Curriculum ",
            'curriculum' => false


        ]);
    }
}