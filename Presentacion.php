<?php       
    session_start();
    include_once "/controller/PersonaController.php";
    $listadoPersonas = PersonaController::listarPersonasRegistradas();    
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title>Presentación</title>
		<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
		<script type="text/javascript" src="js\validacion.js"></script>
	</head>
	<body>
		<div id="contenido">
			<header>
				<div id="titulo">
					<h1>Cumpleaños de Marzo</h1>
					<!-- <h3>Nombre de empresa</h3> -->
				</div>
				<div id="logo-empresa">
					<img alt="logo empresa" src="logo.png"  />
				</div>
			</header>
			
                         <?php
                            foreach($listadoPersonas as $persona) {
                                /*@var $persona Persona */
                        ?>
<!--                        Faltaria condicionar por el mes...no recuerdo si se requiere-->
                        <div style="width: 150px; height: 150px; display: inline-table; margin:10px; border-style: dotted; align-content: center;">
                            <h4><?= $persona->getNombre() ?></h4>
                            <h4><?= $persona->getFechaNacimiento() ?></h4>
                        </div>                            
                        <?php
                            }
                        ?>
			
			
			<footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
