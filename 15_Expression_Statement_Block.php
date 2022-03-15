<?php

// Expression adalah bagian terpenting di PHP
// Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
// Secara sederhana , expression  adalah apapun yang memiliki nilai atau value



// CONTOH EXPRESSION SEDERHANA

// $a = 5; -> Ketika kita menuliskan "5", maka tentu itu adalah nilai ,
// oleh karena itu 5 tersebut adalah expression
// Lalu kita menulis kode $b = $a; -> $a bisa kita bilang adalah expression, karena $a adalah nilai 5


// CONTOH EXPRESSION COMPLEX

// getValue() adalah expression, karena getValue() bernilai angka 100.
// Tentang Function nanti akan dibahas lebih detail di materi Function

function getValue()
{
    return 100;
}

$value = getValue();



// STATEMENT

// Statement adalah kalimat pelengkap
// Statement berisikan execution komplit, biasanya diakhiri dengan titik koma
// walaupun tidak semua diakhiri titik koma, tetapi rata" diakhiri titik koma

$name = "Reonaldi Saputro"; // satu line ini disebut statement
// statement selalu ada expression, jadi expression adalah bagian dari statement

echo $name;

$date = new DateTime();



// BLOK

// Blok adalah kumpulan statement yang terdiri dari nol atau lebih statement
// Blok diawali dan diakhiri dengan kurung kurawal{1}