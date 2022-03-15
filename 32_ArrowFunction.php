<?php
echo PHP_EOL;

// ARROW FUNCTION

// Arraow function diperkenalkan di PHP 7.4 sebagai alternatif anonymous function yang lebih sederhana pembuatannya
// Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
// Hal yang membedakan di arrow function adalah, 
// secara otomatis variable diluar closure bisa digunakan, tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci use
// Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
// Arrow function di khususkan untuk pembuatan function yang sederhana

$firstName = "Doni";
$lastName = "Nugraha";

$sayHello = fn() => "Hello $firstName $lastName" . PHP_EOL; //ini tidak perlu return, karena ini langsung mengembalikkan

echo $sayHello();