<?php

echo PHP_EOL;
// FOR EACH lOOP

// Kadang kita biasa mengakses data array menggunakan perulangan
// Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter,
// lalu mengakses array dengan counter yang kita buat
// Namun untungnya, di PHP terdapat perulangan for each, 
// yang bisa digunakan untuk mengakses seluruh data di array secara otomatis


// TANPA FOR EACH
echo "==== TANPA FOR EACH ====" . PHP_EOL . PHP_EOL;

$names = ["Dino", "Kurniawan", "Edo"];

for ($i = 0; $i < count($names); $i++) {
    echo "Data ke $i = $names[$i]" . PHP_EOL; // ini bisa menampilkan indeks
}


// DENGAN FOR EACH
echo "==== DENGAN FOR EACH ====" . PHP_EOL . PHP_EOL;

$name = ["Budi", "Santoso", "Edo"];

foreach ($name as $index => $nama ){ //bisa mencetak indeks dengan key:value {
    echo "Data ke - $index = $nama " . PHP_EOL;
}

// FOR EACH Mengakses array mapping

echo "==== FOR EACH ARRAY MAPPING ====" . PHP_EOL . PHP_EOL;

$person = [
    "first_name" => "Budi",
    "middle_name" => "Setiawan",
    "last_name" => "Santoso"
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}

$person = [
    "id" => "integer",
    "NRP" => "varchar",
    "first_name" => "varchar",
    "last_name" => "varchar"

];