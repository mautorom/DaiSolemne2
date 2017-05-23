<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title>Configuración</title>
		<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
		<script type="text/javascript" src="js\validacion.js"></script>
	</head>
	<body>
		<div id="contenido">
			<header>
				<div id="titulo">
					<h1>Zona de Cumpleaños</h1>
					<h3>Nombre de empresa</h3>
				</div>
				<div id="logo-empresa">
					<img alt="logo empresa" />
				</div>
			</header>			
			<div id="superior">
				<div id="saludo">
					Bienvenido orodriguezv@profesor.duoc.cl [salir]
				</div>
				<div id="navegacion">
					<ul>
						<li><a href="Index.php">Inicio</a></li>
						<li>Configuracion</li>
					</ul>
				</div>		
			</div>
			<div id="busqueda">
				<input id="txtBuscar" type="text" />
				<input id="btnBuscar" type="button" value="Buscar" />
			</div>			
			<div id="Grilla">
				<table border="1">
					<th>Nombre</th>
					<th>Fecha</th>
					<th></th>
					<th></th>
					<tr>
						<td>Juan Pérez</td>
						<td>20 de Marzo</td>
						<td><a href="Editar.php">Editar</td>
						<td><a href="Eliminar.php">Eliminar</td>
					</tr>
					<tr>
						<td>Pedro Heisenberg</td>
						<td>06 de Marzo</td>
						<td><a href="Editar.php">Editar</td>
						<td><a href="Eliminar.php">Eliminar</td>
					</tr>
					<tr>
						<td>Catalina Cifuentes</td>
						<td>07 de Mayo</td>
						<td><a href="Editar.php">Editar</td>
						<td><a href="Eliminar.php">Eliminar</td>
					</tr>
				</table>
			</div>
			<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
