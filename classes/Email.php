<?php

namespace Classes;

use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public $email;
    public $nombre;
    public $token;
    
    public function __construct($email, $nombre, $token)
    {
        $this->email = $email;
        $this->nombre = $nombre;
        $this->token = $token;
    }

    public function enviarConfirmacion() {

         // create a new object
         $mail = new PHPMailer();
         $mail->isSMTP();
         $mail->Host = 'p3plzcpnl489529.prod.phx3.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'arigomez@ecutroniccomputadorasautomotrices.com';
        $mail->Password = '+ga2fOMgL@)w';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // $mail->Host = 'p3plzcpnl489529.prod.phx3.secureserver.net';
        // $mail->SMTPAuth = true;
        // $mail->Username = 'arigomez@ecutroniccomputadorasautomotrices.com';
        // $mail->Password = '+ga2fOMgL@)w';
        // $mail->SMTPSecure = 'ssl';
        // $mail->Port = 465;
     
         $mail->setFrom('arigomez@ecutroniccomputadorasautomotrices.com');//quien envia el email
         $mail->addAddress($this->email, 'arigomez.herokuapp.com');//quien lo recibe
         $mail->Subject = 'Confirma tu Cuenta';
    // debuguear($mail);
         // Set HTML
         $mail->isHTML(TRUE);
         $mail->CharSet = 'UTF-8';

         $contenido = '<html>';
         $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has Creado tu cuenta en arigomez.herokuapp.com, solo debes confirmarla presionando el siguiente enlace</p>";
         $contenido .= "<p>Presiona aquí: <a href='https://arigomez.herokuapp.com/confirmar-cuenta?token=" . $this->token . "'>Confirmar Cuenta</a>";        
         $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
         $contenido .= '</html>';
         $mail->Body = $contenido;

         //Enviar el mail
         $mail->send();

    }

    public function enviarInstrucciones() {

        // create a new object
        $mail = new PHPMailer();
        $mail->isSMTP();
        // $mail->Host = 'smtp.mailtrap.io';
        // $mail->SMTPAuth = true;
        // $mail->Port = 2525;
        // $mail->Username = '79f6e8667dadbf';
        // $mail->Password = '25e021030297ef';

        $mail->Host = 'p3plzcpnl489529.prod.phx3.secureserver.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'arigomez@ecutroniccomputadorasautomotrices.com';
        $mail->Password = '+ga2fOMgL@)w';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
    
        $mail->setFrom('arigomez@ecutroniccomputadorasautomotrices.com');//quien envia el email
        $mail->addAddress($this->email, 'arigomez.herokuapp.com');//quien lo recibe
        $mail->Subject = 'Reestablece tu password';

        // Set HTML
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';

        $contenido = '<html>';
        $contenido .= "<p><strong>Hola " . $this->nombre .  "</strong> Has solicitado reestablecer tu password, sigue el siguiente enlace para hacerlo.</p>";
        $contenido .= "<p>Presiona aquí: <a href='https://arigomez.herokuapp.com/recuperar?token=" . $this->token . "'>Reestablecer Password</a>";        
        $contenido .= "<p>Si tu no solicitaste este cambio, puedes ignorar el mensaje</p>";
        $contenido .= '</html>';
        $mail->Body = $contenido;

            //Enviar el mail
        $mail->send();
    }
}