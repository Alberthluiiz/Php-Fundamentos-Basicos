<?php
include 'includes/header.php';

/* Herencia */
class Empleado {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $codigo;
    protected $departamento;

    public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento)
    {  /* Asignar Atributos - Constructores*/
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->telefono=$telefono;
        $this->codigo=$codigo;
        $this->departamento=$departamento;
    }

    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }
}

class Proveedor {
    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $empresa;

    public function __construct($nombre, $apellido, $email, $telefono, $empresa)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->email=$email;
        $this->telefono=$telefono;
        $this->empresa=$empresa;
    }

    public function mostrarInformacion ()
    {
        echo "Nombre: " . $this->nombre . " " . $this->apellido . " Email: " . $this->email;
    }
}
/* Objetos */
$empleado = new Empleado('Silvana', 'Casillas', 'silvanacasillas@gmail.com', '0979238796', '005', 'ITB');



$proveedor = new Proveedor('Luis', 'Guillen', 'luisguillen@gmail.com', '0962162814', 'Desarrollo de Software');


echo "<pre>";
var_dump($empleado);
echo "<pre>";

echo "<pre>";
var_dump($proveedor);
echo "<pre>";

$empleado->mostrarInformacion();

echo "<br>";

$proveedor->mostrarInformacion();