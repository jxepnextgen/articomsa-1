<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generar Orden</title>
<!-- Inclusion de JQUERY API librerioa-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
 
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
													//alert ("hasta aca vamos bien"); 
													var arreglo = data;	 
														//	console.log (arreglo); 
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
																								
																						tabla += " <td><input type=checkbox name=seleccion ></td> </tr>";
																					 }																				
																					 $('#tabla').append(tabla);
																							
																				

																		}	 
											
																	 
								})
				       }
		)
    	
	}); 
	
	
 </script> 
 <script>  	

 $(document).ready(function() {
 $('#producto-tabla').click(function (e){  
    e.preventDefault();
   e.stopPropagation();
  var resultArray = [];
   $('#tabla  input[type=checkbox]:checked ').each(function (e) {
     //$("#tabla tr").each(function(){  
     $(this).parents("tr").each(function(){  
       var innerArray = [];
      console.log($(this).text()); 
      //innerArray.push($(this).text())
      $(this).find('td').each(function () {
       console.log('td');
       innerArray.push($(this).text()); 
      });
     resultArray.push(innerArray);
       });
   
   
    });
//ingresando datos a la consola solo para ver que putas 
     
   console.log(resultArray); 



   /*	for (i=0; i<resultArray.lenght ;i++) {
   	$('#tabla2').append ('<tr>'); 
   		for (j=0;j< resultArray[i].lenght;j++) 
   		{	$('#tabla2').append('<td>'+ resultArray[i][j]+ '<td>')}  

   			 $('#tabla2').append ('</tr>'); }*/
   			for (x=0;x<resultArray.lenght ;x++ )  

   			{  
   				$('#tabla2').append ('<tr>' );
   					for(y=0;resultArray[x].lenght;y++) 
   						{  
   							$('#tabla2').append ('<td>'+'prueba'  + '</td>')

   						} 
   						$('#tabla2').append ('</tr>'); 

   			}			
  	 
 
      });    
  
 // });


});
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
                <br/>
    			<br /> 
                 <table id="tabla2" border="2"> 
                </table> 
    </body>
    </html>