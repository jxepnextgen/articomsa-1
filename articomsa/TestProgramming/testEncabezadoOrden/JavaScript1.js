$(document).ready(function () { 


	

	
	$('#nombre-cliente').keypress(function (e){ 
	if (e.which ==13) 
	{  
		//var NombreCliente=document.getElementById('nombre-cliente').value;
		var NombreCliente= JSON.stringify($("#nombre-cliente").val()); 
		
	$.ajax({  
		type:'post',
		url:"../../../TestProgramming/testEncabezadoOrden/BusquedaCliente.php", 
		data:{NombreCliente:NombreCliente}, 
		dataType:'json', 
		cache: false,  
		success: function (datas)	{ 
	
		var ArregloDatos = datas; 
	
					document.getElementById('id-cliente').value= ArregloDatos [0][0] ;
				document.getElementById('nombre-cliente').value= ArregloDatos [0][1] ;
		
				document.getElementById('direccion').value= ArregloDatos [0][2] ;
		
				document.getElementById('nit').value= ArregloDatos [0][3] ;  
				document.getElementById('contacto').value= ArregloDatos [0][4] ; 

				document.getElementById('telefono').value= ArregloDatos [0][5] ;				
				
		
		}	 
		
	
	
	});
	
	
	
	}
	 })
	
});