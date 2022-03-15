<?php

echo PHP_EOL;

// VARIABLE SCOPE

/*
    Di PHP, kita bisa membuat variable dimanapun yang kita mau

    Scope Variable adalah bagian mana saja sebuah variable bisa diakses

    PHP memiliki tiga jenis variable scope

    - global scope
    - local scope
    - static scope
*/

/*
    Global Scope

    - Variable yang dibuat diluar function memiliki scope global
    - Variable di scope global hanya bisa diakses dari luar function
    - Artinya di dalam function, kita tidak bisa mengakses variable di global scope
*/

// CONTOH VARIABLE GLOBAL SCOPE

echo "==== VARIABLE GLOBAL SCOPE ====" . PHP_EOL . PHP_EOL;

// $name = "Doni"; // Global scope

// function sayName()
// {
//     echo $name; // error
//     // semua yang ada di global scope(diluar function), tidak bisa diakses di dalam function
// }

// sayName();



/*
    Local Scope

    - Variable yang dibuat di dalam function memiliki scope local
    - Variable di scope local hanya bisa diakses dari dalam function itu sendiri
    - Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
*/

echo "==== VARIABLE LOCAL SCOPE ====" . PHP_EOL . PHP_EOL;

function createName()
{
    $name = "Eko"; // local scope
}

createName();
echo $name; // error


// sebelum ke static scope kita akan bahas di php yang namanya global keyword

/*  
    Global Keyword

    - Namun jika kita ingin mengakses variable diluar function(global scope) dari dalam function,
    kita bisa menggunakan kata kunci global

    - Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function
*/

echo "==== GLOBAL KEYWORD ====" . PHP_EOL . PHP_EOL;

$name = "Doni"; // global scope

function sayName()
{
    global $name; // global keyword
    echo "Hello $name" . PHP_EOL; // jadi disini bisa mengakses variable global scope, yaitu variable $name
}

sayName();


/*
    $GLOBALS Variable

    - Selain menggunakan global keyword, setiap variable yang dibuat di global scope,
    secara otomatis akan disimpan di dalam array $GLOBALS oleh PHP

    - Jadi kita bisa menggunakan $GLOBALS variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable
    - $GLOBALS adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun
*/
echo "==== GLOBALS VARIABLE ====" . PHP_EOL . PHP_EOL;

$nama = "Doni"; // global scope

function sayNama()
{
    global $nama; // global keyword
    echo "Hello $nama" . PHP_EOL; // jadi disini bisa mengakses variable global scope, yaitu variable $name

    // $GLOBALS VARIABLE
    echo  $GLOBALS["nama"] . PHP_EOL; // untuk mengakses global scope, bisa menggunakan GLOBALS VARIABLE
    echo "Hello {$GLOBALS["nama"]}" . PHP_EOL;

}

sayNama();

// var_dump($GLOBALS); // isi globals itu adalah array, menampung variable global
// jika kita membuat variable global, otomatis akan memasukkan di dalam array $GLOBALS
// $GLOBALS["nama"] = "Doni";




/*
    STATIC SCOPE

    - Secara default local variable itu siklus hidupnya hanya sebatas function nya dieksekusi
    - Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
    - PHP memiliki scope yang bernama static
    - Static scope hanya bisa di set ke local variable
    - Saat kita membuat sebuah local variable menjadi static,
    maka siklus  hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi

    - Artinya jika function tersebut  dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya
*/

echo "==== STATIC SCOPE ====" . PHP_EOL . PHP_EOL;

function increment()
{
    static $counter = 1; // jika tidak memakai static, maka saat memanggil function increment yg dibawah,
    // akan menghasilkan 1
    // kenapa menghasilkan 1, karena saat memanggil lagi, variable sebelumnya sudah hilang

    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();

