
<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
	
<title>Registrar Ruta</title>
</head>
<body>

<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1> Registrar Ruta </h1>
				</div>
			</div>
		</header>

<div class="menu">
	<form action="../../procesos/registros/registrar_ruta.php" method="post" name="form_registrar_ruta"><br>
		
	<fieldset>
		<legend class="leyenda"> Nueva Ruta </legend>
		<div id="formulario">
		<br><br>
		<label>Descripcion Ruta*: </label> <input type="text" name="ruta_descripcion" /><br><br>
		<input type="submit" value="Crear" /><br><br>
		</div>
	</fieldset>
</form>
<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P>

<br>
	<div id="boton" class="center-buttons buttons-margin">
	      <a href = "../menus/menu_ruta.php">
		<h3>Regresar</h3></a>
	</div>
	<div id="boton" class="center-buttons buttons-margin">
	      <a href = "../menus/menu.php">
		<h3>Menu Principal</h3></a>
	</div>
</div>

</body>
</html>