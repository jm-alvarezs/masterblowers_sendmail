<?php

require_once('pluginsphp/swift/swift_required.php');
require_once('pluginsphp/functions.php');

$data = $_POST;

ini_set('max_execution_time', 0);
$estados = array(10,11,14,17,29);

if(in_array($data['estado'], $estados)){
    $to = array('ggonzalez@masterblowers.com', 'ventas@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
}else{
    if($data['producto'] == '1'){
        $to = array('ventas@masterblowers.com', 'ventas1@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }elseif ($data['producto'] == '3') {
        $to = array('ventas@masterblowers.com', 'ventas2@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }elseif ($data['producto'] == '4') {
        $to = array('ventas@masterblowers.com', 'ventas3@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }elseif ($data['producto'] == '2') {
        $to = array('ventas@masterblowers.com', 'ventas4@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }else{
        $to = array('ventas@masterblowers.com', 'operaciones@masterblowers.com', 'publicidad.masterblowers@gmail.com');
    }
}

$mensaje = 'Empresa: '.$data['empresa'].'<br>'
        . 'Nombre: '.$data['nombre'].'<br>'
        . 'Teléfono/Celular: '.$data['telefono'].'<br>'
        . 'Correo: '.$data['correo'].'<br>'
        . 'Familia del Producto: '.$data['productoName'].'<br>'
        . 'Estado: '.$data['estadoName'].'<br>'
        . 'Comentarios: '.$data['comentarios'].'<br><br><br>'
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