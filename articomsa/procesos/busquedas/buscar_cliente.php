
<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
	
<title>Buscar Cliente</title>
</head>
<body>

<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1> Buscar Cliente </h1>
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
	$sql = mysqli_query($con, "SELECT id_cliente, nombre, direccion, nit, contacto, telefono FROM cliente");
	
	echo "<table>
		<tr>
		<th width='200'>Nombre</th>
		<th width='150'>Direccion</th>
		<th>Nit</th>
		<th width='180'>Contacto</th>
		<th>Telefono</th>
		</tr>";
	
		while($data = mysqli_fetch_array($sql)){
		echo "<form action=buscar_cliente.php method=post name=buscar_cliente>";
		echo"<tr>";
		echo"<td>".$data['nombre']." </td>";
		echo"<td>".$data['direccion']." </td>";
		echo"<td>".$data['nit']." </td>";
		echo"<td>".$data['contacto']." </td>";
		echo"<td>".$data['telefono']." </td>";
		echo"</tr>";
		echo "</form>";
		
		//echo $data['nombre']." ".$data['telefono']." ".$data['direccion']." ".$data['nit']." ".$data['contacto']."<br>";
	}
	echo "</table>"; 
mysqli_close($con);
	
?>

<div id="boton" class="center-buttons buttons-margin">
	<a href="modificar_cliente.php">	
		<h3>Modificar Cliente</h3></a>	
	</div>

	<div id="boton" class="center-buttons buttons-margin">
		<a href="eliminar_cliente.php">
			<h3>Eliminar Cliente</h3></a>
	</div>

</div>

</body>
</html>
