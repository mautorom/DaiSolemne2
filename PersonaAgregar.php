<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once __DIR__ . '/Controller/PersonaController.php';


    $rut = $_POST["txtrut"];
    $nombre = $_POST["txtnombre"];
    $apellido = $_POST["txtape"];
    $fechaNacimiento = $_POST["txtfecha"];
    $email = $_POST["txtmail"];


    $exito = PersonaController::registrarPersona($rut, $nombre, $apellido, $fechaNacimiento, $email);

    if ($exito) {
        header('Location: PersonaListar.php');
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar</title>
        <link rel="stylesheet" type="text/css" href="css/principal.css"  media="all">
        <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
        <script type="text/javascript" src="js/jquery.rut.js"></script>
        <script type="text/javascript"  src="js/redireccion.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                $(".rut").Rut({
                    format_on: 'keyup'
                });

                $(".rut").focus().css("border-color", "black");

            });

            function validacionAgregar() {

                exito = $.Rut.validar($(".rut").val())

                if (!exito) {
                    $(".rut").css("border-color", "red");
                } else {

                    $("#txtrut").focus().css("border-color", "black");
                    valorRut = $("#txtrut").val();
                    rutLimpio = $.Rut.quitarFormato(valorRut);
                    rutLimpio = rutLimpio.substring(0, rutLimpio.length - 1)
                    $("#txtrut").val(rutLimpio);
                }



                return exito;
            }


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
                    <img alt="logo empresa" src="IMG/logo.png"  />
                </div>
            </header>
            
            
            <!--			<div id="fotoAgregar">
                                            <img  src="IMG/nuevo.jpg" />
                                            <input id="btnExaminar" type="button" value="Examinar" />
                                    </div>-->
            
            

            <div id="Datos">

                <form action="PersonaAgregar.php" method="POST" onsubmit="return validacionAgregar()">

                    Rut:
                    <input id="txtrut" name="txtrut" type="text" class="rut" maxlength="15" required/>
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
