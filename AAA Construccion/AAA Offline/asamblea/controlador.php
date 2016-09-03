<?php

// Controlador de registro de participante ANS2011
// Fecha: 20/01/2011

include('base.php');

class registrarenlinea {
	private $conexion;
	private $nombres;
	private $apellidos;
	private $fecha_nac;
	private $lugar_nac;
	private $edad;
	private $sexo;
	private $cedula;
	private $estado;
	private $cuidad;
	private $zona_postal;
	private $telefono;
	private $celular;
	private $fax;
	private $email;
	private $otro;
	private $tipo;
	private $afeccion;
	private $afeccion_t;
	private $tratamiento;
	private $tratamiento_t;
	private $dieta;
	private $dieta_t;
	private $mtransporte;
	private $diallegada;
	private $turnollegada;
	private $transaccion;
	private $transaccion_n;
	private $monto;
	private $lugar;
	private $observacion;
	private $registro_d;
	private $registro_h;
	private $log = "email.log";

	public function __construct(){
		$this->conexion = new base();
		$this->nombres = ucwords(strtolower($_POST['nombres']));
		$this->apellidos = ucwords(strtolower($_POST['apellidos']));
		$this->fecha_nac = $_POST['ano'] . "/" . $_POST['mes'] . "/" . $_POST['dia'];
		$this->lugar_nac = ucwords(strtolower($_POST['lugar_nac']));
		$this->edad = $_POST['edad'];
		$this->sexo = $_POST['sexo'];
		$this->cedula = $_POST['cedula'];
		$this->estado = $_POST['estado'];
		$this->cuidad = ucwords(strtolower($_POST['cuidad']));
		$this->zona_postal = $_POST['zona_postal'];
		$this->telefono = $_POST['telefono'];
		$this->celular = $_POST['celular'];
		$this->fax = $_POST['fax'];
		$this->email = $_POST['email'];
		$this->otro = $_POST['otro'];
		$this->tipo = $_POST['tipo'];
		$this->afeccion = $_POST['afeccion'];
		$this->afeccion_t = $_POST['afeccion_t'];
		$this->tratamiento = $_POST['tratamiento'];
		$this->tratamiento_t = $_POST['tratamiento_t'];
		$this->dieta = $_POST['dieta'];
		$this->dieta_t = $_POST['dieta_t'];
		$this->mtransporte = $_POST['mtransporte'];
		$this->diallegada = $_POST['diallegada'];
		$this->turnollegada = $_POST['turnollegada'];
		$this->transaccion = $_POST['transaccion'];
		$this->transaccion_n = $_POST['transaccion_n'];
		$this->monto = $_POST['monto'];
		$this->observacion = $_POST['observacion'];
		$this->registro_d = date("Y/m/d");
		$this->registro_h = date("H:i:s");
	}

	private function validarCampos() {
		if ( empty($this->nombres) ) {
			print "Debe Insertar un Nombre";
			return False;
		} elseif ( empty($this->apellidos) ) {
			print "Debe Insertar un Apellido";
			return False;
		} elseif ( empty($this->fecha_nac) ) {
			print "Debe Insertar una Fecha de nacimiento";
			return False;
		} elseif ( empty($this->lugar_nac) ) {
			print "Debe Insertar un Lugar de nacimiento";
			return False;
		} elseif ( empty($this->edad) ) {
			print "Debe Insertar una Edad";
			return False;
		} elseif ( empty($this->cedula) ) {
			print "Debe Insertar una Cedula de Identidad";
			return False;
		} elseif ( empty($this->cuidad) ) {
			print "Debe Insertar una Cuidad";
			return False;
		} elseif ( empty($this->email) ) {
			print "Debe Insertar un e-mail";
			return False;
		} elseif ( empty($this->transaccion_n) ) {
			print "Debe Insertar un numero de transaccio&oacute;n";
			return False;
		} elseif ( empty($this->monto) ) {
			print "Debe Insertar el Monto";
			return False;
		} else {
			return True;
		}
	}

	private function existeUsuario() {
		$sql = "SELECT `id` FROM `registro` WHERE `cedula` LIKE '$this->cedula'";
		$this->conexion->select($sql);
		if ( $this->conexion->numberq != 0 ) {
			print "El usuario ya esta registrado";
			return True;
		} else {
			return False;
		}
	}

	private function mailer() {
		require("mailer/class.phpmailer.php");

		$mail = new PHPMailer();

		$mail->IsSMTP();                                      // set mailer to use SMTP

		$mail->From = "asamblea@scoutsfalcon.org";
		$mail->FromName = "Asamblea Nacional Scout Falcon 2011";
		$mail->AddAddress("$this->email", "$this->nombres $this->apellidos");

		$mail->IsHTML(true);                                  // set email format to HTML

		$mail->Subject = "Confirmacion de Registro Asamblea Nacional Scout Falcon 2011";
		$mail->Body    = "Estimado Hermano(a) Scout<br />
Bienvenido a Falc&oacute;n… muchas gracias por preferir el registro en l&iacute;nea - m&aacute;s eficiente y amigable con el ambiente - a la brevedad posible le enviaremos un correo de confirmación, una vez procesado el pago.<br /><br /> 
<b><span style='font-family:Webdings;color:green;font-size:24pt'>P&nbsp;</span><span style='font-family:Arial;color:rgb(51, 153, 102);font-size:10pt'>Por favor considere su responsabilidad ambiental antes de imprimir este correo. Si va a imprimir una hoja innecesariamente, piense cuántos árboles dejan de existir por esa razón.</span></b>";
		$mail->AltBody = "Estimado Hermano(a) Scout
Bienvenido a Falcon… muchas gracias por preferir el registro en linea - mas eficiente y amigable con el ambiente - a la brevedad posible le enviaremos un correo de confirmación, una vez procesado el pago.
Por favor considere su responsabilidad ambiental antes de imprimir este correo. Si va a imprimir una hoja innecesariamente, piense cuántos árboles dejan de existir por esa razón.";

		if(!$mail->Send()) {
			$cuerpolog = "email enviado correctamente a " . $this->email . " Detalles: " . $mail->ErrorInfo;
			$this->logger("error", $cuerpolog);
		} else {
			$cuerpolog = "email enviado correctamente a " . $this->email;
			$this->logger("info", $cuerpolog);
		}

		// Enviar al correo asamblea@scoutsfalcon.org
		$support = new PHPMailer();
		$support->IsSMTP();                                      // set mailer to use SMTP

		$support->From = "no-reply@scoutsfalcon.org";
		$support->FromName = "Registro Asamblea Nacional";
		$support->AddAddress("asamblea@scoutsfalcon.org", "Asamblea Nacional");

		$support->IsHTML(true);                                  // set email format to HTML

		$support->Subject = "Nuevo Registro para la Asamblea";
		$ss = ($this->transaccion == 0 )? "Deposito" : "Transacci&oacute;n";
		if ( $this->afeccion || $this->tratamiento || $this->dieta ) {
			$mm = "<b>Atenci&oacute;n especial al caso m&eacute;dico!!!</b><br />";
		}
		$support->Body    = "Se ha registrado un nuevo usuario<br />
<b>Nombre:</b> $this->nombres<br />
<b>Apellidos:</b> $this->apellidos<br />
<b>N&uacute;meros de contacto:</b> 
$this->telefono<br />
$this->celular<br />
<b>Datos del Deposito<br />
Tipo:</b> $ss<br />
<b>Numero de la transacci&oacute;n:</b> $this->transaccion_n<br />
<b>Monto:</b> $this->monto<br />
$mm
<b>Observaciones:</b> $this->observacion<br /><br />

--<br />
Sistema Web de registro
Regi&oacute;n Scouts Falc&oacute;n";


		if(!$support->Send()) {
			$cuerpolog = "email enviado correctamente a asamblea. Detalles: " . $support->ErrorInfo;
			$this->logger("error", $cuerpolog);
		} else {
			$cuerpolog = "email enviado correctamente a asamblea";
			$this->logger("info", $cuerpolog);
		}

	}

	private function logger($tipo, $msj) {
		$referencia = date("Y/m/d H:i:s");
		if ($tipo == "error" ) {
			$data = $referencia. " ************ERROR************ " . $msj . " ************ERROR************ ";
		} elseif ($tipo == "info" ) {
			$data = $referencia. " Info:" . $msj;
		} elseif ($tipo == "info" ) {
			$data = $referencia. " Warning:" . $msj;
		}
		$data .= "\r\n";	
		$log = fopen($this->log, "a");
		fwrite($log, $data);
		fclose($log);
	}

	public function registrarUsuario() {
		if ( !$this->existeUsuario() and $this->validarCampos() ){
			$campos = "VALUES ( NULL, '$this->nombres', '$this->apellidos', '$this->fecha_nac', '$this->lugar_nac', '$this->edad', '$this->sexo', '$this->cedula',
 '$this->estado', '$this->cuidad', '$this->zona_postal', '$this->telefono', '$this->celular', '$this->fax', '$this->email', '$this->otro', '$this->tipo', '$this->afeccion', '$this->afeccion_t', '$this->tratamiento', '$this->tratamiento_t', '$this->dieta', '$this->dieta_t', '$this->mtransporte', '$this->diallegada', '$this->turnollegada', '$this->transaccion', '$this->transaccion_n', '$this->monto', '$this->observacion', '$this->registro_d', '$this->registro_h', 0)";
			$sql = "INSERT INTO `registro` $campos";
			$insert = $this->conexion->insert($sql);
			if ( $insert == 1 ) {
				print "Su registro ha sido finalizado &eacute;xitosamente, deber&aacute; recibir un correo de confirmaci&oacute;n";
				$this->mailer();
			} else {
				print "Ha ocurrido un error durante el registro, por favor notifique correo asamblea@scoutsfalcon.org";
			}
		} else {
			print "<br />Cualquier duda o problema notifique al correo asamblea@scoutsfalcon.org";
		}
		
	}
	
}

?>
