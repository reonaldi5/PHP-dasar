<?php


// DOT OPERATOR

// dot operator atau titik adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain(bisa string / tipe data lain)
// sebenarnya kita bisa menggunakan tanda plus untuk menambahkan string
// tetapi jika menggunakan tanda plus untuk menambahkan tipe data selain string akan terjadi error
// jika menggunakan plus untuk menggunakan tipde data lain, dianggap operasi mtk

echo "======= DOT OPERATOR ======= \n" . "\n";

$name = "Reonaldi Saputro";

// echo "Nama : ";
// echo $name; ini bisa dipersingkat menggunakan dot operator

echo "Nama : " . $name . PHP_EOL; // php_eol sama aja kaya "\n", kepanjangan dr end of line
echo "Nilai : " . 100 . "\n" . "\n";

echo "======= KONVERSI KE NUMBER DAN SEBALIKNYA ======= \n" . "\n";

// di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung(tipe data)

$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

$valueInt = (int)"salah";
var_dump($valueInt); // ini akan menghasil int 0, karena datanya tidak valid

$valueFloat = (float)"100.1";
var_dump($valueFloat);
echo "\n";

echo "======= MENGAKSES KARAKTER ======= \n" . "\n";

// String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
// Sama seperti array , indeks pertama dimulai dari 0
// Jika kita mengakses indeks melebihi karakter di string, maka akan terjadi error

$name = "Reo";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL . "\n";
// Jika kita mengakses indeks melebihi karakter di string, maka akan terjadi error


echo "======= VARIABLE PARSING ======= \n" . "\n";

// Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $ untuk mengakses variabel
// ini memudahkan ketika kita ingin menggabungkan string dengan variabel 
// Cara penggunaannya adalah dengan menggunakan karakter $ lalu diikuti dengan nama variabel nya

$name = "Reo";
echo "Hello selamat datang, " . $name . PHP_EOL; // sebelumnya menggunakan dot operator, khusus variabel bisa dimasukkan ke double quote atau petik dua
// tetapi kalau single quote atau petik satu
echo "Hello selamat datang, $name" . PHP_EOL . PHP_EOL;


echo "======= CURLY BRACE ======= \n" . "\n";

// Kadang kita butuh menggabungkan variabel dengan string tanpa ada spasi.
// Hal ini akan menyulitkan jika hanya menggunakan variabel parsing
// Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variabel parsing

$var = "var";
echo "This is {$var}s" . PHP_EOL . PHP_EOL;
