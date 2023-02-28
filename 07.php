<!-- Constructores -->
<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

// Metodos
class Empleado  {
    public $nombre;
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
        /* Llamamos al mentodo de la siguiente manera */
/*         $this->nombreEmpleado(); */
    }
    /*   */
    public function nombreEmpleado()
    {
        echo $this->nombre . " " . $this->apellido;
    }

    public function departamentoEmpleado()
    {
        return $this->departamento;
    }
}

$luis = new GlobalEmpleado('Luis', 'Guillen ', 'Tecnologias de la Información', 'luisguillen290301@gmail.com',2001);
/* $luis-> nombreEmpleado(); */
$estefania = new GlobalEmpleado('Silvana', 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);
/* $estefania-> nombreEmpleado(); */

echo "<pre>";
var_dump($luis);
echo "</pre><br>";

echo "<pre>";
var_dump($estefania);
echo "</pre><br>";

echo $luis->nombreEmpleado();
echo $estefania->nombreEmpleado();

$departamento1 = $luis->departamentoEmpleado();

echo $departamento1;

/* Metodos son Funciones dentro de Clases */