<?php

$edades = [
    "Ana" => 10,
    "Mario" => 20,
    "Julian" => 17,
    "Javier" => 50,
    "Jose" => 27,
    "Jorge" => 33,
    "Maria" => 60
];

$edades2 = array(
    "Ana" => 10,
    "Mario" => 20,
    "Julian" => 17,
    "Javier" => 50,
    "Jose" => 27,
    "Jorge" => 33,
    "Maria" => 60
);


echo "<pre>";
print_r($edades);
echo "</pre>";

$edades2["Laura"] = 23;

echo "<pre>";
print_r($edades2);
echo "</pre>";

echo "El numero total de nombres es: ". count($edades). "<br>";
echo "El ultimo nombre es: ". end($edades). "<br>";

array_pop($edades);
echo "<pre>";
print_r($edades);
echo "</pre>";

unset($edades["Ana"]);
echo "<pre>";
print_r($edades);
echo "</pre>";