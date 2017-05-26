<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Zona de Cumpleaños</title>
		<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
		<script type="text/javascript" src="js\validacion.js"></script>
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
                            

			<div class="bienvenida">
				<p><strong>
					Bienvenido a Zona de Cumpleaños, en esta aplicación podrás <br/>
					compartir la fecha de cumpleaños de tus colaboradores <br/>
					para que así nadie olvide saludar y celebrar cuando <br/>
					alguno esté en su día.
					</strong>
				</p>
				<form action="Login.php" method="POST">
					<input type="submit" id="btnConfiguracion" value="Configuración" onclick="Configuracion.php"/>
					<input type="button" id="btnPresentacion" value="Presentación" onclick="redireccionPresentacion()"/>
				</form>
			</div>
			<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
