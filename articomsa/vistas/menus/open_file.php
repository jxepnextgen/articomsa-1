<?php

//Incluimos los datos para conexion a base de datos
include ("../../procesos/conexion/conector.php");
	
//Creando conexion	
	$con=mysqli_connect($host, $usuario, $contrasena)
		or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

	//Seleccionando Base de Datos
		mysqli_select_db($con, $nombre_bd)
		or die("Error".mysqli_error($con));
		/*
orden.fecha, presentacion_precio.idpresentacion_precio, producto.id_producto,producto.descripcion,marca.id_marca,marca.descripcion,
presentacion.idpresentacion, presentacion.descripcion, presentacion_precio.precio 
*/
$sql = mysqli_query($con, "select * from ticket join presentacion_precio on
 ticket.idpresentacion_precio= presentacion_precio.idpresentacion_precio join producto on producto.id_producto= presentacion_precio.producto_id_producto 
 join marca on marca.id_marca= presentacion_precio.marca_id_marca join presentacion on presentacion.idpresentacion = presentacion_precio.presentacion_idpresentacion 
join orden on orden.id_orden = ticket.orden_id_orden
 where  orden.fecha >= '2015-11-04' and  orden.fecha <='2015-11-12'  order by id_producto ");
$num_rows = mysqli_num_rows($sql);


if ($num_rows >= 1){
	
	$row = mysqli_fetch_assoc($sql);
	$archivo = fopen("prueba.csv", "w");

	$separador = "";
	$coma = "";

	foreach($row as $nombre => $valor){

		$separador .= $coma.''.str_replace('', '""', $nombre);
		$coma = ",";
	}

	$separador .= "\n";

    fputs($archivo, $separador);

    mysqli_data_seek($sql, 0);

	while ($row = mysqli_fetch_assoc($sql)){
	$separador = "";
	$coma = "";

	foreach($row as $nombre => $valor){

		$separador .= $coma.''.str_replace('', '""', $valor);
		$coma = ",";
	}

	$separador .= "\n";
    fputs($archivo, $separador);
}

		fclose($archivo); 
}

?>