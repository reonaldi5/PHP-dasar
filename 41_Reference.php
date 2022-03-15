<?php

echo PHP_EOL;

// REFERENCE

/*
    - Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
    - Reference di PHP tidak sama dengan reference di bahasa pemrograman C/C++ yang memiliki fitur pointer
    - Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi filenya,
    maka reference adalah membuat shortcut(di Windows) atau alias (di linux/Mac) terhadap file yang sama

    - Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
    - Untuk membuat reference terhadap variable, kita bisa menggunakan karakter &
*/
echo "==== BUKAN REFERENCE ====" . PHP_EOL . PHP_EOL;

$nama = "Iwan";

$namaLain = $nama; // ini sebenarnya ngecopy dari value variable $nama
$namaLain = "Joko";

echo $nama . PHP_EOL;

/*
    Assign By Reference

    - Pertama, PHP Reference bisa memnungkinkan kita bisa membuat beberapa variable menuju ke value yang sama
*/


echo "==== ASSIGN BY REFERENCE ====" . PHP_EOL . PHP_EOL;

$name = "Doni"; // variable nya $name, dan value nya itu adalah isi dari variable, dicontoh adalah "Doni"

$otherName = &$name; // variable $otherName akan menjadi reference dari $name
$otherName = "Budi"; // ini seakan akan merubah value dari variable $name

echo $name . PHP_EOL;



/*
    Pass By Reference

    - Selanjutnya yang bisa dilakukan di PHP adalah, mengirim data ke function dengan reference
*/

echo "==== PASS BY REFERENCE ====" . PHP_EOL . PHP_EOL;

function increment(int &$value)// jika tidak memakai reference(&), INI YANG DIKIRIM ARGUMENT NYA ADALAH VALUE NYA BUKAN REFERENCE
{
    $value++;
    // $value = $value +1;
}

$counter = 1;
increment($counter); // ini yang dikirim adalah value nya yaitu 1 sebenernya

echo $counter . PHP_EOL;


/*
    Returning Reference

    - PHP juga bisa mengembalikan reference pada function
    - Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan
*/

echo "==== RETURNING REFERENCE ====" . PHP_EOL . PHP_EOL;

function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue(); // ini berarti mengembalikkan reference ke static variable
$a = 200; // ini merubah reference

$b = &getValue();
echo $b . PHP_EOL;