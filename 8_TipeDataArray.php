<?php

// array php bisa berisikan data dengan jenis berbeda-beda
// mungkin klo di c atau java, hanya menampung jenis satu data

// ARRAY PHP

$values = array(1, 2, 3, 4, 7.5);
var_dump($values);

$names = ["Reo", "naldi", "saputro"];
var_dump($names);

// OPERASI ARRAY PHP

// $array[index] -> mengakses data array pd no indeks
// $array[index] = value -> mengubah data di array pd no indeks dengan value baru
// $array[] = value -> menambah data di array pada posisi paling belakang
// unset($array[index]) -> menghapus data di array, index otomatis hilang di array
// count($array) -> mengambi total data di array

// mengakses data di array
var_dump($names[0]);

// mengubah data di array
$names[0] = "budi";
var_dump($names);

// menghapus data di array
unset($names[1]);
var_dump($names);

// menambahkan data di array
$names[] = "Reo";
var_dump($names);

// mengambil total data di array
var_dump(count($names));

// MAP ARRAY
// jadi bisa mengakses array selain menggunakan indeks

$map = array(
    "id" => "reo", // harus unik, jika key nya sudah pake id, key lain jgn pake id lg
    "name" => "Reonaldi Saputro",
    "age" => "20"
);
var_dump($map);
var_dump($map["name"]);

$data = [
    "id" => 001,
    "name" => "saputro",
    "age" => "25"
];
var_dump($data);

// ARRAY DI DALAM ARRAY

$nested = array(
    "id" => 001,
    "name" => "saputro",
    "age" => "25",
    "address" => [
        "city" => "Tangsel",
        "country" => "Indonesia"
    ]

);
var_dump($nested["address"]["city"]);

