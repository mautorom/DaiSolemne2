<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title>Login</title>
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
					<img alt="logo empresa" src="logo.png"  />
				</div>
			</header>
			
			<div id="login">	
				<div id="formulario">
					<fieldset>
						<legend>Login</legend>
						
						<div id="email">
							<label for="inputEmail">E-Mail:</label>
							<input id="inputEmail" type="email" name="email" />
						</div>
						<div id="clave">
							<label for="inputClave">Clave:</label>
							<input id="inputClave" type="password" name="clave" />
						</div>
					</fieldset>
					<form name="frmBotones" id="frmBotones" onsubmit="validacion()" method="POST">
						<input type="submit" name="entrar" value="Entrar" />
						<input type="button" name="salir" value="Salir" />
					</form>
				</div>				
			</div>
			
			<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>