<?php

// BREAK DAN CONTINUE

// pada switch case sudah mengenal break, untuk menghentikan case dalam switch
// Break digunakan untuk menghentikan seluruh perulangan
// Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini,
// lalu melanjutkan ke perulangan selanjutnya, continue ini kaya nge skip perulangan saat ini


// BREAKK
echo "=== BREAK ===" . PHP_EOL . PHP_EOL;

$counter = 1;

while (true) {
    echo "Hello Break : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}


// CONTINUE
echo "=== CONTINUE ===" . PHP_EOL . PHP_EOL;

for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 1) {
        continue;
    }
    echo "Hello Continue : " .$counter . PHP_EOL;
}

