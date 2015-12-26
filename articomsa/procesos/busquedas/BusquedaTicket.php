<?php  
if  (isset ($_POST ['orden'])) {
	$orden = $_POST['orden'];
	
	$conexion= new mysqli("localhost","root","","articomsa"); 
		if($conexion->connect_error){
			die ("conexion fue fallida". $conexion->connect_error);
		} 
		$stringBusqueda="
		select producto.id_producto, producto.descripcion, marca.descripcion, presentacion.descripcion , presentacion_precio.precio ,
ticket.cantidad, ticket.total

from ticket join presentacion_precio on ticket.idpresentacion_precio= presentacion_precio.idpresentacion_precio join  producto on
presentacion_precio.producto_id_producto = producto.id_producto join marca on presentacion_precio.marca_id_marca = marca.id_marca join
presentacion on presentacion_precio.presentacion_idpresentacion = presentacion.idpresentacion where
 
 ticket.orden_id_orden= $orden	"; 
					$comandoSql= mysqli_query($conexion,$stringBusqueda);
						#$resultado=mysqli_fetch_array($comandoSql);   
						while($resultado = mysqli_fetch_array($comandoSql,MYSQLI_NUM)) {
								$arreglo[] = $resultado;
													}
						$conexion->close();
						echo	json_encode($arreglo);
					 	
					
} 
else {echo json_encode ("error");}
	?>