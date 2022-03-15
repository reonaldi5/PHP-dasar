<?php
echo PHP_EOL;

// GOTO OPERATOR

// Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
// Kenapa jarang digunakan karena jika terlalu banyak menggunakan goto operator,
// kode program aplikasinya akan mudah membingungkan yang membaca kodenya
// goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
// agar goto bisa loncat ke kode program, 
// kita harus membuat label di php dengan menggunakan nama label lalu diakhiri :(colon)

goto a;
echo "Hello World" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

echo "==== GOTO OPERATOR DI LOOP ====" . PHP_EOL . PHP_EOL;

$counter = 1;
while(true) {
    echo "while loop $counter " . PHP_EOL;
    $counter++;
    if ($counter > 10){
        goto end;
    }
}

end:
echo "end loop";