<?php

echo PHP_EOL;

// FUNCTION

// Function adalah block kode program yang akan berjalan saat kita panggil
// sebelumnya kita sudah menggunakan function isset(), count(), dan lain-lain.
// untuk membuat function di PHP, kita bisa menggunakan kata kunci function,
// lalu diikuti dengan nama function , kurung(), dan diakhiri dengan blok
// nama function tidak boleh ada spasi
// kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung
// di bahasa pemrograman lain, function juga disebut dengan method


function sayHello()
{
    echo "Hello Function " . PHP_EOL;
} // Cara memanggil function, panggil dengan nama_function()

sayHello();
sayHello();


// LOKASI FUNCTION

// PHP sangat fleksibel dalam pembuatan function
// Tidak seperti bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
// Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
// Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, 
// maka function tersebut tidak bisa digunakan

echo "==== LOKASI FUNCTION ====" . PHP_EOL . PHP_EOL;

$buat = false;

if ($buat) {
    function sayHello()
    {
        echo "Hello Function " . PHP_EOL;
    }
}

sayHello();
sayHello();


