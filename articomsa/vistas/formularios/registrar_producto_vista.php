<?php 
include ('../../procesos/conexion/conector.php');  

	$con= new mysqli($host, $usuario, $contrasena, $nombre_bd);

	//checkeando conexion 
	if (mysqli_connect_error()){ 

		echo "connection failed : " . mysqli_connect_error() ; 
	
} 

$Sql= "select * from marca"; 
$resultado= mysqli_query($con,$Sql);
$sqlproducto= "select * from producto"; 
$resultado_producto= mysqli_query($con,$sqlproducto); 
$sqlpresentacion= "select * from presentacion"; 
$resultado_presentacion= mysqli_query($con,$sqlpresentacion);
$sqlcategoria = "select * from categoria";
$resultado_categoria= mysqli_query($con,$sqlcategoria);



?>
<!DOCTYPE html>
<html lang="es">
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<link type="text/css" rel="stylesheet" href="../../css/normalize.css" />
		<link type="text/css" rel="stylesheet" href="../../css/stylesheet.css" />
		<link type="text/css" rel="stylesheet" href="../../css/forms.css" />
		<link type="text/css" rel="stylesheet" href="../../css/title_pages.css" />
		<title>Registrar Producto</title>
	</head>

	<body>

		<header class="titulo">
			<div class="fondo-gris"></div>

			<div class="contenedor-titulo bottom-margin-title ovalo-flotante">
				<div class="contenido-titulo">
					<h1>Registrar Producto</h1>
				</div>
			</div>
		</header>

		<div class="form-container">
			<form action="../../procesos/registros/presentacion_precio.php" method="post" name="form_registrar_producto"><br>
				<fieldset>
					<legend class="leyenda"> Nuevo Producto </legend>
					<div id="formulario">



	<div class="form-containers">
							<label>Categoria*: </label>
							<select class="form-small-fields" name="categoria" >
								<?php  
									echo "<option disabled selected value='0'>Seleccione Producto</option>";
									while ($row= mysqli_fetch_array($resultado_categoria)){ 
										echo "<option value='" .$row['idcategoria'] . "'>" .$row['cat_nombre'] . "</option>";  
									}
								echo "</select>";  
							?>
							<input type="submit" name="nproducto" value="Nuevo" /> 
						</div>




						<div class="form-containers">
							<label>Producto*: </label>
							<select class="form-small-fields" name="producto" >
								<?php  
									echo "<option disabled selected value='0'>Seleccione Producto</option>";
									while ($row= mysqli_fetch_array($resultado_producto)){ 
										echo "<option value='" .$row['id_producto'] . "'>" .$row['descripcion'] . "</option>";  
									}
								echo "</select>";  
							?>
							<input type="submit" name="nproducto" value="Nuevo" /> 
						</div>
						
						<div class="form-containers">
							
							
							<label>Marca*: </label>
							<select class="form-small-fields" name="marca" >
								
							     <?php  
									echo "<option disabled selected value='0'>Seleccione Marca</option>";
									while ($row= mysqli_fetch_array($resultado)){ 
										echo "<option value='" .$row['id_marca'] . "'>" .$row['descripcion'] . "</option>"; 
									}
								echo "</select>";  
							?> 
							<input type="submit" name="nmarca" value="Nueva" />
						</div>
						
						<div class="form-containers">
							<label>Presentación*: </label>
							<select class="form-small-fields" name="presentacion" >
							<?php  
								echo "<option disabled selected value='0'>Seleccione Presentacion</option>";
									while ($row= mysqli_fetch_array($resultado_presentacion)){ 
										echo "<option value='" .$row['idpresentacion'] . "'>" .$row['descripcion'] . "</option>"; 
									}
								echo "</select>";  
							?> 
							<input type="submit" name="npresentacion" value="Nueva" />
						</div>
						
						<div class="form-containers">
							<label>Precio (con decimales)*: </label> 
							<input class="form-small-fields" type="text" name="precio" placeholder="00.00" />
						</div>
							
						</div>
						<br />
						<input type="submit" name="crear" value="Crear" />
					</div>
				</fieldset>
				
				<p> Nota: Los campos que contienen asterisco (*) son obligatorios. </P><br/>
			</form>
		</div>

		<div id="boton" class="center-buttons buttons-margin">
			<a href = "../menus/menu_producto.php">
				<h3>Menu Producto</h3>
			</a>
		</div>
		<div id="boton" class="center-buttons buttons-margin">
			<a href = "../menus/menu.php">
				<h3>Menu Principal</h3></a>
			</div>
	</body>
</html>
 
  
  