<?php

$nombres = ["Fabio","Julian","Anabel"];
echo "<pre>";
print_r($nombres);
echo "</pre>";

$nombres[]= "Pedro";

echo "<pre>";
print_r($nombres);
echo "</pre>";

echo "El numero total de nombres es: ". count($nombres). "<br>";

echo "El nombre indice 2 es: ". $nombres[2]. "<br>";
echo "El ultimo nombre es: ". end($nombres). "<br>";

sort($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";

array_pop($nombres);
echo "<pre>";
print_r($nombres);
echo "</pre>";

unset($nombre[1]);
echo "<pre>";
print_r($nombres);
echo "</pre>";