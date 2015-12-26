<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="../../../css/normalize.css" />
<link type="text/css" rel="stylesheet" href="../../../css/stylesheet.css" />
<link type="text/css" rel="stylesheet" href="../../../css/forms.css" />
<link type="text/css" rel="stylesheet" href="../../..//css/title_pages.css" />
<title>Generar Orden</title>
<!-- Inclusion de JQUERY API -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script>  <!-- FUNCION PARA LLENAR TABLA DE LA BUSQUEDA DE PRODUCTO -->
$(document).ready(function() {	 
	document.getElementById('totalorden').value=''; 
	document.getElementById('producto').value=''; 
	        $('#producto-submit').click(function (){ 
				$('#tabla tr').remove();
				$('#tabla td').remove();
			var productoTexto= JSON.stringify($("#producto").val());
			$.ajax({	
					type:"get", 
					url:"../../procesos/busquedas/bproductoOrden.php",
					data:{producto:productoTexto},
					dataType:"json",
					cache: false,	
					success: function(data){
						var arreglo = data;	 
						var tabla = "";
						for (i=0; i <arreglo.length ; i++){  
								 tabla += "<tr>";
								for (j=0; j<arreglo[i].length; j++){ 
										tabla += '<td>'+arreglo[i][j]+ '</td>'  ;
																				}
						tabla += " <td><input type=number  placeholder=cantdad min=1 max=20></td><td><input type=checkbox name=seleccion id=checke></td> </tr>";}																				
						$('#tabla').append(tabla);}	 }) }) }); 
	
	
 </script>   

 <script>  <!-- ESTO ES PARA SUMAR EL TOTAL-->
function sumCells(){
	var elementos = document.getElementById('tabla2').getElementsByTagName('tr');
    var totalsuma=0;
	 for (a=1;a<elementos.length; a++) {
		totales=parseFloat(elementos[a].cells[6].innerHTML);  
			totalsuma +=totales; }   
 console.log(a);
document.getElementById('totalorden').value=totalsuma;
console.log(totalsuma);
} 
</script> 
<!-- Esto es para agregar los datos a la tabla-->
 <script>  	

 $(document).ready(function() {
 $('#producto-tabla').click(function (e){  
    e.preventDefault();
   e.stopPropagation();
  var resultArray = []; 
  var tabla2 = ''; 
   $('#tabla  input[type=checkbox]:checked ').each(function (e) {
     
     $(this).parents("tr").each(function(){  
       var innerArray = [];
      console.log($(this).text()); 
      $(this).find('td').each(function () {
       console.log('td');
       innerArray.push($(this).text()); 
       $(this).find('input[type=number]').each(function(){console.log($(this).val()); innerArray.push($(this).val()) });		 
		

      }); 
      innerArray=$.grep(innerArray,function(n){return n}); 
	
     resultArray.push(innerArray );
       });
   }); 
for (x=0;x<resultArray.length ;x++ )  
   				
   			{    
   			tabla2 += '<tr>' ;
   					for(y=0; y<resultArray[x].length ;y++) 
   					{ 


   							
   					 tabla2 += '<td>'+resultArray [x][y]+ '</td>';	



   			}  
   			var precio = parseFloat(resultArray[x][4]);
   							var cantidad = parseFloat(resultArray[x][5]);
   							var cantidad = parseFloat(resultArray[x][5]);
   							var total = precio * cantidad;

 
   			tabla2 +=  '<td>'+total+ '</td>'+"<td><input type=button value=eliminar onclick=deleteRow(this)></td> </tr>"  ; 

   			}	 


   				$('#tabla2').append(tabla2); 	
   


sumCells (); 

 
      });     
  



});
 </script>  
 

 <!-- Esto es para borrar las lineas  -->
<script> 
function deleteRow(r){ 
var i=r.parentNode.parentNode.rowIndex;
	document.getElementById("tabla2").deleteRow(i); 
	sumCells (); 
}


</script> 
  
  <!-- Esta es la generacion de orden -->
 <script> 
 $(document).ready(function(){
	 
	 $('#generar_orden').click(function(){  
	// aca desactivamos el submitt 


	// esto es la generacion de variables para postear en JSON
	 var arregloExterno= []; 
	 
	  $('#tabla2 tr').each(function (){ 
	  var arregloInterno= [];  
		$(this).find('td').each(function () {
			arregloInterno.push($(this).text());
		});  
		  arregloInterno=$.grep(arregloInterno,function(n){return n}); 

	  arregloExterno.push(arregloInterno);
	  });   arregloExterno.splice(0,1);
	 
		
		var ruta=  document.getElementById('ruta').value;  
		var usuario= document.getElementById('usuario').value;
		var IdCliente= document.getElementById('id-cliente').value;
		var Fecha=document.getElementById('fecha').value; 
		var hora=document.getElementById('hora').value;   
    var totalorden=document.getElementById('totalorden').value;  
		var  tiempo= Fecha + " " +hora;  

// esto es la generacion de variables para postear en JSON

$.post('../../procesos/registros/grabarOrden.php',
{fecha:tiempo , ruta_id_ruta:ruta , usuario_id_usuario:usuario, cliente_id_cliente:IdCliente, tablaProducto:arregloExterno, total:totalorden},
function(data){    
console.log (data); 
 document.getElementById('NumeroOrden').value =data ;   
 

 $('#GeneracionVista').submit(); 
 
 
 
});	


	 });
	 
	 
 });
</script>




    </head> 
    <body>  
	
      <header class="titulo">
      <div class="fondo-gris"></div>
		
      <div class="contenedor-titulo bottom-margin-title ovalo-flotante">
        <div class="contenido-titulo">
          <h1>Generar Orden</h1>
        </div>
      </div>
    </header>

    <div class="form-container">
     <h3>Busque el producto</h3> 
	 <?php include ("../vistas/EncabezadoOrden.php")?>
     <input type="text" id="producto" placeholder="Que producto desea?"> </input>
        <input type="submit"  id="producto-submit" value="Buscar">
        	<br /><br /> 
            	<p id="TextoRetorno"></p>  
                <table id="tabla" border="1"> 
                </table> 
                <br/>
				<br/>
                <input type="submit" id="producto-tabla" value="Agregar a tabla"	> 
                <br/>
    			<br /> 
                 <table id="tabla2" border="2" > 
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
                <br/> 
                <br/> 
	Total Orden en quetzales  :	<input type='text' placeholder="Total" id="totalorden" disabled> 
               <br/><br/>
               <!-- Antes aca estaba el input submit -->
               
				<br />  
				<form name="GeneracionVista" method="POST" action="../vistas/VistaOrden.php" id="GeneracionVista">
					<input type="text" name="NumeroOrden" id="NumeroOrden" > 
					 </form> 
        <input type="submit" value="Generar Orden" id="generar_orden">
</div>
<div id="boton" class="center-buttons buttons-margin">
      <a href = "../menus/menu_orden_1.php">
      <h3>Regresar</h3>
      </a>
    </div>
    </body>	
    </html>