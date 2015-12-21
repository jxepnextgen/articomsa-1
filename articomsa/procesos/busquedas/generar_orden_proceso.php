<?php 
include ("conector.php");
	$con=mysqli_connect($host, $usuario, $contrasena)
		or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

	// Seleccionando Base de Datos.
	mysqli_select_db($con, $nombre_bd)
		or die("Error".mysqli_error($con));




if(isset($_POST['buscar_producto'])){
			$buscar_producto = $_POST['producto']."%";
			echo $buscar_producto;
			echo "<br>";
			echo "Se ha buscado por buscar_producto";
		};

		if(isset($_POST['buscar_marca'])){
			$buscar_marca = $_POST['marca']."%";
			echo $buscar_marca;
			echo "<br>";
			echo "Se ha buscado por marca";
			
		};
?>