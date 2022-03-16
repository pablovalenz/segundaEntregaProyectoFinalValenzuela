<$php

 	$nombre = $_POST["nombre"];
 	$apellido = $_POST["apellido"];
 	$email = $_POST["email"];
 	$gender = $_POST["gender"];
 	$telefono = $_POST["telefono"];
	$mensaje = $_POST["mensaje"];

	$para = "pjvalenzuela@gmail.com";
	$asunto = "Mensaje de pagina ph zen de $nombre";

	$mensaje = "
		
		Nombre del remitente: ".$nombre."
		Apellido: ".$apellido."
		correo: ".$email."
		Opción de clase: ".$gender."
		Telefono: ".$telefono."
		mensaje: ".$mensaje."
	";

	mail($para,$asunto,utf8_decode($mensaje));

	header ("location: index.html");

	?>