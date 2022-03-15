<?php

echo PHP_EOL;

// FUNCTION RETURN VALUE

// Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin,
// kita bisa membuat function mengembalikan nilai
// Dan di dalam blok function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return,
// lalu diikuti dengan data yang ingin dihasilkan 
// kita hanya bisa menghasilkan 1 data di sebuah function , tidak bisa lebih dari satu

function sum(int $first, int $second)
{
    return $first + $second;
}

$total = sum(10,10); // jadi function nya bisa disimpan ke dalam variabel
var_dump($total);

$total = sum(20,20);
var_dump($total);


function getFinalValue(int $value)
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }

    // echo "Hello world" -> ini tidak akan dieksekusi, karena sudah ada return di func, return akan balik lg ke func
}

$score = getFinalValue(90);
var_dump($score);


// RETURN TYPE DECLARATIONS

// Sama seperti pada argument , pada return value pun kita bisa mendeklarasikan tipe datanya
// Hal ini selain mempermudah kita ketika membaca tipe data kembalian function,
// bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
// Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa tambahkan : (titik dua) diikuti tipe data kembaliannya

echo "===== RETURN TYPE DECLARATIONS =====" . PHP_EOL . PHP_EOL;

function sumAll(int $first, int $second) :int
{
    $result = $first + $second;
    return $result; // jika balikkan nya seprti array, maka error, tetapi jika seperti string angka, maka akan dikonversi otomatis(type juggling)
    // jadi lebih terjaga tipe kembalian datanya jika ditentutkan di functionnya
}

$total = sumAll("10",10); // jadi function nya bisa disimpan ke dalam variabel
var_dump($total);

$total = sumAll(20,20);
var_dump($total);

function getValue(int $value) :string
{
    if ($value >= 80){
        return "A";
    } else if ($value >= 70){
        return "B";
    } else if ($value >= 60){
        return "C";
    } else if ($value >= 50){
        return "D";
    } else {
        return "E";
    }

    // echo "Hello world" -> ini tidak akan dieksekusi, karena sudah ada return di func, return akan balik lg ke func
}

$score = getValue(90);
var_dump($score);
