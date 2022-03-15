<?php

//ini bisa mempersingkat ketika ingin menaikkan data atau menurunkan data

// $a++ -> post increment
// ++$aa -> pre increment 

$a = 10;
// $a++;
// $a = $a + 1;


$b = ++$a; // ini akan $b bernilai 11;
// $a = $a + 1;
// $b = $a;


// $b = $a++; variabel $b akan bernilai 10
// $b = $a;
// $a = $a + 1;

var_dump($a);
var_dump($b);