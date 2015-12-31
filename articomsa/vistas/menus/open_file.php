<?php

//Incluimos los datos para conexion a base de datos
include ("../../procesos/conexion/conector.php");
//Creando conexion	
	$con=mysqli_connect($host, $usuario, $contrasena)
		or die ("no se pudo conectar a la base de datos. Error: ".mysqli_error($con));

	//Seleccionando Base de Datos
		mysqli_select_db($con, $nombre_bd)
		or die("Error".mysqli_error($con));
		


$sql = mysqli_query($con, "SELECT nombre, direccion, nit, contacto, telefono FROM cliente");
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


}else{

	echo "No hay registros";
}
	
mysqli_close($con);

?>