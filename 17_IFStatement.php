<?php
echo PHP_EOL;

// IF STATEMENT 

// Dalam PHP, If adalah salah satu kunci yang digunakan untuk percabangan
// Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
// Hampir semua bahasa pemrograman mendukung If Expression

// echo "====== SYNTAX IF STATEMENT =====" . PHP_EOL . PHP_EOL;

// if (expression) // jadi jika expression true, maka statement akan dieksekusi
//     statement;

// if (expression) {
//     statement1;
//     statement2;
// }

// if (expression) {
//     statement1;
//     statement2;
// else if (expression) {
//     statement;
// }
// } else {
//     statement;
// }

echo "====== CONTOH IF STATEMENT =====" . PHP_EOL . PHP_EOL;

// ELSE STATEMENT

// Blok if akan dieksekusi ketika kondisi if bernilai true
// kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
// hal ini bisa dilakukan menggunakan else statement

// ELSE IF STATEMENT

// Untuk membuat beberapa kondisi bisa menggunakan "else if" atau "elseif", else if bisa lebih dr satu
// Jika salah satu Else If true, maka else if yang dibawahnya tidak dieksekusi

$nilai = 59;
$absen = 59;

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai Anda A" . PHP_EOL . PHP_EOL;
} elseif ($nilai >= 70 && $absen >= 70) {
    echo "Nilai Anda B" . PHP_EOL . PHP_EOL;
} elseif ($nilai >= 60 && $absen >= 60) {
    echo "Nilai Anda C" . PHP_EOL . PHP_EOL;
} elseif ($nilai >= 50 && $absen >= 50) {
    echo "Nilai Anda D" . PHP_EOL . PHP_EOL;
} else {
    echo "Maaf Anda tidak lulus, Karena Nilai Anda E" . PHP_EOL . PHP_EOL;
}


// SYNTAX ALTERNATIF

// Selain menggunakan {}, PHP juga menyediakan syntax alternatif untuk menggunakan if,
// yaitu dengan menggunakan titik dua
// namun untuk menggunakan ini, kita harus menggunakan kata kunci endif diakhir if statement
// HANYA DI PHP SEPERTINYA

echo "== IF STATEMENT DENGAN COLON(SYNTX ALTERNATIF) ==" . PHP_EOL . PHP_EOL;

// jika menggunakan alternatif, else if nya harus digabung, jadi seperti ini "elseif"

$a = 59;
$b = 59;

if ($a >= 80 && $b >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($a >= 70 && $b >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($a >= 60 && $b >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($a >= 50 && $b >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Maaf Anda tidak lulus, Karena Nilai Anda E" . PHP_EOL;
endif;
