<?php
use Empleado as GlobalEmpleado;

include 'includes/header.php';

// Tipado
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    
    public function __construct(string $nombre, string $apellido, string $departamento, string $email, $codigo)
    {
        $this->nombre = $nombre;   
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}

$luis = new Empleado('Luis', 'Guillen', 'Tecnologias de la Informacion', 'luisguillen290301@gmail.com',2001);
$estefania = new Empleado("Silvana", 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);

echo "<pre>";
var_dump($luis);
echo "</pre><br>";

echo "<pre>";
var_dump($estefania);
echo "</pre><br>";