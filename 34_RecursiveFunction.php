<?php

echo PHP_EOL;
// RECURSIVE FUNCTION

// Recursive Function adalah kemampuan function memanggil function dirinya sendiri
// Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function,
// contohnya kasuh factorial


// KODE FACTORIAL MENGGUNAKAN LOOP

echo "==== FAKTORIAL MENGGUNAKAN LOOPING ====" . PHP_EOL . PHP_EOL;

function factorialLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++){
        // $total = $total * $i
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));


echo "==== FAKTORIAL MENGGUNAKAN REKURSIF ====" . PHP_EOL . PHP_EOL;

function factorialRecursive(int $value): int
{
    if ($value == 1){
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
        // ketika $value nya 5, berarti dikaali 5-1, lalu masuk lagi ke function atas
        // lalu masuk lagi ke return value
    }
}

var_dump(factorialRecursive(5));


// PROBLEM DENGAN RECURSIVE

// Walaupun recursive function itu sangat menarik, namun kita perlu berhati - hati
// Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow,
// yaitu error dimana memory terlalu banyak digunakan di PHP
// Kenapa problem ini bisa terjadi? Karena ketika memanggil function,
// PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain,
// maka stack akan menumpuk terus, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory besar,
// jika sudah melewati batas, maka akan terjadi error memory

// factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1)
// tumpuk"an stack ini akan disimpan di memory

// contoh

// function loop(int $value) : int
// {
//     if ($value == 0){
//         echo "End Loop" . PHP_EOL;
//     } else {
//         echo "Loop - $value" . PHP_EOL;
//         loop($value - 1);
//     }
// }

// loop(3000000);

// tergantung memory laptop masing masing