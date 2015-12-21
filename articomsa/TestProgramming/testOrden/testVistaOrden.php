<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generar Orden</title>
<!-- Inclusion de JQUERY API librerioa-->
<script type="text/javascript" src="../../jQuery/jquery-2.1.4.js"></script> 
 
 <script> 
	$(document).ready(function() {	
        $('#producto-submit').click(
			
			function (){ 
		$('#tabla tr').remove();
			$('#tabla td').remove();
				var productoTexto= JSON.stringify($("#producto").val());
						$.ajax({	
								type:"get", 
									url:"bproductoOrden.php",
									 data:{producto:productoTexto},
										dataType:"json",
											cache: false,	
												success: function(data){
																		alert ("hasta aca vamos bien"); 
													var arreglo = data;	 
															console.log (arreglo); 
															var tabla = "";
																					 
																					 for (i=0; i <arreglo.length ; i++)	 
																					 {  
																					 tabla += "<tr>";
																//$("#tabla").add('<tr> ' + arreglo [i] +'</tr> '); 
																                          
																						
																				for (j=0; j<arreglo[i].length; j++) 
																						{ 
									tabla += '<td>'+arreglo[i][j]+ '</td>'  ;
													//$("#tabla").find('tr').append('<td> ' + arreglo[i][j] + '</td> ');  
																		
																							}
																								
																						tabla += " <td><input type=checkbox name=seleccion ud=seleccion	></td> </tr>";
																					 }																				
																					 $('#tabla').append(tabla);
																							
																				

																		}	 
											
																	 
								})
				       }
		)
    	
	}); 
	
	
 </script> 
 <script>  
  $('#producto-tabla').click( 
  		function(){
				alert ('funciona');
  }
) 

 </script>
    </head> 
    <body> 
     Bienvenido esto es generar una orden <br/><br/>
     <input type="text" id="producto" placeholder="que  producto desea?"> </input>
        <input type="submit"  id="producto-submit" value="Inciar busqueda">
        	<br /><br /> 
            	<p id="TextoRetorno"></p>  
                <table id="tabla" border="1"> 
                </table> 
                <br/>
				<br/>
                <input type="submit" id="producto-tabla" value="Agregar a tabla"	>
    </body>
    </html>