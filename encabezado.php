<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="description" content="Texto que aparece en bucadores" />
		<meta  name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
		<title>STUAN</title>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/estilos.css">
		<script type="text/javascript" src="js/vermas.js"></script>
		<!--link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
		<script type="text/javascript" src="js/startstop-slider.js"></script>-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style_alt.css" />
		<!--[if lt IE 9]>
		<link rel="stylesheet" type="text/css" href="css/style_ie.css" />
		<![endif]-->
		<!-- jQuery -->
	<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>-->
		<!-- jmpress plugin -->
		<script type="text/javascript" src="js/jmpress.min.js"></script>
		<!-- jmslideshow plugin : extends the jmpress plugin -->
		<script type="text/javascript" src="js/jquery.jmslideshow.js"></script>
		<script type="text/javascript" src="js/modernizr.custom.48780.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/logeo.css">
		<link rel="stylesheet" type="text/css" href="css/media_query.css">
		<link rel="stylesheet" type="text/css" href="css/objetivos.css">
		<link rel="stylesheet" type="text/css" href="css/historia.css">
		<link rel="stylesheet" type="text/css" href="css/secretarias.css">
		<link rel="stylesheet" type="text/css" href="css/directorio.css">
		<noscript>
			<style>
			.step {
				width: 100%;
				position: relative;
			}
			.step:not(.active) {
				opacity: 1;
				filter: alpha(opacity=99);
				-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(opacity=99)";
			}
			.step:not(.active) a.jms-link{
				opacity: 1;
				margin-top: 40px;
			}
			</style>
		</noscript>

	</head>
	<?php
		include 'loggin.php';
	?>
	<body>

		<header>
			<img id ="img_stuan" src="img/stuan.jpg" height="960" width="960"/>
			<h1><em><strong>STUAN</strong></em></h1>
			<nav>
					<ul>
						<li><a href="index.php">Inicio</a></li>
						<li><a href="objetivos.php">Objetivos</a></li>
						<li><a href="historia.php">Historia</a></li>
						<li><a href="secretarias.php">Secretarías</a></li>
						<li title="DIRECTORIO DEL COMITÉ EJECUTIVO 2012-2016"><a href="directorio.php">Directorio</a></li>
						<li><a href="">Contácto</a></li>
						<li><a href="">Administrar</a></li>
						<li><a href="">Salir</a></li>
					</ul>
					<a class="icon-user" id="loggin_nav" >Login</a>
					<a class="icon-list-ul"></a>
			</nav>

		</header>

		<section id="principal">
			<div id="nav_falso">
					<ul>
						<a href="index.php"><li>Inicio</li></a>
						<a href="objetivos.php"><li>Objetivos</li></a>
						<a href="historia.php"><li>Historia</li></a>
						<a href="secretarias.php"><li>Secretarías</li></a>
						<a href="directorio.php"><li title="DIRECTORIO DEL COMITÉ EJECUTIVO 2012-2016">Directorio</li></a>
						<a href=""><li>Contácto</li></a>
						<a href=""><li>Administrar</li></a>
						<a href=""><li>Salir</li></a>
						<a ><li id="loggin_nav1">Login</li></a>

					</ul>

			</div>