<?php
// constant adalah variabel yang imutable, artinya data tersebut
//tidak bisa diubah lagi, menggunakan fungsi define()

define("AUTHOR", "Reonaldi Saputro"); // define jangan di deklarasikan kembali, karena akan error
// define("AUTHOR", "Reonaldi Saputro"); seperti ini akan error, karena AUTHOR sudah di deklarasikan
define("APP_VERSION", 101);


echo "Nama : ";
echo AUTHOR; // kalau mengakses constant tidak perlu pake dollar
// cukup nama variable constant nya saja tapi harus UPPER_CASE
echo "\n";

echo "App Version : ";
echo APP_VERSION;
echo "\n";

// AUTHOR = "vulan"; ini tidak bisa