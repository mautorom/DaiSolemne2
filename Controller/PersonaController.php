<?php

include_once "/../dao/ConexionDB.php";
include_once "/../dao/PersonaDAO.php";

/**
 * Description of PersonaController
 *
 * @author CETECOM
 */
class PersonaController {    
    
    public static function listarPersonasRegistradas() {
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->listarTodos();
    }
    
    public static function registrarPersona($nombre,$fechaNacimiento) {
        
        // validar que los datos sean válidos
        
        $persona = new Persona();
        $persona->setNombre($nombre);
        $persona->setFechaNacimiento($fechaNacimiento);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->agregar($persona); 
        
    }
}
