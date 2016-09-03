<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Registro en L&iacute;nea para la Asamblea Nacional Scout Paraguana 2011</title>

<script type="text/javascript" src="js/datepicker_es.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/vanadium_es.js"></script>

<link href="css/formulario.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div class="liformulario">
<form action="confirmacion.php" enctype="multipart/form-data" method="post">
<ul>
<li>
<h3><span class="verde"> Datos personales </span></h3>
<div class="etiqueta">Nombres:</div> <div class="ingrese"><input type="text" name="nombres" class=":required" /> </div><br />
<div class="etiqueta">Apellidos: </div> <div class="ingrese"><input type="text" name="apellidos" class=":required" /></div>
<div class="etiqueta"> 
Fecha de nacimiento:</div> <div class="ingrese">
<!-- Inicio del DatePicker -->
        <select id="date-sel2-dd" name="dia">
          <option value="-1">D&iacute;a</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
        </select>
        <select id="date-sel2-mm" name="mes">
          <option value="-1">Mes</option>
          <option value="01">Enero</option>
          <option value="02">Febrero</option>
          <option value="03">Marzo</option>
          <option value="04">Abril</option>
          <option value="05">Mayo</option>
          <option value="06">Junio</option>
          <option value="07">Julio</option>
          <option value="08">Agosto</option>
          <option value="09">Septiembre</option>
          <option value="10">Octubre</option>
          <option value="11">Noviembre</option>
          <option value="12">Diciembre</option>
        </select>
        <input type="text" class="range-high-1999-12-31 split-date transparency :required" id="date-sel2" name="ano" size="4" /></div> 
<!-- Fin del DatePicker -->
<div class="etiqueta">
Lugar de nacimiento:</div> <div class="ingrese"> <input type="text" name="lugar_nac" class=":required" /></div> 
<div class="etiqueta">
Edad: </div> <div class="ingrese"><input type="text" name="edad" size="4" class=":required :integer" /> <br />
<div class="etiqueta">
Sexo: </div> <div class="ingrese"><select name="sexo">
			<option value="0">Femenino</option>
			<option value="1">Masculino</option>
		</select> </div> 
<div class="etiqueta">
C&eacute;dula de Identidad:</div> <div class="ingrese"> <input type="text" name="cedula" class=":format;/^V|E-\d{6,9}$/;" /> <small>Formato: V-12345678</small>  </div><br />
<div class="etiqueta">
Estado:</div> <div class="ingrese"> 
<select name="estado">
		<option value="Amazonas">Amazonas</option>
		<option value="Anzo&aacute;tegui">Anzo&aacute;tegui</option>
		<option value="Apure">Apure</option>
		<option value="Aragua">Aragua</option>
		<option value="Barinas">Barinas</option>
		<option value="Bolivar">Bolivar</option>
		<option value="Carabobo">Carabobo</option>
		<option value="Cojedes">Cojedes</option>
		<option value="Delta Amacuaro">Delta Amacuaro</option>
		<option value="Distrito Capital">Distrito Capital</option>
		<option value="Falc&oacute;n">Falc&oacute;n</option>
		<option value="Guarico">Guarico</option>
		<option value="Lara">Lara</option>
		<option value="M&eacute;rida">M&eacute;rida</option>
		<option value="Miranda">Miranda</option>
		<option value="Monagas">Monagas</option>
		<option value="Nueva Esparta">Nueva Esparta</option>
		<option value="Portuguesa">Portuguesa</option>
		<option value="Sucre">Sucre</option>
		<option value="T&aacute;chira">T&aacute;chira</option>
		<option value="Trujillo">Trujillo</option>
		<option value="Vargas">Vargas</option>
		<option value="Yaracuy">Yaracuy</option>
		<option value="Zulia">Zulia</option>
	</select></div><br />
<div class="etiqueta">
Ciudad:</div> <div class="ingrese"> <input type="text" name="cuidad" class=":required" /> </div><br />
<div class="etiqueta">
Zona Postal: </div> <div class="ingrese"><input type="text" name="zona_postal" /> </div><br />
<div class="etiqueta">
Tel&eacute;fono de Habitaci&oacute;n: </div> <div class="ingrese"><input type="text" name="telefono" class=":format;/^\d{4}-\d{7}$/;" /> <small>Formato: 0414-1234567</small> </div><br />
<div class="etiqueta">
Fax:</div> <div class="ingrese"> <input type="text" name="fax" /> </div><br />
<div class="etiqueta">
Celular: </div> <div class="ingrese"><input type="text" name="celular" class=":format;/^\d{4}-\d{7}$/;" /> <small>Formato: 0414-1234567</small> </div><br />
<div class="etiqueta">
Correo Eletr&oacute;nico:</div> <div class="ingrese"><input type="text" name="email" class=":email"/> </div><br />
<div class="etiqueta">
Otros: </div> <div class="ingrese"><input type="text" name="otro" /> </div><br />
</li>

<li>
<h3><span class="verde"> Datos Scouts </span></h3>
Grupo: <input type="text" name="grupo" /> <br /> 
Distrito: <input type="text" name="distrito"/> <br />
Regi&oacute;n: <input type="text" name="region" class=":required" /> <br />
Cargo Actual: <input type="text" name="cargo" class=":required" /> <br />

Asistir como: <select name="tipo">
		<optgroup label="Delegados con derecho a voz y voto">
			<option value="0">Delegado de un Distrito Scout</option>
			<option value="1">Comisionado de Distrito</option>
			<option value="2">Miembro electo del Consejo Nacional Scout</option>
			<option value="3">Miembro delegado del Comit&eacute; Consultivo</option>
		</optgroup>
		<optgroup label="Observadores con derecho a voz">
			<option value="4">Miembro de la Corte de Honor</option>
			<option value="5">Director Ejecutivo Nacional</option>
			<option value="6">Director Nacional</option>
			<option value="7">Cooperador Nacional</option>
			<option value="8">Comisionado Regional</option>
			<option value="9">Asistente o Cooperador Regional</option>
			<option value="10">Dirigente registrado y
acreditado en Asamblea Distrital</option>
			</optgroup>
	</select><br />

</li>

<li>
<h3><span class="verde"> Datos M&eacute;dicos </span> </h3>
Sufre del alg&uacute;n tipo de afecci&oacute;n: <select name="afeccion">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select> <br />
Especifique: <input type="text" name="afeccion_t" /> <br />
Esta bajo alg&uacute;n tipo de tratamiento m&eacute;dico:<select name="tratamiento">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select> <br />
Especifique: <input type="text" name="tratamiento_t" /> <br />
</li>

<li>
<h3><span class="verde"> Otros </span></h3>
Posee alg&uacute;n tipo de dieta especial:<select name="dieta">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select> <br />
Especifique: <input type="text" name="dieta_t" /> <br />

Medio de Transporte:<select name="mtransporte">
			<option value="0">Auto Propio</option>
			<option value="1">Vía Terrestre</option>
			<option value="2">Vía Aerea</option>
		</select> <br />
Día de llegada:<select name="diallegada">
			<option value="0">Jueves</option>
			<option value="1">Viernes</option>
		</select> <br />
Turno de llegada:<select name="turnollegada">
			<option value="0">Mañana</option>
			<option value="1">Tarde</option>
			<option value="2">Noche</option>
		</select> <br />

</li>

<li>
<h3><span class="verde"> Validaci&oacute;n de Inscripci&oacute;n </span></h3>
Tipo de transacci&oacute;n: <select name="transaccion">
			<option value="0">Deposito</option>
			<option value="1">Transferencia</option>
		</select> <br />
N&uacute;mero de Transacción: <input type="text" name="transaccion_n" class=":required :digits" /> <br />
Monto: <input type="text" name="monto" class=":float" /> <br />
Observaci&oacute;n: <textarea name="observacion"></textarea><br />
<input type="submit" name="submit" value="Completar Registro">
</form>
</li>
</ul>
</body>
</html>
