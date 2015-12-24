<?php 
 if (isset ($_GET['NumeroOrden'])){  
 	
 
 $NumeroOrden = $_GET ['NumeroOrden']; 
//Bloque de busqueda del encabezado de la orden 
$conexion= new mysqli ("localhost","root","", "articomsa") ;
	//---checking the conection --- 
	if ($conexion->connect_error){
		die ("conexion a base de datos fallo " . $conexion->connect_error);
	} 
	// IMPORTANTE , SOLO FUNCIONA EN CHROME
$sql= " SELECT ruta.descripcion ,usuario.user, Cliente.nombre, Cliente.direccion , Cliente.nit, Cliente.contacto,Cliente.telefono, Orden.fecha , Orden.total
FROM 	orden join ruta on ruta_id_ruta=ruta.id_ruta join usuario on orden.usuario_id_usuario = usuario.id_usuario join cliente on orden.cliente_id_cliente=cliente.id_cliente  where orden.id_orden=$NumeroOrden"; 
 $result = $conexion->query ($sql);  
  if ($result->num_rows > 0){ 
  while ($row = $result-> fetch_assoc ()){
 ?>  

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Vista De impresion</title> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script src="../../js/LoadTable.js"></script> 
</head>

<body>
</br>
	Orden : <input type='text' id='orden' value= <?php echo $NumeroOrden?> disabled >
	Ruta :  <input type="text"  id="usuario" value='  <?php echo $row ['descripcion'] ?> ' disabled>  <br /> 
	Usuario que ingreso orden: <input type="text"  id="usuario" value='  <?php echo $row ['user'] ?> ' disabled>  <br /> 
	Nombre del cliente : <input type="text"  id="nombre-cliente" value='  <?php echo $row ['nombre'] ?> ' disabled>  <br /> 
	Direccion          :         <input type="text"  disabled  id="direccion" value=<?php echo $row ['direccion'] ?> >  <br />
	nit                :          <input type="text"  disabled   id="nit" value=<?php echo $row ['nit'] ?> > <br />
	Contacto           :          <input type="text"  disabled id="contacto" value=<?php echo $row ['contacto'] ?> > <br />
	Telefono           :           <input type="text"   disabled   id="telefono" value=<?php echo $row ['telefono'] ?> > <br />  
	Fecha y hora       :           <input type='text' id="fecha"  disabled value='<?php echo $row ['fecha'] ?>' >	 
   
	<br />
Detalle  
  
                 <table id="VistaTablaOrden" border="2" > 
                 <tr>
				 <th>Codigo de producto </th>
                  <th>Descripción</th>
                   <th>Marca</th>
                 	<th>Presentación</th> 
                 	<th>Precio</th> 
                 	<th>Cantidad</th>  
                 	<th>Total</th> 
                 </tr>
                </table>    
                </body>  
                Total de orden : <input type='text' id="fecha"  disabled value='<?php echo $row ['total'] ?>' >

                </br>
                <input  type="button" value="Imprimir" onclick="window.print()">
</body>

</html>

<?php

}
	
 $conexion->close ();  
 } 

 }else {
	 echo "Algo esta roto, algo esta mal  ";
 }
?>