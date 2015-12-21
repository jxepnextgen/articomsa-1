<?php
if (isset($_GET['producto'])) 
{  
$producto = json_decode(stripslashes($_GET['producto'])) .'%';  

	$conexion= new mysqli("localhost","root","","articomsa"); 
		if($conexion->connect_error){
			die ("conexion fue fallida". $conexion->connect_error);
		}else
			{	
			#echo "conectado a la abse de datos"; 	
			} 	
				$stringBusqueda="SELECT producto.descripcion , marca.descripcion , presentacion.descripcion , presentacion_precio.precio FROM producto join presentacion_precio on producto.id_producto = presentacion_precio.producto_id_producto join presentacion on presentacion.idpresentacion= presentacion_precio.presentacion_idpresentacion join marca on presentacion_precio.marca_id_marca = marca.id_marca where producto.descripcion like '$producto'"; 
					$comandoSql= mysqli_query($conexion,$stringBusqueda);
						#$resultado=mysqli_fetch_array($comandoSql);   
						while($resultado = mysqli_fetch_array($comandoSql,MYSQLI_NUM)) {
								$arreglo[] = $resultado;
													}
						
						echo	json_encode($arreglo);
					$conexion->close(); 
					
}else
{
	echo "error"; 
	$conexion->close(); 
	}
?>