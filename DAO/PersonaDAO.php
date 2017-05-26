<?php

include_once "/GenericDAO.php";
include_once "/../model/Persona.php";

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
        
    }

    public function agregar($registro) {
        /*@var $registro Persona */
        
        $query = "INSERT INTO persona (nombre,fecha_nacimiento) VALUES (:nombre, :fecha_nacimiento)";
        
        $sentencia = $this->conexion->prepare($query);
        
        $nombre = $registro->getNombre();
        $fechaNacimiento = $registro->getFechaNacimiento();       
        
        $sentencia->bindParam(':nombre', $nombre);        
        $sentencia->bindParam(':fecha_nacimiento', $fechaNacimiento);      
              
        return $sentencia->execute();

    }

    public function buscarPorId($idRegistro) {
        
    }

    public function eliminar($idRegistro) {
        
    }

    public function listarTodos() {
        $listado = array();
        
        $registros = $this->conexion->query("SELECT * FROM persona");
        
        if($registros != null) {
            foreach($registros as $fila) {
                $persona = new Persona();
//                $persona->setRut($fila["rut"]);
                $persona->setNombre($fila["nombre"]);
//                $persona->setApellido($fila["apellido"]);
                $persona->setFechaNacimiento($fila["fecha_nacimiento"]);
//                $persona->setEmail($fila["email"]);

                array_push($listado, $persona);
            }
        }
        
        return $listado;
    }

}
