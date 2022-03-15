<?php
echo PHP_EOL;

// FOR LOOP

// For adalah salah satu kunci yang bisa digunakan untuk melakukan perulangan
// Blok kode yang terdapat di dalam for akan selalu diiulangi selama kondisi for terpenuhi
// sama seperti if else, cuman selalu diulangi eksekusinya

// SINTAKS PERULANGAN FOR

// for(init statement;kondisi;post statement){
//     blok perulangan
// }

// init statement akan dieksekusi hanya sekali di awal sebelum perulangan
// kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan
// jika false perulangan akan berhenti
// init statement, kondisi dan post statement tidak wajib diisi
// jika koni=disi tidak diisi, berarti kondisi bernilai true

// flow for seperti ini, dari init statement, lalu cek kondisi
// jika kondisi bernilai true, maka blok perulangan akan dieksekusi
// post statement akan dieksekusi diakhir perulangan 


// PERULANGAN FOR TANPA HENTI, INFINITE LOOP

// for (; ;) {
//     echo "Hello for loop" . PHP_EOL;
// }


// PERULANGAN DENGAN KONDISI

$counter = 1;

for (; $counter <= 10;) {
    echo "Hello for loop : " . $counter . PHP_EOL ;
    $counter++; // increment atau decrement agar menambah terus, jika tidak dikasih ini akan bernilai true terus
}

// PERULANGAN DENGAN INIT STATEMENT

for ($counter = 2; $counter <= 10;) {
    echo "Hello for loop : " . $counter . PHP_EOL;
    $counter++; // increment atau decrement agar menambah terus, jika tidak dikasih ini akan bernilai true terus
}

// PERULANGAN DENGAN POST STATEMENT

for ($counter = 2; $counter <= 10; $counter++) {
    echo "Hello for loop : " . $counter . PHP_EOL;
    // increment atau decrement agar menambah terus, jika tidak dikasih ini akan bernilai true terus
}

// di FOR LOOP, juga ada sintaks alternatif, menggunakan endfor;


