<?php
include 'includes/header.php';

/* Clases Abstractas -> es una Clase que no se Puede Instanciar*/
abstract class Persona {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;


    public function __construct($nombre, $apellido, $email, $telefono)
    {  /* Asignar Atributos - Constructores*/
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->telefono=$telefono;
    }
    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }

    public function getTelefono ()
    {
        return $this->telefono;
    }
}

class Empleado extends Persona {
    
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {  /* Asignar Atributos - Constructores*/
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->codigo=$codigo;
        $this->departamento=$departamento;
    }
}

class Proveedor extends Persona {
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        parent::__construct($nombre, $apellido, $email, $telefono);
        $this->empresa=$empresa;
    }

    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email . "De la Empresa: " . $this->empresa;
    }
}

/* $persona = new Persona('Name', 'First Name', 'lasname@gmail.com', '0961380828'); -> no se puede instanciar una clase*/
$empleado = new Empleado('Silvana', 'Casillas', 'silvanacasillas@gmail.com', '0979238796', '005', 'ITB');
$proveedor = new Proveedor('Luis', 'Guillen', 'luisguillen@gmail.com', '0962162814', 'Desarrollo de Software');

/* echo "<pre>"; -> no se puede instanciar una clase abstracta
var_dump($persona);
echo "<pre>"; */

echo "<pre>";
var_dump($empleado);
echo "<pre>";

echo "<pre>";
var_dump($proveedor);
echo "<pre>";

$empleado->mostrarInformacion();

echo "<br>";

$proveedor->mostrarInformacion();

echo "<br>";

echo $proveedor->getTelefono();