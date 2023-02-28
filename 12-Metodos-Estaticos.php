<?php
include 'includes/header.php';

// Metodos Estaticos -> Son los que no requieren un a Instancia
class Empleado  {

    /*Public, acceso en cualquier lugar (Clase u Objecto) */
    /* protected, acceso en la clase */
    /* public, Private, Protected */

    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
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

    public static function ObtenerEmpleado()
    {
        echo "Desde metodo Estatico";
    }

    public static function getNombre()
    {
        return self::$nombre;
    }
}


Empleado::ObtenerEmpleado();
echo "<pre>";

$estefania = new Empleado('Silvana', 'Casillas', 'Contabilidad', 'Silvana@gmail.com',2002);

echo $estefania::getNombre();

echo "<pre>";
var_dump($estefania);
echo "</pre><br>";