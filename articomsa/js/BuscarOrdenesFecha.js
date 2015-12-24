$(document).ready (function (){	 
		$("#BuscarFechas").click(function(){   
		
		$('#tabla2 tr').remove();
				$('#tabla2 td').remove();

		//Pasando los valores a variables
			//var Fecha1 =document.getElementById('Fecha1').value; 
	//var Fecha2= document.getElementById('Fecha2').value; 
			var Fecha1= $('#Fecha1').val();
			var Fecha2= $('#Fecha2').val();
			// ESTO ES TEMPORAL , SOLO ES PARA PROBAR COMO ES QUE IMPRIME LOS VALORES EL TEXT BOX
			console.log(Fecha1);
			console.log(Fecha2);
			//Condicion para verificar que los valores no vengan vacios  
			if (Fecha1 == ""  || Fecha2 == ""){
				alert("Ingrese correctamente los datos ");
			}else{
					// verificar que los valores vengan en orden  
					if (Fecha1 < Fecha2){
						// esta line de codigo es tempora solo es para verificar si la validacion sucede bien 
					//console.log("No puede seleccionar las fechas sin orden alguno , seleccione la mas baja primero y luego la mas alta");
						// aca pasamos estos dos valores por medio de un post the ajax a la pagina de busqueda   
						$.post("../../procesos/busquedas/BuscarOrdenesFecha.php",/* Este es el target , donde regresaremos el set de datos*/
							{Fecha1:Fecha1, Fecha2:Fecha2},  /* Estas son las varaibles que vamos a pasar, le asignamos el valor de las variables que asginamos */
							/*Aca es cuando resivo una respuesta positiva del .php*/ 
							function(datos){  
									//en esta linea solo estamos verificando que nos respondiera positivamente la pagina
									//alert(datos); 
									 var DataSetArreglo  = jQuery.parseJSON(datos); 
									 	/*console.log (DataSetArreglo [1][0] );Esto es para verificar que si recibi el arreglo */
										/*con el arreglo vamos a formar una tabla*/
							        				var tabla="";
													for (i=0; i <DataSetArreglo.length ; i++){  
								 tabla += "<tr>";  
								 //aca genero el link para ver a las otras ordenes
								 tabla += '<td>'+ '<a href="http://127.0.0.1/3/articomsa/vistas/vistas/VistaOrdenFechas.php?NumeroOrden='+DataSetArreglo[i][0] +'">'+DataSetArreglo[i][0]+'</a>' +'</td>' ;
								for (j=1; j<DataSetArreglo[i].length; j++){ 
										tabla += '<td>'+DataSetArreglo[i][j]+ '</td>'  ;

											}
					//	tabla += " <td><input type=number  placeholder=cantdad min=1 max=20></td><td><input type=checkbox name=seleccion id=checke></td> </tr>"
					;}	
														 
									$('#tabla2').append(tabla);					 
															
														 });
		}else
					{
						// esta line de codigo es tempora solo es para verificar si la validacion sucede bien 
							alert("Porfavor seleccione las fechas correctamente	");
					}			 
				} 



		
					})

});