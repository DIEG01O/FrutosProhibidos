<?php

@session_cache_limiter('private, must-revalidate');
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
@header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
@header("Cache-Control: no-store, no-cache, must-revalidate");
@header("Cache-Control: post-check=0, pre-check=0", FALSE);
@header("Access-Control-Allow-Origin: *" ); 
@header("Pragma: no-cache");
error_reporting();
class Formulario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $library = array('smarty_tpl', 'mantenimiento', 'url_comp','alerta','sendmail');
        $helper = array('url');
        $model = array();
        $this->load->library($library);
        $this->load->helper($helper);
        $this->load->model($model);
        /* configuracion personalizada */
        $this->items['base_url'] = base_url();
        
        $this->_api="http://tour-gastronomico.com/multimanager/api/";
        $this->boletin="http://exportando-peru.com/newsletter/api/";
        /* ------------------------------------------------------------------------ */
    }

    public function enviar2()
    {

        require_once APPPATH.'third_party/PHPMailer/phpmailer.php';


        $mail = new PhpMailer();
        $mail ->isSMTP();
        $mail ->Host = 'smtp.mailtrap.io';
        $mail ->SMTPAuth = true;
        $mail ->Username = '027c7353d89d54';
        $mail ->Password = 'd6899bb0c020a1';
        $mail ->SMTPSecure = 'ssl';
        $mail ->Port = 587;

        $mail->setFrom('anthony10.reyes10@gmail.com', 'Prueba1');

        $mail->Subject = "Correo enviado via SMTP";

        $mail->addAddress('anthony10_reyes_@hotmail.com');

        $mail->IsHTML(true);

        $mailContent = "<h1>Enviado HTML usando SMTP in CdIg</h1>
        <p>Enviado Enviado Enviado</p>";

        $mail->Body = $mailContent;

        if(!$mail->send())
        {
            echo 'Correo no enviado';
            echo 'Error' .$mail->ErrorInfo;
        }
        else
        {
            echo 'Correo enviado';
        }

    }

    public function enviar1() {
   
        $nombre = $this->input->post('name',TRUE);
        $telefono = $this->input->post('phone',TRUE);
        $email = $this->input->post('email',TRUE);
        //$empresa = $this->input->post('empresa',TRUE);
        //$plan = $this->input->post('plan',TRUE);
        //$precio = $this->input->post('precio',TRUE);
        $comentario = $this->input->post('message',TRUE);
        //VALIDACION DE CAMPOS
        
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|trim|alphaspace', 'Nombres');
        $error .= $this->mantenimiento->validacion($telefono, 'required|trim|numeric|minlenght[6]|maxlenght[9]', 'Teléfono');
        $error .= $this->mantenimiento->validacion($email, 'required|trim|email|maxlenght[80]', 'E-mail');
        //$error .= $this->mantenimiento->validacion($empresa, 'required|trim|maxlenght[80]', 'Empresa');
        $error .= $this->mantenimiento->validacion($comentario, 'required|maxlenght[500]', 'Mensaje');
        if ($error != '') {
            echo $this->alerta->alerta_error($error, TRUE);
            EXIT;
        }

        
            $data = array(
                'name' => 'Logos Peru',
                'email' => 'anthony10_reyes_@hotmail.com',
                'subject' =>  'Diseño y Rediseno de Logotipos',
                // Datos SMTP: en caso se necesiten 
                
                'protocol' => 'smtp',
                'smtp_secure' => 'ssl', // ssl - tls
                'smtp_host' => 'smtp.mailtrap.io',
                'smtp_SMTPAuth' => true,
                'smtp_port' => 2525, // ssl: 465 - tls: 587
                'smtp_username' => '027c7353d89d54',
                'smtp_password' => 'd6899bb0c020a1',
                /* Datos adicionales */
                'user_name' => $nombre,
                'user_phone' => $telefono,
                'user_email' => $email,
                //'user_empresa' => $empresa,
                //'user_precio' => $precio,
                //'user_plan' => $plan,
                'user_comentario' => $comentario
        
            );
            /* ------MAIL DE ATERRIZAJE------- */
            $list_email = array(
                'anthony10.reyes10@gmail.com' => 'anthony10.reyes10@gmail.com', // ----> Correo principal
                 $email => $email
            );

            $this->sendmail->load($data, 'contacto');
            
            $this->sendmail->success_sendmail($list_email);
            echo '<script>console.log("prueba9")</script>';
            
            echo $this->alerta->alertaExito('Gracias por su comunicación, en breve nos pondremos en contacto con Usted', TRUE);
            echo '<script>console.log("prueba10")</script>';
            //echo $this->alerta->refrescar_tiempo(200);
            EXIT;
    }
    public function videoinstitucional() {
        $nombre = $this->input->post('nombre',TRUE);
        $telefono = $this->input->post('telefono',TRUE);
        $email = $this->input->post('email',TRUE);
        $empresa = $this->input->post('empresa',TRUE);
        $plan = $this->input->post('plan',TRUE);
        $precio = $this->input->post('precio',TRUE);
        $comentario = $this->input->post('message',TRUE);
        //VALIDACION DE CAMPOS
        $error = '';
        $error .= $this->mantenimiento->validacion($nombre, 'required|trim|alphaspace', 'Nombres');
        $error .= $this->mantenimiento->validacion($telefono, 'required|trim|numeric|minlenght[6]|maxlenght[9]', 'Teléfono');
        $error .= $this->mantenimiento->validacion($email, 'required|trim|email|maxlenght[80]', 'E-mail');
        $error .= $this->mantenimiento->validacion($empresa, 'required|trim|maxlenght[80]', 'Empresa');
        $error .= $this->mantenimiento->validacion($comentario, 'required|maxlenght[500]', 'Mensaje');
        if ($error != '') {
            echo $this->alerta->alerta_error($error, TRUE);
            EXIT;
        }

            $data = array(
                'name' => 'Logos Perú',
                'email' => 'desarrollo3@exportando-online.com',
                'subject' =>  'Video Institucional',
                /* Datos SMTP: en caso se necesiten */
                'smtp_secure' => 'ssl', // ssl - tls
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465, // ssl: 465 - tls: 587
                'smtp_username' => '',
                'smtp_password' => '',
                /* Datos adicionales */
                'user_name' => $nombre,
                'user_phone' => $telefono,
                'user_email' => $email,
                'user_empresa' => $empresa,
                'user_precio' => $precio,
                'user_plan' => $plan,
                'user_comentario' => $comentario
        
            );
            /* ------MAIL DE ATERRIZAJE------- */
            $list_email = array(
                'desarrollo3@exportando-online.com' => 'desarrollo3@exportando-online.com', // ----> Correo principal
                 $email => $email
            );
            $this->sendmail->load($data, 'videoinstitucional');
            $this->sendmail->success_sendmail($list_email);
            echo $this->alerta->alertaExito('Gracias por su comunicación, en breve nos pondremos en contacto con Usted', TRUE);
            echo $this->alerta->refrescar_tiempo(1500);
            EXIT;
    }

}