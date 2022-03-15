<?php

// String single quote

echo 'Name : ';
echo 'Reonaldi Saputro';
echo "\n";

// String double quote

echo "Name : ";
echo "Reonaldi\t Saputro\n";

// Heredoc
// echo <<<REO (REO adalah tags nya,bebas namun biasanya pake upper case)

echo <<<REO
ini adalah contoh string yang sangat
panjang, dan juga gak perlu ngetik ENTER secara
manual, "bisa quote" juga
REO;
echo "\n";
echo "===heredoc kedua====\n";

echo <<<TEXT
selamat belajar PHP
kita belajar tipde data string
ini adalah cara ke-3 membuat string
menggunakan heredoc
TEXT;


// NOWDOC 

// nowdoc mirip seperti heredoc
// yang membedakan adalah nowdoc tidak memiliki kemampuan parsing
// seperti di heredoc atau Double Quote.
echo "\n";
echo "===NOWDOC===\n";
echo <<<'REO'
ini adalah contoh string yang sangat panjang, dan
tidak perlu mengetik ENTER secara manual
"bisa quote" juga
REO;