<?php
include 'includes/header.php';

// De esta forma se crean Clases

class Empleado {

}

// De esta manera instanciamos una clases con New

$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;
$empleado4 = new Empleado;

echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";

echo "<pre>";
var_dump($empleado4);
echo "</pre>";