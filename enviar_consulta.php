<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

// cuerpo del mail

$cuerpo_mail = "Nombre: " .$nombre_form . "\r\n" . "Apellido: " . $apellido_form . "\r\n" . "Correo electrónico. " . "\r\n" . "Mensaje: " . $mensaje_form;

mail("maildeprueba3332@gmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail);