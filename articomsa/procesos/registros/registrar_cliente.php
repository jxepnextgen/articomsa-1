<?php

session_start();// Inicio de sesion 

// Incluyendo la informacion para conectar con Servidor.
include ("../conexion/conector.php");
	
$nombre = $_POST['cliente_nombre'];
$contacto = $_POST['cliente_contacto'];
$telefono = $_POST['cliente_telefono'];
$nit = $_POST['cliente_nit'];
$direccion = $_POST['cliente_direccion'];


// Comprobando que los campos obligatorios esten llenos.
if (isset($nombre) && !empty($nombre) && isset($telefono) && 
!empty($telefono) && isset($direccion) && !empty($direccion)){

	// Creando variable de conexion con Servidor.
	$con= new mysqli($host, $usuario, $contrasena, $nombre_bd);

	//checkeando conexion 
	if (mysqli_connect_error()){ 

		echo "connection failed : " . mysqli_connect_error() ; 
	
}

	$statement = $con->prepare("INSERT INTO cliente (nombre, telefono, direccion, nit, contacto) VALUES(?,?,?,?,?)");
	$statement->bind_param("sssis", $nombre, $telefono, $direccion, $nit, $contacto);
	$statement->execute();
	$statement->close();
	
header('Location: ../../vistas/vistas/cliente_registrado.php');

mysqli_close($con);

}else{
	echo "Por favor complete todos los datos que tienen asterisco (*)";
}

?>