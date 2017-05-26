<?php       
    session_start();
    include_once "/controller/PersonaController.php";
    $listadoPersonas = PersonaController::listarPersonasRegistradas();    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Configuración</title>
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
                        <img alt="logo empresa" />
                </div>
            </header>			
            <div id="superior">
                <div id="saludo">
                        Bienvenido <?= $_SESSION["usuario"] ?>[salir]   
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

            <!-- Aca hay que traer los datos desde la base de datos /**-->
                <table border="1">
                    <thhead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thhead>
                    <tfoot>
                        <tr>
                            <td colspan="5">
                                Listado de personas registradas
                            </td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                            foreach($listadoPersonas as $persona) {
                                /*@var $persona Persona */
                        ?>
                        <tr>                            
                            <td><?= $persona->getNombre() ?></td>
                            <td><?= $persona->getFechaNacimiento() ?></td>
                            <td><a href="Editar.php">Editar</td>
                            <td><a href="Eliminar.php">Eliminar</td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>            
            </div>
            <div id="botonera">              
                <input id="btnNuevo" type="button" value="Nuevo" onclick="redireccionAgregarNuevo();" />
                <input id="btnSale" type="button" value="Salir" onclick="redireccionSalir();" />           
            <div/>
            <footer>
                <p>Diseño de Aplicaciones para Internet</p>
            </footer>
        </div>			
    </body>
</html>
