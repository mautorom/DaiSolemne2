<?php





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once __DIR__.'/Controller/PersonaController.php';
    
    
    $rut = $_POST["txtrut"];
    $nombre = $_POST["txtnombre"];
    $apellido = $_POST["txtape"];
    $fechaNacimiento = $_POST["txtfecha"];
    $email = $_POST["txtmail"];
    
    
    PersonaController::registrarPersona($rut, $nombre, $apellido, $fechaNacimiento, $email);
    
    header('Location: PersonasListar.php');
    
}
else
{
    echo "false";
    
}   

?>

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
<!--			<div id="fotoAgregar">
				<img  src="IMG/nuevo.jpg" />
				<input id="btnExaminar" type="button" value="Examinar" />
			</div>-->
			
                        <div id="Datos">
                            
                            <form action="PersonaAgregar.php" method="POST" onsubmit="return ">
				Rut:
                                <input id="txtrut" name="txtrut" type="text" required/>
				Nombre:
				<input id="txtnombre" name="txtnombre" type="text" required/>
                                Apellido:
				<input id="txtape" name="txtape" type="text" required/>
				Fecha de Nacimiento:
				<input id="txtfecha" name="txtfecha"  type="date" required/>
                                Mail:
                                <input id="txtmail" name="txtmail"  type="email" required/>
                                
                                <input id="btnAgrega" type="submit" value="Agregar" class="btnFormato" />
				<input id="btnSale" type="button" value="Salir" class="btnFormato" onclick="redireccionSalir()" />
                                
                                
                            </form>
                            
			</div>
				<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
