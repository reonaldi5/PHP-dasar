<?php

// ARRAY FUNCTION

/*
    Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data ARRAY
    https://www/php.net/manual/en/ref.array.php
*/

/*
    CONTOH ARRAY FUNCTION

    array_keys() -> Mengambil semua keys milik array 
    array_values() -> Mengambil semua values milik array
    array_map() -> Mengubah semua data array dengan callback 
    sort() -> Mengurutkan array
    rsort() -> Mengurutkan array terbalik(descending)
    shuffle() -> Mengubah posisi data di array secara random
*/


$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "=== MAP ARRAY ===" . PHP_EOL . PHP_EOL;
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data); // merubah data array menjadi array baru sesuai dengan function tersebut
var_dump($dataResult);

echo "=== RSORT ARRAY ===" . PHP_EOL . PHP_EOL;
rsort($data); // rsort kepanjangan dari reverse sort, jadi membalikkan
var_dump($data);

echo "=== SORT ARRAY ===" . PHP_EOL . PHP_EOL;
$a = [5, 7, 2, 6, 9, 4, 1, 8, 3, 10];
sort($a);
var_dump($a);

echo "=== ARRAY KEYS ===" . PHP_EOL . PHP_EOL;
var_dump(array_keys($data)); // karena array $data tidak ada keys, maka yang diambil indeks nya saja
var_dump(array_values($data));

