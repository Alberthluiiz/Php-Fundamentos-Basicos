<?php
include 'includes/header.php';


// Atributos de una clase
class Empleado {
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;
}
/* Instancia de empleado */

$empleado = new Empleado;

$empleado->nombre = "Luis Alberto";
$empleado->apellido = "Guillen Yaucan";
$empleado->departamento = "Desarrollo de Software";
$empleado->email = "luisguillen@gmail.com";
$empleado->codigo = "1727525584";

echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado2 = new Empleado;

$empleado2->nombre = "Silvana Estefania";
$empleado2->apellido = "Casilla Capuz";
$empleado2->departamento = "Contabilidad y Auditoria";
$empleado2->email = "Silvanacasillas@gmnail.com";
$empleado2->codigo = "0979238796";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

