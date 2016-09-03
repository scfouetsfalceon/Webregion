<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Registro en L&iacute;nea para la Asamblea Nacional Scout Paraguana 2011</title>
<link href="css/formulario.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php

// Vista de registro de participante ANS2011
// Fecha: 20/01/2011

if ( isset($_POST['submit']) ) {
require("controlador.php");

$registro = new registrarenLinea();
$registro->registrarUsuario();
}
?>
</body>
</html>

