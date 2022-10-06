<?php

$destino = "dodoricotomi@gmail.com";

$nombre = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = "Envio desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre :" . $name . "\n" . "Email :" . $email . "\n" . "Telefono :" . $phone . "\n" . "Mensaje :" . $message;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: contact.html');