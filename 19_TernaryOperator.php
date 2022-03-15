<?php
echo PHP_EOL;

// INI JIKA MEMAKAI IF STATEMENT
// $gender = "PRIA";

// $hi = null;
// if ($gender == "PRIA") {
//     $hi = "HI bro" . PHP_EOL;
// } else {
//     $hi = "Hi nona";
// }

// echo $hi . PHP_EOL;
// ====================================

// TERNARY OPERATOR
// Kadang ada kasus kita butuh pengecekan kondisi menggunakan if statement,
// lalu jika benar kita ingin memberi nilai variabel dengan nilai X dan jika salah nilai Y
// Penggunaan if statement pada kasus seperti ini, bisa dipersingkat menggunakan ternary
// Ternary menggunakan kata kunci ? dan :

$gender = "PRIA";
$hi = $gender == "PRIA" ? "hi bro" : "hi nona"; // jadi jika true yang ?, kalau else yang :

echo $hi . PHP_EOL;

