<?php require ("../procesos/procesos_generales/conector.php") ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 

<script type="text/javascript" src="../jQuery/jquery-2.1.4.js"></script> 
 
 <!-- Este script esta hecho para agregar las columnas a la tabla de la pagina -->
	<script>   
	 $(document).ready(function() {  
			var contador=0;
				$("#Agregar").click(function() {  
				 contador++; 
$("#descripcionOrden").append ('<tr> <td>' + contador+ ' </td>   <td> Agrego Otra Columna</td> <td> Agrego 							                           Otra Columna mas</td></tr>');})
             });
	</script>
 



 <Script > 

$(document).ready(function() {  $("#Bpasar").click(function() {  
				 var resultArray = [];
				 $("#descripcionOrden tr").each(function(){
					var innerArray = [];
 					$(this).find('td').each(function () {innerArray.push($(this).text()); });
    					resultArray.push(innerArray);
						});
//ingresando datos a la consola solo para ver que putas 
							console.log(resultArray); 
	
								var arreglo=JSON.stringify(resultArray); 
//esta es la prueba de ajax, eta funcionando  
								
$.ajax({
			type:"POST"	,
				url:"Verification.php", 
					data:{ Arreglo: arreglo}, 
						cache:false ,
							success: function(data){ 
								alert ("ok");
									$('#test').html(data);
							}
	});
		/*
					$.post ('Verification.php',{ArregloParaPHP:resultArray}, 
							function (data) 
							{ 
							$('#test').html(data);}) */
						})
				});  
				
 </script> 
 
 
 
 

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TestDocument</title>
</head>
  <button type="button" id="Agregar">Agregar a Tabla </button>
 <br /> 
 <br  />
     <table name="descripcionOrden"  id="descripcionOrden" border=1  > 
    <tr> 
    	<td> Campo 1  </td>
 		<td> Campo 2</td> 
        <td> Campo 3</td>          
    </tr>
    </table> 
    <br /> 
    <br /> 
     <button type="button"  id="Bpasar">Pasar arreglo</button> 
     <br/> 
     <p id="test"></p>
<body>
</body>
</html>