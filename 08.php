<?php
include 'includes/header.php';

// Modificadores de Acceso
class Empleado  {

    /*Public, acceso en cualquier lugar (Clase u Objecto) */
    /* protected, acceso en la clase */
    /* public, Private, Protected */

    protected $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function cambiarNombre($nombre)
    {
        $this-> nombre = $nombre;
    }
}

$estefania = new Empleado('Silvana', 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);

$estefania->cambiarNombre("Un Nombre Nuevo");

echo $estefania->obtenerNombre();

echo "<pre>";
var_dump($estefania);
echo "</pre><br>";