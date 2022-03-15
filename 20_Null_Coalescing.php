<?php
echo PHP_EOL;
// NULL COALESCING OPERATOR

// Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
// Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak,
// dan juga apakah data tersebut isinya null atau bukan
// biasanya untuk melakukan itu, kita perlu menggunakan pengecekan if statement dengan function isset($variable)
// Namun untungnya di PHP ada null coalescing operator menggunakan tanda ??

// TANPA NULL COALESCING OPERATOR

echo "=== TANPA NULL COALESCING OPERATOR ===" . PHP_EOL . PHP_EOL;

$data = [
    'action' => null
];
// $data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'nothing';
}

echo $action . PHP_EOL . PHP_EOL;

// DENGAN NULL COALESCING OPERATOR

echo "=== NULL COALESCING OPERATOR ===" . PHP_EOL . PHP_EOL;

$data = [];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;