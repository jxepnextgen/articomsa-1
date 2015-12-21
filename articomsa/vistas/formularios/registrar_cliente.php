<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
		<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="../../css/forms.css" />
		<link type="text/css" rel="stylesheet" href="../..//css/title_pages.css" />
		<title>Registrar Cliente</title>
	</head>

	<body>

		<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1>Registrar Cliente</h1>
				</div>
			</div>
		</header>

		<div class="form-container">
			<form action="../../procesos/registros/registrar_cliente.php" method="post" name="form_registrar_cliente"><br>
				<fieldset>
					<legend class="leyenda"> Nuevo Cliente </legend>
					<div id="formulario">
						<div class="form-containers">
							<label>Nombre Cliente*: </label>
							<input class="form-small-fields" type="text" name="cliente_nombre" placeholder="Nombre Cliente" />
						</div>
						<div class="form-containers">
							<label>Contacto: </label> 
							<input class="form-small-fields" type="text" name="cliente_contacto" placeholder="Contacto" />
						</div>
						<div class="form-containers">
							<label>Telefono*: </label>
							<input class="form-small-fields" type="text" name="cliente_telefono" placeholder="Teléfono" />
						</div>
						<div class="form-containers">
							<label>NIT: </label>
							<input class="form-small-fields" type="text" name="cliente_nit" placeholder="NIT" />
						</div>
						<div class="form-containers">
							<label>Dirección*: </label>
							<input class="form-small-fields" type="text" name="cliente_direccion" placeholder="Dirección" />
						</div>
						
						<br />
						<input type="submit" value="Crear" />
					</div>
				</fieldset>
				
				<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P><br/>
			</form>
		</div>
		<div id="boton" class="center-buttons buttons-margin">
			<a href = "../menus/menu_cliente.php">
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
