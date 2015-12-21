<?php 
echo $_POST['postname'];
/*
$conexion=new MySQLi("localhost","root","", "test");

if (mysqli_connect_error()){

	echo "conexion a base de datos fallida :" ;
	echo "<br />";
	echo mysqli_connect_error();
}else {
	echo "Buena Conexion hacia Mysql";
	echo "<br />"; 
echo "<br />"; 
		
}

$valor =$_POST['dataString']; 
$sql ="INSERT INTO usuario (nombre)values ('$valor')"; 

if ($conexion->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close(); 
*/
?>