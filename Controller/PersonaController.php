<?php

include_once __DIR__."/../dao/ConexionDB.php";
include_once __DIR__."/../dao/PersonaDAO.php";

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

    public static function BuscarPersona($rut) {
        
        // validar que los datos sean válidos
        
//        $persona = new Persona();
//        $persona->setRut($rut);
//        $persona->setNombre($nombre);
//        $persona->setApellido($apellido);
//        $persona->setFechaNacimiento($fechaNacimiento);
//        $persona->setEmail($email);
//        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->buscarPorId($rut); 
        
    }

    
    public static function registrarPersona($rut, $nombre, $apellido,
                                            $fechaNacimiento, $email) {
        
        // validar que los datos sean válidos
        
        $persona = new Persona();
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setFechaNacimiento($fechaNacimiento);
        $persona->setEmail($email);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->agregar($persona); 
        
    }
    
        
    public static function ActualizarPersona($rut, $nombre, $apellido,
                                            $fechaNacimiento, $email) {
        
        // validar que los datos sean válidos
        
        $persona = new Persona();
        $persona->setRut($rut);
        $persona->setNombre($nombre);
        $persona->setApellido($apellido);
        $persona->setFechaNacimiento($fechaNacimiento);
        $persona->setEmail($email);
        
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->actualizar($persona); 
        
    }
    
    
    
    
    public static function EliminarPersona($rut) {
        
        // validar que los datos sean válidos
    
        $conexion = ConexionDB::getConexion();
        $daoPersona = new PersonaDAO($conexion);
        
        return $daoPersona->eliminar($rut); 
        
    }
}
