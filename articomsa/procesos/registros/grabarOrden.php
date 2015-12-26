<?php  
if (isset ($_POST['fecha']) &&  isset ($_POST['ruta_id_ruta']) &&  isset ($_POST['usuario_id_usuario'])
	&&  isset ($_POST['cliente_id_cliente']) && isset ($_POST['tablaProducto'])){  


$fecha = stripslashes($_POST['fecha']); 
$ruta_id_ruta = stripslashes($_POST['ruta_id_ruta']); 
$usuario_id_usuario = stripslashes($_POST['usuario_id_usuario']); 
$cliente_id_cliente = stripslashes($_POST['cliente_id_cliente']);   
$total = stripslashes($_POST['total']);
$arreglo = $_POST['tablaProducto'];   


$conexion= new mysqli("localhost","root","","articomsa");    
 
if ($conexion->connect_error) {
    echo($conexion->connect_error);
} else {
	$Insertar=" insert into orden (fecha, ruta_id_ruta,usuario_id_usuario,cliente_id_cliente,total) values ('$fecha',$ruta_id_ruta,$usuario_id_usuario,$cliente_id_cliente, $total) "; 
	
		if ($conexion->query($Insertar) === TRUE){  
	$OrdenID= $conexion->insert_id;  
	$conn2= new mysqli("localhost","root","","articomsa");   
 
 
 $sql= array ();
foreach($arreglo as $value) {
	 
		  $sql[] = '('.$OrdenID.', '.$value[0].', '.$value[5].', '.$value[6].')';
		 
	 
	
}

if ($conn2->query("INSERT INTO ticket (orden_id_orden,idpresentacion_precio,cantidad,total) VALUES". implode (',',$sql)) === TRUE){
	echo $OrdenID;
	$conn2-> close();
$conexion->close();

}else { echo $conn2->error;;
$conn2-> close();
$conexion->close();

}
 

	
 

	}else {echo $conexion->connect_error; }
	} 
	}	


else
	
	
	{ $texto="NO"; echo ($texto) ;}
?>