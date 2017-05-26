<?php


if (isset($_GET["txtrut"])) {

    include_once __DIR__.'/Controller/PersonaController.php';
    $rut = $_GET["txtrut"];
    PersonaController::EliminarPersona($rut);
    

    header('Location: PersonaListar.php');
}

?>
