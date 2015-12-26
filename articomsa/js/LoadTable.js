

$(document).ready(function (){  
var orden = document.getElementById('orden').value; 
console.log (orden) ;

	$.post ('../procesos/busquedas/BusquedaTicket.php', {orden:orden} ,
	function (data){ 	 
console.log (data); 

	var tabla;
		var arreglo= jQuery.parseJSON (data);
		console.log (arreglo);
		for (i=0; i< arreglo.length ; i++){
				tabla += "<tr>" ;
				for (j=0; j< arreglo[i].length ; j++){
					tabla += '<td>'+arreglo[i][j]+ '</td>'  ;
				} 
				tabla += "</tr>";
		}
		$('#VistaTablaOrden').append (tabla); 
	
	}); 
	

});
