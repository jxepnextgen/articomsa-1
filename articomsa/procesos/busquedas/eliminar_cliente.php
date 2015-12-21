	
<!DOCTYPE html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
	<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css"/>
	<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
	
<title>Eliminar Cliente</title>
</head>
<body>

<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1> Eliminar Cliente </h1>
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
			
		$actualizar = "DELETE FROM cliente WHERE id_cliente='$_POST[id_cliente]'" ;
			mysqli_query($con, $actualizar); 
			header ('location: ../../vistas/vistas/cliente_eliminado.php');
			
			
		};
		

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
		echo "<form action=eliminar_cliente.php method=post name=buscar_cliente>";
		echo"<tr>";
		echo"<td>"."<input type=text  name= nombre disabled value='".$data['nombre']."' </td>";
		echo"<td>"."<input type=text name= direccion disabled value='".$data['direccion']."' </td>";
		echo"<td>"."<input type=text name= nit disabled value=".$data['nit']." </td>";
		echo"<td>"."<input type=text name= contacto disabled value='".$data['contacto']."' </td>";
		echo"<td>"."<input type=text name= telefono disabled value='".$data['telefono']."' </td>";
		echo"<td>"."<input type=hidden name= id_cliente value=".$data['id_cliente']." </td>";
		echo"<td>"."<input type=submit name='actualizar' value=Eliminar"." </td>";
		echo"</tr>";
		echo "</form>";
		
		
	}
	echo "</table>"; 
	
	
mysqli_close($con);

	
?>
<br>
<br>
<div id="boton" class="center-buttons buttons-margin">
		<a href = "../../vistas/menus/menu_cliente.php">
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
