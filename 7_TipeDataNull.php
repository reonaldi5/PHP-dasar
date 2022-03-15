<?php

$name = "Reonaldi";
$name = null; //ini bisa uppercase atau lower case

$age = null;

echo "Nama : $name \n";
echo "Umur : $age \n";

// mengecek apakah data yang ada di variabel itu null atau tidak

// kita bisa menggunakan function is_null($variable),
// maka hasilnya akan boolean

echo "is name null? ";
// echo is_null($name);
var_dump(is_null($name));
echo "\n";

// jika memang tidak ada nama variabel nya, makanya error
// is_null($tidak_ada); // ini akan error, undefined

// menghapus variabel yang sudah digunakan
// menggunakan function u

$contoh = "Reonaldi";
unset($contoh);

$name = "saputro";

// echo $contoh; ini error, karena variabel sudah dihapus

// agar lebih aman, menggunakan function isset($variable) untuk mengecek
// apakah variabel ada atau tidak,null ada atau tidak
echo 'variabel $contoh ada atau tidak : ';
var_dump(isset($contoh));
echo "\n";
echo 'variabel $name ada atau tidak : ';
var_dump(isset($name));