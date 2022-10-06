
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Publicaciones</title>
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
	
	<link href="https://fonts.googleapis.com/css?family=Grand+Hotel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans:100,200,300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	
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
								<li ><a href="index.php">Publicaciones</a></li>
								<li class="active"><a href="admin.php">Administrador</a></li>
								<li ><a href="new_post.php">Nuevo</a></li>
								<li ><a href="salir.php">Salir</a></li>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>


		
			<div class="container">
				<div class="row">
					<div class="content">
					<?php
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
						
						$sql="SELECT titulo,autor,fecha,categoria,texto,n_imagen,id FROM proyecto.posts WHERE activo='N'";
						$sql = mysqli_query($conexion,$sql);
							while($rs = mysqli_fetch_array($sql)) { 
								$titulo=$rs[0];
								$autor=$rs[1];
								$fecha=$rs[2];
								$categoria=$rs[3];
								$texto=$rs[4];			
								$n_imagen=$rs[5];	
								$id=$rs[6];			
					?>
						<article class="blog-entry">
							<div class="blog-wrap">
								<span class="category text-center"><?php echo $categoria; ?></span>
								<h2 class="text-center"><?php echo $titulo; ?></h2>
								<?php if($n_imagen!="" || $n_imagen!=NULL){ ?>
								<div class="blog-image">
									<a  class="blog-img text-center" style="background-image: url(images/<? echo $n_imagen; ?>);"></a>
									<ul class="share">
										<li class="text-vertical"><i class="icon-share3"></i></li>
										<li><a href="#"><i class="icon-facebook"></i></a></li>
										<li><a href="#"><i class="icon-twitter"></i></a></li>
										<li><a href="#"><i class="icon-googleplus"></i></a></li>
									</ul>
								</div>
								<?php
								}
								?>
								<span class="category text-center"><i class="icon-calendar3"></i> <? echo $fecha; ?> | <a class="posted-by"><i class="icon-user2"></i> by <? echo $autor; ?> </a> </span>
							</div>
							<div class="desc">
								<p class="first-letra"><? echo $texto; ?> </p>
							</div><br>
							<form action="actualizar.php" method="post" class="form-left">
						<input type="hidden"  name="id" value="<? echo $id; ?>">
						<input type="hidden"  name="action" value="p">
						<input type="submit" value="Publicar" class="btn btn-primary">
						</form> &nbsp;
						<form action="actualizar.php" method="post" class="form-right">
						<input type="hidden"  name="id" value="<? echo $id; ?>">
						<input type="hidden"  name="imagen" value="<? echo $n_imagen; ?>">
						<input type="hidden"  name="action" value="e">
						<input type="submit" value="Eliminar" class="btn btn-primary">
						</form>
						</article>
						
						<?php
							}
						}
						?>
						
					</div>

					
				</div>
			</div>
	

		
		<footer id="colorlib-footer" role="contentinfo">
			
				<div class="row">
					<div class="col-md-12">
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
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

