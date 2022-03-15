<?php

// OPERATOR ARRAY

// di php array memiliki operator khusus
// mungkin terlihat mirip dengan operator sebelumnya, tapi cara kerjanya sedikit berbeda

// jika $a dan $b adalah array

// $a + $b -> ini disebut union, artinya menggabungkan array $a dan $b

// $a == $b -> Equality(mengecek, tidak peduli posisi key-value), artinya true jika $a dan $b memiliki key-value sama
// $a === $b -> Identity, true jika $a dan $b memiliki key-value dan posisi sama

// $a != $b -> Inequality, true jika $a dan $b tidak sama
// $a <> $b Inequality, true jika $a dan $b tidak sama

// $a !== $b Nonidentity, true jika $a dan $b tidak identik





// OPERASI ARRAY UNION

$first = [
    "first_name" => "Reonaldi"
];

$last = [
    "first_name" => "budi", // apa yang terjadi jika juga ada key first name, yang diambil key yang variabel pertama jika di print
    "last_name" => "Saputro"

];

// var_dump($first + $last); akan menjadi array baru
var_dump($first + $last); // jika ada key yang sama di variabel kedua, maka yang diambil adalah variabel pertama
// jika seperti ini var_dump($last + $first); -> jika ada key yang sama, maka variabel last yang diambil, karena $last variabel pertama




// OPERASI ARRAY PERBANDINGAN

$a = [
    "first_name" => "Reonaldi",
    "last_name" => "Saputro"
];

$b = [
    "last_name" => "Saputro",
    "first_name" => "Reonaldi"
];

var_dump($a == $b);
var_dump($a === $b);

