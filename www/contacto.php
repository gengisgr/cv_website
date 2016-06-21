<?php

    $name = $_POST["nombre"];
    $email = $_POST["email"];
    $message = $_POST["mensaje"];
    $from = "From: gengis.info"; 
    $to = "admin@gengis.info"; 
    $subject = "Mensaje desde gengis.info";
    $body =  "Nombre: $name\n E-Mail: $email\n Mensaje: $message";

if ($_POST["submit"]) {
    if (mail ($to, $subject, $body, $from)) { 
        echo "<p style=text-align: center>¡Gracias, pronto me pondré en contacto!</p>";
    } else { 
        echo "<p style=text-align: center>Lo siento, no ha sido posible enviar tu mensaje</p>"; 
    }
}

?>