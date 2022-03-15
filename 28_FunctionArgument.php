<?php

// FUNCTION ARGUMENT

// Bisa mengirim informasi ke function yang ingin kita panggil
// untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
// cara membuat argument sama seperti cara membuat variabel
// argument ditempatkan di dalam kurung() di deklarasikan function
// argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma


function sayHello($name, $lastname)
{
    echo "Hello $name $lastname" . PHP_EOL;
}

sayHello("Budi", "Sudarsono");
sayHello("Doni", "Saputra");



// DEFAULT ARGUMENT VALUE

// PHP mendukung default argument value
// Fitur ini memungkinkan jika ketika memanggil function tidak memasukkan parameter,
// kita bisa menentukan data default nya apa
echo "=== DEFAULT ARGUMENT VALUE ===" . PHP_EOL . PHP_EOL;

function sayHi($name, $lastname = "Anonymous") 
{
    // jika parameter lastname tidak diisi saat dipanggil, yang dikirimkan adalah anonymous
    // tetapi jika parameter tersebut diisi, yang dipanggil adalah yang diisi saat function dipanggil
    // lebih baik default argument value nya string kosong ("")
    echo "Hello $name $lastname" . PHP_EOL;
}

sayHi("Budi");
sayHi("Doni", "Saputra");

// KESALAHAN DEFAULT ARGUMENT VALUE

// Default argument value bisa disimpan argument manapun
// namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna

function nama($name = "", $lastname) 
{
    echo "Hello $name $lastname" . PHP_EOL;
}

// nama("Budi"); // argument budi tetap dikirimkan ke variabel $name
// lebih baik seperti ini jika ingin parameter pertama kosong
nama("", "Salmanan");
nama("Doni", "Saputra");
// tidak bisa nama(, "Saputra"), tidak bisa parameter 1 kosong
// JADI DEFAULT ARGUMENT BERGUNA UNTUK PARAMETER BELAKANG



// TYPE DECLARATION

// Sama seperti variabel, argument di PHP bisa kita masukkan data yang dinamis
// Kadang terlalu dinamis juga menyulitkan jika teryanta kita hanya ingin membuat function yang menggunakan argument tipe data tertentu
// Untungnya di PHP, kita bisa menambahkan type data di argument, 
// sehingga PHP akan melakukan pengecekan ketika ingin mengirim value ke function tersebut
// jika tipe data value tidak sesuai, maka akan terjadi error
// Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, 
// misal jika kita menggunakan tipe int, tapi kita mengirim string, 
// maka PHP akan otomatis mengkonversi string tersebut menjadi int

// VALID TYPES(1)
// Type -> Class/ Interface, parameter harus tipe class
// Type -> self, parameter harus sama dengan class dimana function ini dibuat
// Type -> array, parameter harus array
// Type -> callable, parameter harus callable
// Type -> bool, parameter harus boolean
// Type -> float, parameter harus floating point
// Type -> int,parameter harus integer number
// Type -> string,parameter harus string
// Type -> interable,parameter harus array atau tipe Traversable
// Type -> object,parameter harus object

echo "==== TYPE DECLARATION ====" . PHP_EOL . PHP_EOL;

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100"); // akan dicoba konversi otomatis oleh PHP
sum(100, 100);
sum(true, false); // akan dicoba konversi otomatis oleh PHP, true 1 false 0
// sum([], []); // array tidak bisa dikonversi


// VARIABLE-LENGTH ARGUMENT LIST

// Variabel-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
// Variabel-length argument list secara otomatis akan membuat argument tersebut menjadi array,
// namun kita tidak perlu manual mengirim array ke functionnya
// variabel-length argument list hanya bisa dilakukan di argument posisi terakhir
// untuk membuat variabel-length argument list, kita bisa menggunakan tanda ...(titik tiga kali) sebelum nama argument

// VARIABLE-LENGTH ARGUMENT LIST MENGGUNAKAN ARRAY

echo "==== MENGGUNAKAN ARRAY ====" . PHP_EOL . PHP_EOL;

function sumAll(array $values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll([1,2,3,4,5]);

// VARIABLE-LENGTH ARGUMENT LIST TANPA ARRAY
echo "==== TANPA ARRAY ====" . PHP_EOL . PHP_EOL;

function all(...$values)
{
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total " . implode(",", $values) . " = $total" . PHP_EOL;
}
$values = [1,2,3,4,5]; // misal sudah membuat array
all(1,2,3,4,5);
all(...$values); // saat memanggil function, valuenya tambahkan ...(titik tiga kali)
