<?php

$calificaciones = [
    "Ana" => [
        "Math" =>4,
        "Historia" =>3,
        "Ingles" =>2
    ],
    "Mario" => [
        "Math" =>4,
        "Historia" =>2,
        "Ingles" =>4
    ],
    "Juan" => [
        "Math" =>3,
        "Historia" =>3,
        "Ingles" =>4
    ],
];

echo "<pre>";
print_r($calificaciones);
echo "</pre>";

echo "El numero total calificaciones es: ". count($calificaciones,COUNT_RECURSIVE). "<br>";
$calificaciones["Ana"]["Math"]=5;
echo "<pre>";
print_r($calificaciones);
echo "</pre>";