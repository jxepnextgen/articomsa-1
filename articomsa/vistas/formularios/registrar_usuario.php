<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
<title>Registrar Usuario</title>
</head>

<body>

<div id="contenedor">
	<div id="contenido">
	<h1> Registrar Usuario </h1>
	</div>
</div>
<div>
<br />
<br />
<br />

<form action="registrar_usuario.php" method="post" name="form_registrar_usuario"><br>
	<fieldset>
		<legend class="leyenda"> Nuevo Usuario </legend>
		<div id="formulario">
		<br><br>
		<label>Nombres*: </label> <input type="text" name="usuario_nombres"/><br><br>
		<label>Apellidos*: </label> <input type="text" name="usuario_apellidos"/><br><br>
		<label>Telefono: </label> <input type="text" name="usuario_telefono"/><br><br>
		<label>Correo: </label> <input type="text" name="usuario_correo" /><br><br>
		<label>Contraseña*: </label> <input type="password" name="usuario_contrasena" /><br><br>
		<label>Confirmar Contraseña*: </label> <input type="password" name="contrasena_confirmar" /><br><br>
		<input type="submit" value="Crear" /><br><br>
		</div>
	</fieldset>
</form>
<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P>
</div>

</body>
</html>
