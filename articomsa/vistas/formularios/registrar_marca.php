<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
		<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="../../css/forms.css" />
		<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
		<title>Registrar Marca</title>
	</head>

	<body>

		<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1>Registrar Marca</h1>
				</div>
			</div>
		</header>

		<div class="form-container">

<form action="../../procesos/registros/registrar_marca.php" method="post" name="form_registrar_marca"><br>
	<fieldset>
		<legend class="leyenda"> Nueva Marca </legend>
		<div id="formulario">
		<br><br>
		<label>Nombre Marca*: </label> <input type="text" name="marca_nombre" /><br><br>
		<input type="submit" name="crear" value="Crear" /><br><br>
		</div>
	</fieldset>
</form>
<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P>
<br>

<div id="boton" class="center-buttons buttons-margin">
	      <a href = "registrar_producto_vista.php">
		<h3>Regresar</h3></a>
	</div>
	<div id="boton" class="center-buttons buttons-margin">
	      <a href = "../menus/menu.php">
		<h3>Menu Principal</h3></a>
	</div>

</div>

</body>
</html>
