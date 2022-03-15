<?php
echo PHP_EOL;

// CALLBACK FUNCTION

// Callback adalah sebuah mekanisme function memanggil function lainnya sesuai dengan yang diberikan argument
// Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
// Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable
// Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments)

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name); // ini sama kaya nge call $filter($name), namun hanya cara saja yg beda
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Doni", function( string $name) : string {
    return strtoupper($name); 
});
sayHello("Doni", fn($name) => strtoupper($name));
sayHello("Doni", "strtoupper");
sayHello("Doni", "strtolower");

// karena $filter callable, bisa ngirim parameternya string, anonymous function dan arrow function

