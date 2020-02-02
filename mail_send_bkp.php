<?php

require_once('pluginsphp/swift/swift_required.php');
require_once('pluginsphp/functions.php');

$data = $_POST;

ini_set('max_execution_time', 0);
$estados = array(10,11,14,17,29);
if(in_array($data['estado'], $estados)){
    $to = 'ggonzalez@masterblowers.com';
}else{
    if($data['producto'] == '1'){
        $to = 'ventas1@masterblowers.com';
    }elseif ($data['producto'] == '3') {
        $to = 'ventas2@masterblowers.com';
    }elseif ($data['producto'] == '4') {
        $to = 'ventas3@masterblowers.com';
    }elseif ($data['producto'] == '2') {
        $to = 'ventas4@masterblowers.com';
    }else{
        $to = array('ventas@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }
}

$mensaje = 'Nombre: '.$data['nombre'].' '.$data['apellido'].'<br>'
        . 'Empresa: '.$data['empresa'].'<br>'
        . 'Teléfono: '.$data['telefono'].'<br>'
        . 'Celular: '.$data['celular'].'<br>'
        . 'Correo: '.$data['correo'].'<br>'
        . 'Familia del Producto: '.$data['productoName'].'<br>'
        . 'Estado: '.$data['estadoName'].'<br>'
        . 'Necesidad: '.$data['necesidad'].'<br>'
        . 'Aplicación: '.$data['aplicacion'].'<br><br><br>'
        . '--- <br>'
        . 'Este e-mail se ha enviado vía formulario de contacto desde MB'
        . '';


$consecutivo = getFormatoConteo();
$title = 'Mensaje enviado desde el formulario de contacto de MB (Landing '.$consecutivo.')';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: no-reply@masterblowers.com \r\n'. 'X-Mailer: PHP/' . phpversion();

$transport = Swift_SmtpTransport::newInstance('mail.masterblowers.com', '587');
$transport->setUsername('landing@masterblowers.com');
$transport->setPassword('landcontact');
$swift = Swift_Mailer::newInstance($transport);
$message = new Swift_Message($title);
$from = array('no-reply@masterblowers.com' => 'no-reply@masterblowers.com');
$message->setFrom($from);

$body = $mensaje;
$message->setBody($body, 'text/html');
$message->setReturnPath('landing@masterblowers.com');
$msgId = $message->getHeaders()->get('Message-ID');
$msgId->setId(time() . '.' . uniqid('landing') . '@masterblowers.com');
$message->setTo($to);

if ($swift->send($message, $failures)) {
        interface_contador();
        $result['success'] = true;
        $result['mensaje'] = "Correo Enviado";
} else {
        $result['success'] = false;
        $result['mensaje'] = "Error de Envio";
}
echo json_encode($result);  