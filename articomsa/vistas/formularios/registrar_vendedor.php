<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="css/stylesheet.css"/>
<title>Registrar Vendedor</title>
</head>
<body>

<div id="contenedor">
	<div id="contenido">
	<h1> Registrar Vendedor </h1>
	</div>
</div>
<div>
<br />
<br />
<br />

<form action="registrar_vendedor.php" method="post" name="form_registrar_vendedor"><br>
	<fieldset>
		<legend class="leyenda"> Nuevo Vendedor </legend>
		<div id="formulario">
		<br><br>
		<label>Nombres*: </label> <input type="text" name="vendedor_nombres"/><br><br>
		<label>Apellidos*: </label> <input type="text" name="vendedor_apellidos"/><br><br>
		<label>Telefono: </label> <input type="text" name="vendedor_telefono"/><br><br>
		<label>Correo: </label> <input type="text" name="vendedor_correo"/><br><br>
		<input type="submit" value="Crear" /><br><br>
		</div>
	</fieldset>
</form>
<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P>
</div>

</body>
</html>