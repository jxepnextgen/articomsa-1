	<?php  
	date_default_timezone_set('America/Guatemala'); 

	?> 
	<!doctype html> 
	<html lang="en">  
	<head> 
	<meta charset="utf-8">
	<title>testEncabezadoOrden</title> 
	 <meta name="description" content="Prueba Encabezado Orden">
	 <meta name="author" content=""> 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
	   <script src="http://localhost/articomsa/TestProgramming/testEncabezadoOrden/JavaScript1.js"></script> 
	</head> 
	<body>   
	<!-- estos son los ID que vamos a grabar --> 
<id>
	<input type="text" placeholder="nombre del cliente " id="id-cliente" hidden>  <br /> 
	Ruta: <select name='ruta 'id='ruta'>
	
	<?php
	//llenando option 
	$ConexionData=new mysqli ("localhost","root","","articomsa");
		 if($ConexionData->connect_error){
			 die ("conexion fallida".$ConexionData->connect_error);
		 }   
		 $Busqueda= "SELECT * FROM ruta "; 
		 $Comando=mysqli_query($ConexionData,$Busqueda); 
		 while ($resultado= mysqli_fetch_array($Comando)){
			 echo '<option   value=\"'.$resultado['id_ruta'].'">'.$resultado['descripcion'].'</option>';
		 }  ;
		 echo "</select>"; 
		 $ConexionData->close(); 
		 
		 //finalizado el llenado
	?>
	
	<br />  
    usuario: <select name="usario" id="usuario"> 
    <?php
    //llenando option 
	$ConexionData=new mysqli ("localhost","root","","articomsa");
		 if($ConexionData->connect_error){
			 die ("conexion fallida".$ConexionData->connect_error);
		 }   
		 $Busqueda= "SELECT * FROM usuario	 "; 
		 $Comando=mysqli_query($ConexionData,$Busqueda); 
		 while ($resultado= mysqli_fetch_array($Comando)){
			 echo '<option   value=\"'.$resultado['id_usuario'].'">'.$resultado['user'].'</option>';
		 }  ;
		 echo "</select>"; 
		 $ConexionData->close(); 
		 
		 //finalizado el llenado
	?> 
    </br>
	Nombre del cliente :<input type="text" placeholder="nombre del cliente " id="nombre-cliente">  <br />
	Direccion :<input type="text" placeholder="Direccion "  disabled  id="direccion">  <br />
	nit :<input type="text" placeholder="nit " disabled   id="nit"> <br />
	Contacto :<input type="text" placeholder="Contacto  "  disabled id="contacto" > <br />
	Telefono:<input type="text" placeholder="Telefono "  disabled   id="telefono"> <br />  
	Fecha y hora: <input type='text' id="fecha" value=<?php echo date("Y-m-d") ;?> disabled > <input type="text" id='hora-vista' value= <?php echo date ("h:ia")?> disabled>	 
    <input type="text" value=<?php echo date ("h:i:s")?> id="hora" hidden	>
	<br />  
	<br/ >
	</body>	