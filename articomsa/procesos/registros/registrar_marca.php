<?php

header('Content-Type: text/html; charset=utf-8');

// Incluyendo la informacion para conectar con Servidor.
include ("../conexion/conector.php");

$marca_nombre = $_POST['marca_nombre'];

// Comprobando que los campos obligatorios esten llenos.
if (isset($marca_nombre) && !empty($marca_nombre)){



// Creando variable de conexion con Servidor.
$con=mysqli_connect($host, $usuario, $contrasena)
or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

// Seleccionando Base de Datos.
mysqli_select_db($con, $nombre_bd)
	or die("Error".mysqli_error($con));

// Ingresando datos de formulario a tabla en Base de Datos.	
mysqli_query($con, "INSERT INTO marca (descripcion) VALUES ('$marca_nombre')") ;

header('location: ../../vistas/vistas/marca_registrada.php');

mysqli_close($con);

}else{
	echo "Por favor complete todos los datos que tienen asterisco (*)";
}

?>