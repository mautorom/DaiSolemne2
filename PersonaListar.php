<?php



include_once __DIR__.'/Controller/PersonaController.php';
$ListarPersonas = PersonaController::listarPersonasRegistradas();


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width; initial-scale=1.0;">
		<title>Zona de Cumpleaños</title>
		<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
		<script type="text/javascript" src="js/validacion.js"></script>
		<script type="text/javascript" src="js/redireccion.js"></script>
                <script src="js/jquery-3.2.1.js" ></script>
                <script src="js/jquery.rut.js" ></script>

                <script>
                   function calcularDigitoVerificador(rut) {
                if (!rut || !rut.length || typeof rut !== 'string') {
                    return -1;
                }
                // serie numerica
                var secuencia = [2,3,4,5,6,7,2,3];
                var sum = 0;
                //
                for (var i=rut.length - 1; i >=0; i--) {
                        var d = rut.charAt(i)
                        sum += new Number(d)*secuencia[rut.length - (i + 1)];
                };
                // sum mod 11
                var rest = 11 - (sum % 11);
                // si es 11, retorna 0, sino si es 10 retorna K,
                // en caso contrario retorna el numero
                return rest === 11 ? 0 : rest === 10 ? "K" : rest;
            }
            jQuery(document).ready(function(){
                jQuery(".rut").each(function(indice, columna){
                    mantisa = jQuery(columna).html();
                    dv = calcularDigitoVerificador(mantisa);                    
                    rut = jQuery.Rut.formatear(mantisa+dv, true);
                    jQuery(columna).html(rut);
                })
            });
                </script>
                
                
                
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

                            <form action="PersonaAgregar.php" method="GET">
                                
                                    <table class="listarUsua" >
                                        <tr>
                                            <th>RUT</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Fecha Nacimiento</th>
                                            <th>E-Mail</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        
                                        <?php 
                                        
                                        foreach ($ListarPersonas as $persona) {
//                                            @var $persona Persona
                                            
                                        
                                        ?>
                                        <tr>
                                            <td class="rut" ><?=$persona->getRut()?></td>
                                            <td><?=$persona->getNombre()?></td>
                                            <td><?=$persona->getApellido()?></td>
                                            <td><?=$persona->getFechaNacimiento()?></td>
                                            <td><?=$persona->getEmail()?></td>
                                            <td><a href="PersonaEditar.php?txtrut=<?=$persona->getRut()?>">Editar</a></td>
                                            <td><a href="PersonaEliminar.php?txtrut=<?=$persona->getRut()?>">Eliminar</a></td>
                                        </tr>
                                        
                                        <?php 
                                        }
                                        ?>
                                        
                                    </table>                                   
                                <input type="submit" id="btnAgregar" value="Nuevo+" class="btnFormato" />
					<input type="button" id="btnSalir" value="Salir" class="btnFormato" onclick="redireccionSalir()"/>
				</form>
			</div>
			
                    
                    <footer>
				<p>Diseño de Aplicaciones para Internet</p>
			</footer>
		</div>			
	</body>
</html>
