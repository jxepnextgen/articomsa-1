<?php

// Incluyendo la informacion para conectar con Servidor.
include ("../conexion/conector.php");


$p_nombre = $_POST['p_nombre'];


// Comprobando que los campos obligatorios esten llenos.
if (isset($p_nombre) && !empty($p_nombre)){

// Creando variable de conexion con Servidor.
$con=mysqli_connect($host, $usuario, $contrasena)
or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

// Seleccionando Base de Datos.
mysqli_select_db($con, $nombre_bd)
	or die("Error".mysqli_error($con));

// Ingresando datos de formulario a tabla en Base de Datos.	
mysqli_query($con, "INSERT INTO presentacion (descripcion, cantidad) 
VALUES ('$p_nombre','$p_cantidad')")
or die ("no se pudo".mysqli_error($con));

mysqli_close($con);

header("location:../../vistas/vistas/presentacion_registrada.php");

}else{
	echo "Por favor complete todos los datos que tienen asterisco (*)";
}

?>