<?php
include 'includes/header.php';

// Getters y Setters
class Empleado  {

    /*Public, acceso en cualquier lugar (Clase u Objecto) */
    /* protected, acceso en la clase */
    /* public, Private, Protected */

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

/*
    Get - Para Obtener un valor
    Set - Para Modificar un valor 
*/
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this-> nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}

$estefania = new Empleado('Silvana', 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);

$estefania->setNombre("Un Nombre Nuevo");

$estefania->setCodigo("2001");
echo $estefania->getCodigo();
echo $estefania->getNombre();
