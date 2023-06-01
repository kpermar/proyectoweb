<?php include("php/conexion.php");
$sql_detalles=$conexion->query("SELECT* FROM Detalles");
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

			<div class="logo-container">
				<img src="img/uk.png" alt="Logo de tu empresa">
				<h1>RUGBY NEWS</h1>
			</div>


			<nav>
				<ul>

					<li><a href="http://localhost/proyecto_solvam/index.php">Home</a></li>
					<li><a href="http://localhost/proyecto_solvam/blog3.php">About us</a>
						<ul>
							<li><a href="http://localhost/proyecto_solvam/blog3.php?id_categoria=1">England</a></li>
							<li><a href="http://localhost/proyecto_solvam/blog3.php?id_categoria=2">Scotland</a></li>
							<li><a href="http://localhost/proyecto_solvam/blog3.php?id_categoria=3">Wales</a></li>
							<li><a href="http://localhost/proyecto_solvam/blog3.php?id_categoria=4">Ireland</a></li>
						</ul>
					</li>
					
					<li><a href="http://localhost/proyecto_solvam/contacta.html">Contact</a></li>
					<li><a href="http://localhost:8080/proyecto/login.jsp">Log in</a></li>


				</ul>
			</nav>
		</div>

		<p class="limpiar"></p>
		<div id="marco">
			<div class="gallery">
				<div class="cube">
					<div>

					</div>
					<div>

					</div>
					<div>

					</div>
					<div>

					</div>

				</div>
			</div>
		</div>

		<div class="texto">
			<h1>England Struggles</h1>
			<div class="texto1">
				<p>England and Harlequins out-half Marcus Smith is the consummate pro. 
					Following the most difficult period of his career boomeranging out
					 in and out again of the England team across the recent Guinness Six Nations,
					 it would be understandable if he stayed hidden away from the media limelight.</p>

			</div>
		</div>
		<p class="limpiar"></p>



		<div id="contenido">
		<?php  while ($fila=$sql_detalles->fetch_array()){
			$codigo=$fila[0];
			$titulo=$fila[1];
			$descripcion=$fila[2];
			$imagen=$fila[3];
			?>
				<div class="noticias">

				<a href="php/detalles.php?id_detalle=<?php echo $codigo;?>">
					<img src="img/<?php echo $imagen;?>" alt="1.jpg">
					<a class="lupa"></a>
					<a class="boton"></a>
				</a>
				</img>

				 <p> <?php echo $titulo;?> </p> 
			</div>
			<?php } ?>
			

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

					<li><a href="#">Home</a></li>
					<li><a href="#">About us</a>
						<ul>
							<li><a href="#">England</a></li>
							<li><a href="#">Scotland</a></li>
							<li><a href="#">Wales</a></li>
							<li><a href="#">Ireland</a></li>
						</ul>
					</li>
					
					<li><a href="#">Contact</a></li>
					<li><a href="kevinperona.com.es:8080/kevinperona/proyecto/webapp/login.jsp">Log in</a></li>



				</ul>
			</nav>

		</div>

	</div>

</body>

</html>


</body>

</html>