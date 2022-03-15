<?php
echo PHP_EOL;
// REQUIRE DAN INCLUDE

/*
    Saat membuat aplikasi, ada baiknya tidak dibuat dalalm satu file
    Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di satu file
    PHP memiliki function require dan include yang bisa kita gunakan untuk mengambil file php lain
    Pada require, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
    Pada include, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

*/

require "MyFunction.php";

echo sayHello("Doni", "Saputra") . PHP_EOL . PHP_EOL;



// POSISI REQUIRE DAN INCLUDE

/*
    Kode program PHP akan dibaca dari atas ke bawah,
    oleh karena itu pastika posisi require dam include sesuai yang kita inginkan

    Misal jika sampai kita salah menempatkan posisi require dan include,
    bisa jadi kita malah memanggil function yang belum ada
*/

// contoh

// echo sayHello("Doni", "Saputra");
// require "MyFunction.php";

// require nya malah dibawah, jadi require dan include harus berada di atas


// REQUIRE_ONCE DAN INCLUDE_ONCE

/*
    Function require dan include akan selalu memanggil file yang kita inginkan
    Jika kita beberapa kali menggunakan require dan include file yang sama, 
    maka file tersebut akan berkali - kali pula kita ambil

    Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat defini function,
    sehingga jika diambil berkali-kali akan menyebabkan error redeclare function

    Untungnya di PHP terdapat function require_once dan include_once,
    function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

*/

// CONTOH INCLUDE BERKALI - KALI

// include "MyFunction.php";
// include "MyFunction.php"; // sudah membuat function sebelumnya dengan include file yang sama
// jadi tidak boleh memanggil file yang sama, karena functionnya juga sama

// echo sayHello("Rian", "Saputra");

// Maka harus seperti ini jika ingin memanggil file lebih dari sekali


include_once "MyFunction.php"; // ini belum pernah di load, maka dari itu akan di load
include_once "MyFunction.php"; // karna sudah di load, maka dia tidak akan di load lagi

echo sayHello("Rian", "Saputra");