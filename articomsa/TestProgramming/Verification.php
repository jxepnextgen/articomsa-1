<?php  
if (isset($_POST['Arreglo']))
{ 
  #$arreglo = $_POST['arreglo'] ;
		#echo $arreglo [4][0]; 
		#echo "si funciono"; 
		 $arrelgo  = json_decode(stripslashes($_POST['Arreglo'])); 
		# echo $arrelgo [1][0];  
 $insertado= $arrelgo [2][0];

//conexion a la base de datos y verificacion de conexion
 $conexionDatos= new mysqli("localhost","root","","test");  
 	if($conexionDatos->connect_error){
			die ("conexion fallida" . $conexionDatos->connect_error); 
			}else 
				{echo"Conectado a la base de datos ";
				
					$stringSQl= "INSERT INTO usuario (nombre) VALUES ('$insertado') ";  
						if ($conexionDatos->query($stringSQl) === true){
							echo "Se ha agregado un nuevo record"; $conexionDatos->close();} else
								{
									echo"se produjo un error con el insert"; $conexionDatos->close();
									}
										 
			} 
					 
		
	}else 
	{ 
	echo "no ha pasado nada";	}


 
?>