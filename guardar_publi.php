<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nuevo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php">article</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Publicaciones</a></li>
								<li><a href="admin.php">Administrador</a></li>
								<li class="active"><a href="new_post.php">Nuevo</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>Nueva Publiación</h2>
						
							<div class="row form-group">
								<?php 
									$imagenload="true";
									$imagen_size=$_FILES['imagen'][size];
									$image_name= $_FILES['imagen'][name];
									if ($_FILES['imagen'][size]>3000000)
									{$msg=$msg."El archivo es demasiado grande para ser subido<BR>";
									$imagenload="false";}
									
									if (!($_FILES['imagen'][type] =="image/jpeg" OR $_FILES['imagen'][type] =="image/gif" OR $_FILES['imagen'][type] =="image/png" OR $_FILES['imagen'][type] =="" OR $_FILES['imagen'][type] ==NULL))
									{$msg=$msg." Tu archivo tiene que ser JPG/GIF/PNG. Otros archivos no son permitidos<BR>";
									$imagenload="false";}
									
									
									$add="images/$image_name";
									if($imagenload=="true"){
									
									
									if(move_uploaded_file ($_FILES['imagen'][tmp_name], $add) OR $_FILES['imagen'][type] =="" OR $_FILES['imagen'][type] ==NULL){
									
									$autor=$_POST["autor"];
									$categoria=$_POST["categoria"];
									$titulo=$_POST["titulo"];
									$texto=$_POST["texto"];
									
									$servidor	= 'localhost';
									$base_datos	= 'proyecto';
									$tabla	= 'posts';
									$usr_sistema	= 'root';
									$pass_sistema	= 'coinsda'; 
									$conexion=mysqli_connect($servidor, $usr_sistema, $pass_sistema);
									if (!$conexion){
										header ("Location: index.php?mensaje=error de conexion.");
										exit(); 
									}
									else{
										$sql = "INSERT INTO ".$base_datos.".".$tabla."(titulo,autor,categoria,texto,n_imagen)"
										." VALUES('$titulo','$autor','$categoria','$texto','$image_name')"; 
										$sql = mysqli_query($conexion, $sql); 
										
										echo " Publicación guardada con éxito. Ahora un admisnistrador tendrá que aceptarla.";
										
									
									}
									
									
									}else{echo "Error al subir el archivo";}
									
									}else{echo $msg;}

								
								?>
								<br>
								<p><a href="new_post.php"><input type="button" value="Regresar" class="btn btn-primary"></a></p>
							</div>

							
					</div>
				</div>
			</div>
		</div>
		<div id="map" class="colorlib-map"></div>
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved. This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

