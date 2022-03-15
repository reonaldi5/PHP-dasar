<?php
echo PHP_EOL;
// WHILE LOOP

// While Loop adalah versi perulangan yang lebih sederhana dibanding for loop
// di while loop hanya terdapat perulangan, tanpa ada init statement dan post statement

$counter = 1;

while ($counter <= 10) {
    echo "Hello while Loop : " . $counter . PHP_EOL;
    $counter++;
}

// while loop juga ada sintaks alternatif, menggunakan endwhile;