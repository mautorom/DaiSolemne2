<?php

/**
 * Description of Persona
 *
 * @author CETECOM
 */
class Persona {
    private $nombre;
    private $fechaNacimiento;
    
    public function __construct() {
        
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

}
