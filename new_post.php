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
						<form action="guardar_publi.php" enctype="multipart/form-data" method="post">
							<div class="row form-group">
								<div class="col-md-6">
									<label for="autor">Autor</label>
									<input type="text" id="autor" name="autor" class="form-control" placeholder="Autor" required>
								</div>
								<div class="col-md-6">
									<label for="categoria">Categoria</label>
									<input type="text" id="categoria" name="categoria" class="form-control" placeholder="Categoria" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="titulo">Titulo</label>
									<input type="text" id="titulo" name="titulo" class="form-control" placeholder="Titulo" required>
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="imagen">Imagen (Opcional)</label>
									<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
									<input name="imagen" id="imagen" class="form-control" type="file" />
									
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="texto" >Texto</label>
									<textarea name="texto" id="texto" cols="30" rows="10" class="form-control" placeholder="Texto de la publicación"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Guardar" class="btn btn-primary">
							</div>

						</form>		
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

