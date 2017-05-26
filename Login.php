<?php
session_start();

include_once "/controller/UsuarioController.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["inputEmail"]) && isset($_POST["inputClave"])) {
        
        $email = $_POST["inputEmail"];
        $clave = $_POST["inputClave"];
                
        $validarUsuario = UsuarioController::validarUsuarioClave($email,$clave);
        
        if ($validarUsuario) {
            header("location:Configuracion.php");
            return;
        }else{
            printf('Error de autenticacion');
            header("location:Login.php");
            return;
        }    
    } 
}    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/principal.css"  media="all" >
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
            <div id="login">	
		<div id="formulario">
                    <form  method="POST" > <!-- name="frmBotones" id="frmBotones" onsubmit="validacion()"-->
                        <fieldset>
                            <legend>Login</legend>
                                <div id="email">
                                    <label for="inputEmail">E-Mail:</label>
                                    <input id="inputEmail" type="email" name="inputEmail" />
				</div>
				<div id="clave">
                                    <label for="inputClave">Clave:</label>
                                    <input id="inputClave" type="password" name="inputClave" />
				</div>
			</fieldset>                                    
			<input type="submit" name="entrar" value="Entrar" />
                        <input id="btnsalir" type="button" name="salir" value="Salir" onclick="redireccionSalir();"/>                                                
                    </form>               
                    <a href="Registro.php">Registrarse</a>
		</div>				
            </div>			
            <footer>
                <p>Diseño de Aplicaciones para Internet</p>               
            </footer>
        </div>			
    </body>
</html>