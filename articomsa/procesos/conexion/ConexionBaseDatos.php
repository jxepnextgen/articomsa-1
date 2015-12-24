<?php  
DEFINE ("Servidor","localhost");
DEFINE ("usuario","root"); 
DEFINE ("password","");  
DEFINE ("BaseDatos","articomsa"); 
//creando conexion
$Conexion= new mysqli(Servidor,usuario,password,BaseDatos); 
//verificando conexion 

	 
