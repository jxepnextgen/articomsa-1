<?php
	header('Content-Type: text/html; charset=utf-8');

	// Incluyendo la informacion para conectar con Servidor.
	include ("../conexion/conector.php"); 
	
	

	if(isset($_POST['nproducto'])){

		header("location: ../../vistas/formularios/registrar_producto.php");
	}	

	if(isset($_POST['nmarca'])){
		header("location: ../../vistas/formularios/registrar_marca.php");

	}
		if(isset($_POST['npresentacion'])){
		header("location: ../../vistas/formularios/registrar_presentacion.php");

	}

	
	
	// Comprobando que los campos obligatorios esten llenos.
	if (isset($_POST['crear'])){


	$producto = $_POST['producto'];
	$presentacion = $_POST['presentacion'];
	$precio = $_POST['precio'];
	$marca = $_POST['marca'];  
	echo ('<br>');
	 echo $producto;
echo ('<br>');
	 echo $presentacion;
	 echo ('<br>');
	 echo $precio; 
	 echo ('<br>');
	 echo $marca;
	 echo ('<br>');
	
$sql_producto = "INSERT INTO presentacion_precio (producto_id_producto, presentacion_idpresentacion ,precio, marca_id_marca) VALUES ($producto ,$presentacion , $precio ,$marca);";

$sql = $sql_producto;

	echo "el valor es: ".$producto;
		// Creando variable de conexion con Servidor.
		$con=mysqli_connect($host, $usuario, $contrasena)
			or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

		// Seleccionando Base de Datos.
		mysqli_select_db($con, $nombre_bd)
			or die("Error".mysqli_error($con));

		// Ingresando datos de formulario a tabla en Base de Datos.	
		mysqli_query($con, $sql)
			or die (mysqli_error($con));

		header('location: ../../vistas/vistas/producto_registrado_2.php');

		mysqli_close($con);

	}


?>