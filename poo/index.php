<?php
require_once "personas.php";

echo "<h1> programacion orientad a objetos </h1>";

$personas = new personas("Ana",25,"Femenino");

echo "Nombre: ". $personas->getNombre()."Edad: ". $personas->getEdad()."Genero: ". $personas->getGenero();

$empleado = new Empleado("Fabian", 24, "Masculino", "E001", 5000000);
echo "Numero: ". $empleado -> getNumeroEmpleado();

$empleado -> mostrarInformacion();