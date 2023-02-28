<!-- Constructores -->
<?php

use Empleado as GlobalEmpleado;

include 'includes/header.php';

/* Constructores property Promotion */
class Empleado {
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ){}
}

$luis = new GlobalEmpleado('Luis', 'Guillen ', 'Tecnologias de la Información', 'luisguillen290301@gmail.com',2001);
$estefania = new GlobalEmpleado('Silvana', 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);

echo "<pre>";
var_dump($luis);
echo "</pre><br>";

echo "<pre>";
var_dump($estefania);
echo "</pre><br>";