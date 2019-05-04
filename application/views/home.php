<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Titulo -->
		<title>Home</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap Local-->
		<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-grid.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-reboot.min.css');?>">
		<!-- CSS personal -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/global.css');?>">
	</head>
	<body id="cuerpo">
		<!-- NavBar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">GreenHouse</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contacto</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Tienda</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
				</form>
			</div>
		</nav>
		<!-- Fin del NavBar -->
		<!-- header -->
		<div class="container" id="Header">
			<h1 align="center">Bienvenido</h1>
		</div>
		<!-- CuerpoMedio -->
		<!-- carrousel -->
		<div class="container pt-3 pb-3">
			<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="d-block w-100 h-50" src="assets/img/paisajimo1.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-50" src="assets/img/paisajimo2.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-50" src="assets/img/paisajismo3.jpg" alt="Third slide">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100 h-50" src="assets/img/paisajismo4.jpg" alt="Forth slide">
					</div>
				</div>
			</div>
		</div>
		<!-- Header -->
		<!-- JavaScript -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>