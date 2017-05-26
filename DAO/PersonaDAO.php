<?php

include_once __DIR__."/GenericDAO.php";
include_once __DIR__."/../model/Persona.php";

/**
 * Description of PersonaDAO
 *
 * @author CETECOM
 */
class PersonaDAO implements GenericDAO {
    
    /**
     *
     * @var PDO 
     */
    private $conexion;
    
    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    
    public function actualizar($registro) {
        

          $query = "update persona "
                  . "set nombre = :nombre, "
                  . "apellido = :apellido, "
                  . "fecha_nacimiento = :fecha_nacimiento, "
                  . "email = :email "
                  . "where rut =  :rut  ";

        $sentencia = $this->conexion->prepare($query);

        $rut = $registro->getRut();
        $nombre = $registro->getNombre();
        $apellido = $registro->getApellido();
        $fechaNacimiento = $registro->getFechaNacimiento();
        $email = $registro->getEmail();

        
        $sentencia->bindParam(':rut', $rut);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':apellido', $apellido);
        $sentencia->bindParam(':fecha_nacimiento', $fechaNacimiento);
        $sentencia->bindParam(':email', $email);        
              
        return $sentencia->execute();
    }

    public function agregar($registro) {
        /*@var $registro Persona */
        
        $query = "INSERT INTO persona (rut,nombre,apellido,fecha_nacimiento, email) VALUES (:rut, :nombre, :apellido, :fecha_nacimiento, :email) ";
        
        $sentencia = $this->conexion->prepare($query);
        
        $rut = $registro->getRut();
        $nombre = $registro->getNombre();
        $apellido = $registro->getApellido();
        $fechaNacimiento = $registro->getFechaNacimiento();
        $email = $registro->getEmail();
        
        $sentencia->bindParam(':rut', $rut);
        $sentencia->bindParam(':nombre', $nombre);
        $sentencia->bindParam(':apellido', $apellido);
        $sentencia->bindParam(':fecha_nacimiento', $fechaNacimiento);
        $sentencia->bindParam(':email', $email);        
              
        return $sentencia->execute();

    }

    public function buscarPorId($idRegistro) {

        $registros = $this->conexion->query("SELECT * FROM persona where rut = '".$idRegistro."' ");
        $persona = new Persona();
        
        if($registros != null) {
            foreach($registros as $fila) {
                
                $persona->setRut($fila["rut"]);
                $persona->setNombre($fila["nombre"]);
                $persona->setApellido($fila["apellido"]);
                $persona->setFechaNacimiento($fila["fecha_nacimiento"]);
                $persona->setEmail($fila["email"]);

                
            }
        }
        
        return $persona;  
        
    }

    public function eliminar($idRegistro) {
             
        $query = "delete from persona where rut = '".$idRegistro."' "; 
        
        $sentencia = $this->conexion->query($query);
        return $sentencia->execute();
    }

    public function listarTodos() {
        $listado = array();
        
        $registros = $this->conexion->query("SELECT * FROM persona");
        
        if($registros != null) {
            foreach($registros as $fila) {
                $persona = new Persona();
                $persona->setRut($fila["rut"]);
                $persona->setNombre($fila["nombre"]);
                $persona->setApellido($fila["apellido"]);
                $persona->setFechaNacimiento($fila["fecha_nacimiento"]);
                $persona->setEmail($fila["email"]);

                array_push($listado, $persona);
            }
        }
        
        return $listado;
    }

}
