<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
		<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="../../css/forms.css" />
		<link type="text/css" rel="stylesheet" href="../..//css/title_pages.css" />
		<title>Registrar Usuario</title>
	</head>

	<body>

		<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1>Registrar Usuario</h1>
				</div>
			</div>
		</header>

		<div class="form-container">
			<form action="../../procesos/registros/registrar_usuario.php" method="post" name="form_registrar_usuario"><br>
				<fieldset>
					<legend class="leyenda"> Nuevo Usuario </legend>
					<div id="formulario">
						<div class="form-containers">
							<label>Nombres Usuario*: </label>
							<input class="form-small-fields" type="text" name="nombre" />
						</div>
						<div class="form-containers">
							<label>Telefono: </label> 
							<input class="form-small-fields" type="text" name="telefono"  />
						</div>
						<div class="form-containers">
							<label>Correo: </label>
							<input class="form-small-fields" type="text" name="correo"  />
						</div>
						<div class="form-containers">
							<label>Contraseña: </label>
							<input class="form-small-fields" type="password" name="contra" />
						</div>
						<div class="form-containers">
							<label>Confirmar Contraseña: </label>
							<input class="form-small-fields" type="password" name="confir_contra" />
						</div>
						
						<br />
						<input type="submit" value="Crear" />
					</div>
				</fieldset>
				
				<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P><br/>
			</form>
		</div>
		<div id="boton" class="center-buttons buttons-margin">
			<a href = "../menus/menu_usuario.php">
			<h3>Regresar</h3>
			</a>
		</div>
		<div id="boton" class="center-buttons buttons-margin">
			<a href = "../menus/menu.php">
				<h3>Menu Principal</h3>
			</a>
		</div>
	</body>
</html>
