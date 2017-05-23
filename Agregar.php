<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title>Agregar</title>
		<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
		<script type="text/javascript" src="js\redireccion.js"></script>
	</head>
	<body>
		<div id="contenido">
			<header>
				<div id="titulo">
					<h1>Zona de Cumpleaños</h1>
					<h3>Nombre de empresa</h3>
				</div>
				<div id="logo-empresa">
					<img alt="logo empresa" src="logo.png"  />
				</div>
			</header>
			<div id="fotoAgregar">
				<img  src="IMG/nuevo.jpg" />
				<input id="btnExaminar" type="button" value="Examinar" />
			</div>
			<div id="Datos">
				Nombre:
				<input id="txtnombre" type="text" />
				Fecha de Nacimiento:
				<input id="txtfecha" type="date" />
			</div>
			<div id="botonera">
				<input id="btnAgrega" type="button" value="Agregar" />
				<input id="btnSale" type="button" value="Salir" onclick="redireccionSalir()" />
			<div/>
			<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
