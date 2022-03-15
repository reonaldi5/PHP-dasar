<?php

echo PHP_EOL;

// VARIABEL FUNCTION

// PHP mendukung konsep yang bernama variable function
// Variable function adalah kemampuan memanggil function dari value yang terdapat di sebuah variable
// Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariabel(),
// jika ingin menambahkan argument, kita bisa menggunakan $namaVariabel(argument)

function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$FunctionYangAkanDipanggil = "foo";
$FunctionYangAkanDipanggil(); // variabel ini akan memanggil function yang bernama foo
// karena nama functionnya adalah foo, maka dari itu  variabel tersebut akan memanggil blok function tersebut

$FunctionYangAkanDipanggil = "bar";
$FunctionYangAkanDipanggil();

// PENGGUNAAN VARIABLE FUNCTION

// mengirim function ke argument