<!DOCTYPE html>
<html>
<head>
	<title>Musu Projektas</title>
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/vytautas.css">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/ruta.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
</head>
<body class="img-fix" style="background-image: url(<?php echo $bgurl; ?>);">


		<header>
		<!-- Dropdown Structure -->
		<div>
			<ul id="dropdown1" class="dropdown-content">
				<li><a href="#!">Europa</a></li>
				<li><a href="#!">Asia</a></li>
				<li class="divider"></li>
				<li><a href="#!">Antarctica</a></li>
				<li><a href="#!">North America</a></li>
				<li><a href="#!">South America</a></li>
			</ul>
			<nav>
				<div class="nav-wrapper blue lighten-1">

					<img class="logo" src="img/aeroplane.png" height="50" width="50">
					<ul class="right hide-on-med-and-down">
						<li><a href="sass.html">News</a></li>
						<li><a href="badges.html">About us</a></li>
						<!-- Dropdown Trigger -->
						<li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons right">Trips</i></a></li>
					</ul>
				</div>
			</nav>

			<nav>
				<div class="nav-wrapper #1565c0 blue darken-3">
					<div class="col s12">
						<a href="#!" class="breadcrumb">First</a>
					</div>
				</div>
			</nav>
		</div>

		
	</header>