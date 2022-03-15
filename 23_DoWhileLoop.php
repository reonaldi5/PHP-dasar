<?php

// DO WHILE LOOP

// Do while l0op adalah perulangan yang mirip dengan while
// Perbedaannya hanya pada pengecekan kondisi
// pengecekan kondisi di while loop dilakukan di awal sebelum perulangan, 
// sedangkan di do while loop dilakukan setelah perulangan
// oleh karena itu dalam do while loop, minimal pasti sekali perulangan dilkakukan walaupun kondisi false

$counter = 100;

do {
    echo "Hello  do while loop : " . $counter . PHP_EOL; // statement akan dieksekusi sekali, lalu dicek kondisi
    $counter++;
} while ($counter <= 10);

// ini seperti quis pertanyaan, jika benar next soal, kalau salah berhenti
