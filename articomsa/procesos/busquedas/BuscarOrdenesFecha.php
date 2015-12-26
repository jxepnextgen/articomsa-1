<?php   
include ("../conexion/ConexionBaseDatos.php");
 if  (isset ($_POST['Fecha1']) && isset  ($_POST['Fecha2']) && ($_POST['Fecha1']!=null ) && ($_POST['Fecha2'] !=null) ) /*verficacion funciona hasta aca*/
{ 
	$Fecha1=($_POST['Fecha1']);
	$Fecha2=($_POST['Fecha2']);
 /*aca es cuando la data esta integra y en orden podemos iniciar las busquedas con sql */
/*la linea de abajo es de prueba para ver que retornaba en la pagina que usamos ajax */
//	$respuesta= "la data es intrega y a llegado hasta aca";
/*verificamos que la conexion funcione aca */		if ($Conexion->connect_error){
									/* si no funcionara*/				die ("Error de conexion " .$Conexion->connect_error ) ;
														}	
								/*si si funcionara*/	else {

									$sql="SELECT orden.id_orden, orden.fecha, ruta.descripcion,usuario.user,cliente.nombre, orden.total
											from orden  join ruta on orden.ruta_id_ruta= ruta.id_ruta join 
											usuario on usuario.id_usuario= orden.usuario_id_usuario join
											cliente on cliente.id_cliente = orden.cliente_id_cliente
											where fecha between '$Fecha1' and '$Fecha2'
											" ; 

											$resultado= mysqli_query  ($Conexion,$sql);  
											$filas= mysqli_num_rows($resultado); 
												if( $filas >0){
													while ($Datos = mysqli_fetch_array($resultado,MYSQLI_NUM)){

														$DataSetArreglo[] = $Datos; 
												} 
													echo json_encode($DataSetArreglo); 
												}else{
													die ("Hubo un error " . $Conexion->connect_error);
												} 





					} 	





}else {		
		$respuesta = "Los datos no son integros, algo paso , contacte al administrador del programa ";
		echo ($respuesta);	
}
?>