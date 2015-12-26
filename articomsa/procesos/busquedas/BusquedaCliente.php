<?php  
 if (isset ($_POST['NombreCliente'])){
		
	
		//echo ($_POST['NombreCliente'])	; 
		$ConexionData=new mysqli ("localhost","root","","articomsa");
		 if($ConexionData->connect_error){
			 die ("conexion fallida".$ConexionData->connect_error);
		 }  
		 $NombreCliente= json_decode(stripslashes($_POST['NombreCliente'])) .'%';   
		 $IdCliente =json_decode(stripslashes($_POST['NombreCliente']));
		 $Busqueda= "SELECT * FROM cliente where (nombre like '$NombreCliente' or id_cliente = '$IdCliente')"; 
		 $Comando=mysqli_query($ConexionData,$Busqueda);
			while ($outcome= mysqli_fetch_array($Comando,MYSQLI_NUM)){
				$DataSet[]=$outcome;
				
			} 
			echo json_encode($DataSet); 
			$ConexionData->close();
		 
		 
		 
		 
 } else
 {
	 echo  ('error');  
	 $ConexionData->close();
	 	
 } 
	 
?>