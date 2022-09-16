<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$correo_form = $_POST['correo'];
$mensaje_form = $_POST['mensaje'];

// cuerpo del mail

$cuerpo_mail = "Nombre: " .$nombre_form . "\r\n" . "Apellido: " . $apellido_form . "\r\n" . "Correo electrónico. " . "\r\n" . "Mensaje: " . $mensaje_form;

mail("maildeprueba3332@gmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail);

// conexion con base de datos
//  de manera local
// $conexion = mysqli_connect("localhost", "root", "", "barbaran_maria") or exit("No se pudo conectar a la base de datos");

// de manera online
$conexion = mysqli_connect("localhost", "id19415713_maria", "PocIrx|8k0sM&Gd*", "id19415713_barbaran_maria") or exit("No se pudo conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: contacto.php?e=ok");

