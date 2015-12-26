	
<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
	
<title>Modificar Ruta</title>
</head>
<body>

<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1> Modificar Ruta </h1>
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

		

		if(isset($_POST['actualizar'])){
			
		$actualizar = "UPDATE ruta SET descripcion='$_POST[descripcion]' WHERE id_ruta='$_POST[id_ruta]'" ;
			mysqli_query($con, $actualizar); 
			header ('location: ../../vistas/vistas/ruta_modificada.php');
			
			
		};
		

	// Ingresando datos de formulario a tabla en Base de Datos.	
	$sql = mysqli_query($con, "SELECT id_ruta, descripcion FROM ruta");
	
	echo "<table>
		<tr>
		<th width='50'>Codigo</th>
		<th width='150'>Ruta</th>
		</tr>";
	
		while($data = mysqli_fetch_array($sql)){
		echo "<form action=modificar_ruta.php method=post name=modificar_ruta>";
		echo"<tr>";
		echo"<td align=center>".$data['id_ruta']." </td>";
		echo"<td>"."<input type=text name= descripcion value='".$data['descripcion']."' </td>";
		echo"<td>"."<input type=hidden name= id_ruta value=".$data['id_ruta']." </td>";
		echo"<td>"."<input type=submit name='actualizar' value=actualizar"." </td>";
		echo"</tr>";
		echo "</form>";
		
	}
	echo "</table>"; 

mysqli_close($con);

	
?>
<br>
<br>
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
