<?php

$name = "Eko";
$age = 19;

echo "Name : ";
echo $name;
echo "\n";
echo "Age : ";
echo $age;
echo "\n";
// variable variables, dipakai jika perlu saja, biasanya tidak perlu

$contoh = "reo";
$$contoh = "saputro";

echo "Contoh : ";
echo $contoh;
echo "\n";

echo "reo : ";
echo $reo;