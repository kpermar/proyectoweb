<?php include ("conexion.php");
$id_detalle = $_GET['id_detalle'];
$sql_detalles = $conexion -> query("SELECT * FROM Detalles WHERE codigo=$id_detalle");

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Proyecto 1DAW - SOLVAM</title>

	<!-- CSS ================================================== -->
	<link rel="stylesheet" href="css/reset.css">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<!-- JS ================================================== -->

</head>

<body>
	<div id="contenedor">

		<div id="trabajo">
 <?php include ('menu.php'); ?>

 <?php  while ($fila=$sql_detalles->fetch_array()){

$codigo=$fila[0];
$titulo=$fila[1];
$descripcion=$fila[2];
$imagen=$fila[3];
?>

<?php } ?>
			
		<p class="limpiar"></p>
		<div id="central">
			<div>
				<img src="img/<?php echo $imagen; ?> "/>
			
				
					<div class="text1">
						<div id = "titulo1">
							<h1><?php echo $titulo; ?> </h1>
						</div>
						<div class = "descripcion">
						<h1> <?php echo $descripcion;?> </h1>
 					</div> 
					</div>
					<a href="../index.php" class="boton-volver">Back</a>

					<a href="https://www.planetrugby.com/" class="boton-mas-informacion">More Info</a>
			  
			</div>
		</div>
		
		<p class="limpiar"></p>
		<div id="pie">

			<div class="sobrenosotros">
				<p>About us</p>
				<img src="img/uk.png" alt="Logo de tu empresa">

			</div>

			<div class="mapa">
			

			</div>
			<div class="redes">
				<div id="facebook"> </div>
				<div id="twitter"> </div>
				<div id="pelota"> </div>
				<div id="wifi"> </div>
				<div id="triangulo"> </div>
			</div>

			<div class="late">
			<h1 class="animated-text">The Welsh Rugby Union said in a statement:
				                      "Rhys Carre has been released from the Wales senior
									   men's preliminary training squad for Rugby World Cup 2023.
                                       "</h1>

			</div>

			<div class="grid">
				<div class="imagenes">
					<img src="img/chicos.jpg" alt="Imagen 1">
					<img src="img/1.jpg" alt="Imagen 2">
					<img src="img/2.jpg" alt="Imagen 3">
					<img src="img/3.jpg" alt="Imagen 4">
					<img src="img/4.jpg" alt="Imagen 5">
					<img src="img/chicas.jpg" alt="Imagen 6">
					<img src="img/6.png" alt="Imagen 7">
					<img src="img/5.webp" alt="Imagen 8">
					<img src="img/7.jpg" alt="Imagen 9">
					<img src="img/8.png" alt="Imagen 10">
					<img src="img/9.jpg" alt="Imagen 11">
					<img src="img/11.jpg" alt="Imagen 12">
				</div>
			</div>
			<p class="limpiar"></p>

			<nav>
				<ul>

				<li><a href="../index.php">Home</a></li>
					<li><a href="../blog3.php">About us</a>
						<ul>
							<li><a href="../blog3.php?id_categoria=1">England</a></li>
							<li><a href="../blog3.php?id_categoria=2">Scotland</a></li>
							<li><a href="../blog3.php?id_categoria=3">Wales</a></li>
							<li><a href="../blog3.php?id_categoria=4">Ireland</a></li>
						</ul>
					</li>
					
					<li><a href="../contacta.html">Contact</a></li>
					<li><a href="http://kevinperona.com.es:8080/kevinperona/proyecto/webapp/login.jsp">Log in</a></li>


				</ul>
			</nav>
		</div>
		</div>

	</div>

</body>

</html>


</body>

</html>



		