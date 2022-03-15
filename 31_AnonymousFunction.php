<?php

echo PHP_EOL;

// ANONYMOUS FUNCTION 

// Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
// Anonymous function biasanya digunakan sebagai argument atau sebagai value di variabel
// Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

$sayHello = function (string $name){ // tidak ada nama function
    // simpan function ke dalam variabel,
    // seakan akan seperti variable function
    echo "Hello $name" . PHP_EOL . PHP_EOL;
}; // statement, mka perlu titik koma

$sayHello("Doni");
$sayHello("Budi");


// ANONYMOUS FUNCTION SEBAGAI ARGUMENT

echo "==== ANONYMOUS FUNCTION SEBAGAI ARGUMENT ====" . PHP_EOL . PHP_EOL;

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL . PHP_EOL;
}

sayGoodBye("Doni", function(string $name):string{
    return strtoupper($name);
});

// function argument nya bisa di simpan variabel

$filterFunction =  function(string $name):string{
    return strtoupper($name);
};

sayGoodBye("Budi", $filterFunction);



// MENGAKSES VARIABLE DI LUAR CLOSURE

// Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
// Jika kita ingin menggunakan variabel yang terdapat diluar anonymous function,
// kita perlu secara explicit menyebutkannya menggunakan kata kunci use lalu diikuti variabel - variabel yang ingin kita gunakan

echo "==== MENGAKSES VARIABLE DI LUAR CLOSURE ====" . PHP_EOL . PHP_EOL;

$firstName = "Doni";
$lastName = "Saputra";

$sayHelloDoni = function () use ($firstName, $lastName) { // tidak bisa mengakses variabel diluar anonymous function, maka dari itu menggunakan use
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHelloDoni();

$firstName = "Budi"; // tidak berubah karena variabel akan menggunakan variabel yang sebelum function tersebut
$lastName = "Nugraha";
// jika ingin merubah, harus variable diatas function
$sayHelloDoni();
