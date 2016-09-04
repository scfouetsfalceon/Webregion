<?php

require("mailer/class.phpmailer.php");

if ( isset($_POST['submit']) ) {

$mail = new PHPMailer();
$mail->Host = "localhost";
       
$mail->From = "jampgold@gmail.com";
$mail->AddAddress("comisionadofalcon@gmail.com");
//$mail->AddAddress("jampgold@gmail.com");
$mail->FromName = "Pagina Web";
$mail->Subject = "Postulacion para el Paxtu";

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$grupo = $_POST['grupo'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$area = $_POST['area'];

switch($area) {
	case 0:
	$area = "Programa";
	break;

	case 1:
	$area = "Log&iacute;stica";
	break;

	case 2:
	$area = "Indiferente";
	break;
	

}

$body  = "<h4>Correo para postulaci&oacute;n</h4>
Datos del Rover

<b>Nombre: </b> " . $nombre . "<br>
<b>Apellido: </b> " . $apellido . "<br>
<b>e-mail: </b> " . $email . "<br>
<b>Grupo Scouts: </b> " . $grupo . "<br>
<b>Telefono: </b> " . $telefono . "<br>
<b>Celular: </b> " . $celular . "<br>
<b>Me gustar&iacute;a servir en el &aacute;rea de: </b> " . $area . "<br>";

$mail->Body = $body;

$mail->IsHTML(true);

$validado = $mail->Send();

if ($validado) {
	print "Enviado exitosamente!!!";
} else {
	print "<br>Error de envio, por favor pongase en contacto con el administrador del sitio web";
}


} else {

	print "Por favor, utilice el formulario de postulacio&oacute;n";

}
?>