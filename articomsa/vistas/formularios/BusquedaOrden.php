

<!DOCTYPE html>
<html>
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
<script src="LoadTable.js"></script> 
<title>Page Title</title>
</head> 
<body>
</br>
	<form id='BusquedaOrden' action='' method='POST'>    
		Numero de orden: <input type="text" id='Orden' name="Orden"><br> 
		<input type="submit" value="submit">
	</form> 
 <!--snippet html-->
<?php   
// verificando que si entren las variables y que no sean nulas
	if (isset($_POST['Orden']) && ($_POST['Orden'] != null ))
	{
		// creando una conexion con la base de datos 
			$ConexionBusquedaOrden = new mysqli("localhost","root","","articomsa"); 
			// verificando conexion a la base de datos
			if ($ConexionBusquedaOrden->connect_error) {echo "Hubo un error de conexion con la BD :". $ConexionBusquedaOrden->connect_error;}else{
			$Orden= $_POST['Orden'];	
			$sql= " SELECT ruta.descripcion ,usuario.user, Cliente.nombre, Cliente.direccion , Cliente.nit, Cliente.contacto,Cliente.telefono, Orden.fecha , Orden.total
					FROM 	orden join ruta on ruta_id_ruta=ruta.id_ruta join usuario on orden.usuario_id_usuario = usuario.id_usuario join cliente on 
					orden.cliente_id_cliente=cliente.id_cliente  where orden.id_orden=$Orden"; 	
			$BusuqedaResult= $ConexionBusquedaOrden->query($sql);
				if ($BusuqedaResult->num_rows > 0)	{ 
					 while ($row = $BusuqedaResult-> fetch_assoc ()){

?> 

rden : <input type='text' id='orden' value= <?php echo $Orden?> disabled >
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



<?php

// end del while
}	
// end del if de los rows
} else { echo "El Ticket no existe, Ingrese otro";}

	
// end del if de la conexion	
	} 

}else 
	{
echo "Ingrese el valor que busca";
 ?>

 



<?php 
}
?>
</body>
</html> 
<script>
</script>