
<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
	
<title>Consultar Ruta</title>
</head>
<body>

<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1> Consultar Ruta </h1>
				</div>
			</div>
		</header>

<div class="menu">
<?php

	include ("../conexion/conector.php");
	$con=mysqli_connect($host, $usuario, $contrasena)
		or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

	// Seleccionando Base de Datos.
	mysqli_select_db($con, $nombre_bd)
		or die("Error".mysqli_error($con));

	

	// Ingresando datos de formulario a tabla en Base de Datos.	
	$sql = mysqli_query($con, "SELECT descripcion, id_ruta FROM ruta");
	
	echo "<table>
		<tr>
		<th width='50'>Codigo</th>
		<th width='150'>Ruta</th>
		</tr>";
	
		while($data = mysqli_fetch_array($sql)){
		echo "<form action=consultar_ruta.php method=post name=consultar_ruta>";
		echo"<tr>";
		echo"<td align=center>".$data['id_ruta']." </td>";
		echo"<td>".$data['descripcion']." </td>";
		echo"</tr>";
		echo "</form>";
		
	}
	echo "</table>"; 
mysqli_close($con);
	
?>

<div id="boton" class="center-buttons buttons-margin">
	<a href="modificar_ruta.php">	
		<h3>Modificar Ruta </h3></a>	
	</div>

	<div id="boton" class="center-buttons buttons-margin">
		<a href="eliminar_ruta.php">
			<h3>Eliminar Ruta</h3></a>
	</div>
	<div id="boton" class="center-buttons buttons-margin">
		<a href = "../../vistas/menus/menu_ruta.php">
			<h3>Regresar</h3>	</a>
	</div>
<div id="boton" class="center-buttons buttons-margin">
		<a href = "../../vistas/menus/menu.php">
			<h3>Menu Principal</h3>
			</a>
	</div>

</div>

</body>
</html>
