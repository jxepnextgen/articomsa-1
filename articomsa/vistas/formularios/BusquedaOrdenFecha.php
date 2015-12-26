<?php 
 include_once ("../../procesos/conexion/ConexionBaseDatos.php");  ?> 
<!DOCTYPE html>
<html>
<head>    
<meta charset="UTF-8"> 
<title>Busqueda De Orden Por Fecha</title> 
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>   
<script src="../../js/BuscarOrdenesFecha.js">   </script>   <!-- Esto esta requerido que este dentro debajo del jquery -->
</head>
<body> 
<br /> 
<br /> 
<h1>Ingresar rango de fecha </h1>
<input type ="date" id="Fecha1" >   <input type="date" id="Fecha2"> 
 <br /> <br /><input type="submit" value="Buscar" id="BuscarFechas"> 
<style>
table{
    border: 1px solid black;
    table-layout: fixed;
    width: 200px;
}

th, td {
    border: 1px solid black;
    overflow: hidden;
    width: 100px;
}
</style>
                 <table id="tabla" border="2" > 
                 <tr>
				 <th>Numero de orden </th>
                  <th>Fecha</th>
                   <th>Descripcion</th>
                 	<th>usuario</th> 
                 	<th>nombre</th> 
                 	<th>Total de la Orden</th>  
                 	</tr>
                </table>   
                 <table id="tabla2" border="2" > 
                 
                </table>   
</body>
</html>