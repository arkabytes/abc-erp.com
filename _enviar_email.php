<?php
	
	$para = "contacto@arkabytes.com";
    $nombre = $_REQUEST["nombre"];
    $email = $_REQUEST["email"];
	$asunto = $_REQUEST["asunto"];
	$mensaje = $_REQUEST["mensaje"];

    if ($email == "") {
        
		echo "<div class='alert alert-danger'>Por favor, introduce una dirección a la que podamos contestar</div>";
        return;
    }

    if ($mensaje == "") {
        echo "<div class='alert alert-danger'>Creo que has olvidado escribirnos el mensaje</div>";
        return;
    }

    if ($nombre == "") {
        $nombre = "Web-ABC";
    }
	
	$cabeceras = "From: ABC-ERP <contacto@arkabytes.com>";

    $mensaje = "De: " . $nombre . " <" . $email . ">\n\n" . $mensaje;
	
	if (mail($para, $asunto, $mensaje, $cabeceras)) {

		echo "<div class='alert alert-success'>Mensaje enviado correctamente</div>";
	}
	else {
		echo "<div class='alert alert-danger'>Se ha producido un error al enviar el email. Inténtelo de nuevo</div>";
	}
?>
