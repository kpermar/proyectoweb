<?php include("php/conexion.php");
if (isset($_GET['id_categoria'])) {
	$id_categoria = $_GET['id_categoria'];
	$sql_articulos = $conexion->query("SELECT * FROM ARTICULOS WHERE id_categoria=$id_categoria");
} else {
	$sql_articulos = $conexion->query("SELECT * FROM ARTICULOS");
}
$sql = $conexion->query("SELECT * FROM categorias");
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

				<li><a href="index.php">Home</a></li>
					<li><a href="blog3.php">About us</a>
						<ul>
							<li><a href="blog3.php?id_categoria=1">England</a></li>
							<li><a href="blog3.php?id_categoria=2">Scotland</a></li>
							<li><a href="blog3.php?id_categoria=3">Wales</a></li>
							<li><a href="blog3.php?id_categoria=4">Ireland</a></li>
						</ul>
					</li>
					
					<li><a href="contacta.html">Contact</a></li>
					<li><a href="http://kevinperona.com.es:8080/kevinperona/proyecto/webapp/login.jsp">Log in</a></li>



				</ul>
			</nav>
		</div>
		<p class="limpiar"></p>
		<div id="contenedorblog">
			<div id="contenedorb">

				<div class="derecha">
					<div class="popular-post">
						<?php while ($fila = $sql->fetch_array()) {
							$ID = $fila[0];
							$CATEGORIA = $fila[1];
							?>

							<li><a href="blog3.php?id_categoria=<?php echo $ID; ?>"> <?php echo $CATEGORIA; ?> </a></li>

						<?php } ?>

						<p class="limpiar"></p>

						<h2>Popular Post</h2>
						<article>
							<img src="img/7.jpg" alt="Imagen 1">
							<div>
								<h3>Ireland Wins the Six Nations</h3>

							</div>
						</article>

						<article>
							<img src="img/1.jpg" alt="Imagen 2">
							<div>
								<h3>Englang hits better marks</h3>

							</div>
						</article>
						<article>
							<img src="img/9.jpg" alt="Imagen 3">
							<div>
								<h3>Scotland James Rodd gives up</h3>

							</div>
						</article>
					</div>
					<p class="limpiar"></p>
					<div class="more-info">
						<h2>More Information</h2>
						<div class="comentario">
							<p>It was stop start match, a proper test match,
								but in the end we have a bonus point victory.</p>
						</div>
						<div class="comentario">
							<p>This is unbelievably fitting for Johnny (Sexton),
								he wanted to lift the trophy with someone else,</p>
						</div>
						<div class="comentario">
							<p> the first time we’ve done this
								at home and it means so much for the Irish here</p>
						</div>
					</div>
					
					<div class="video">
						
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/PiCoMRtrGV4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div>
				<div class="izquierda">
					<div class="contenedor-noticias">
						<?php while ($fila = $sql_articulos->fetch_array()) {

							$id_articulos = $fila[0];
							$titulo = $fila[2];
							$descripcion = $fila[3];
							$imagen = $fila[4];
							?>



							<div class="noticia-blog">
								<h3>
									<?php echo $titulo; ?>
								</h3>
								<img src="img/<?php echo $imagen; ?> " />

								<p>
									<?php echo $descripcion; ?>
								</p>
							</div>


						<?php } ?>

					</div>

				</div>
			</div>
			<p class="limpiar"></p>
			<div id="pie">

				<div class="sobrenosotros">
					<p>Sobre Nosotros</p>
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

					<li><a href="index.php">Home</a></li>
					<li><a href="blog3.php">About us</a>
						<ul>
							<li><a href="blog3.php?id_categoria=1">England</a></li>
							<li><a href="blog3.php?id_categoria=2">Scotland</a></li>
							<li><a href="blog3.php?id_categoria=3">Wales</a></li>
							<li><a href="blog3.php?id_categoria=4">Ireland</a></li>
						</ul>
					</li>
					
					<li><a href="contacta.html">Contact</a></li>
					<li><a href="http://kevinperona.com.es:8080/kevinperona/proyecto/webapp/login.jsp">Log in</a></li>




					</ul>
				</nav>

			</div>



</body>

</html>


</body>

</html>





</body>

</html>