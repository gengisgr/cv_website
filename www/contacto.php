<?php

    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $message = $_POST['mensaje'];
    $from = 'From: gengis.info'; 
    $to = 'gengisgr@gmail.com'; 
    $subject = 'Mensaje desde gengis.info';

if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>¡Gracias, pronto te reponderé!</p>';
    } else { 
        echo '<p>Lo siento, No ha sido posible enviar tu mensaje</p>'; 
    }
}

?>