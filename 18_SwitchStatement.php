<?php
echo PHP_EOL;

// ini jika menggunakan if
// if($nilai == "A"){
//     echo "Anda lulus dengan baik" . PHP_EOL;
// } else if($nilai = "B" || $nilai = "C") {
//     echo "Anda lulus" . PHP_EOL;
// } else if($nilai = "D"){
//     echo "Anda tidak lulus" . PHP_EOL;
// } else{
//     echo "mungkin anda salah jurusan" . PHP_EOL;
// }

// SWITCH STATEMENT

// Kadang kita hanya butuh menggunakan kondisi sederhana di if statement,
// seperti hanya menggunakan perbandingan (==)
// switch adalah statement percabangan yang sama dengan if,
// namun lebih sederhana cara pembuatannya
// kondisi di switch statement hanya untuk perbandingan (==)

echo "== SWITCH STATEMENT ==" . PHP_EOL . PHP_EOL;

$nilai = "B";
switch ($nilai) {
    case "A": // case adalah pengecekan
        echo "Anda Lulus dengan baik" . PHP_EOL . PHP_EOL;
        break; // berhenti, seperti end kurung kurawal
    case "B":
    case "C": // jika pengen digabung, akan seperti ini, jika statement nya sama
        echo "Anda lulus " . PHP_EOL . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL . PHP_EOL;
        break;
    default: // default ini else nya kalau di if statement
        echo "mungkin anda salah jurusan" . PHP_EOL . PHP_EOL;
}

// di switch juga punya syntax alternatif

echo "== SYNTAX ALTERNATIF SWITCH ==" . PHP_EOL . PHP_EOL;
// namun diakhir menggunakan endswitch;


$a = "B";
switch ($a) :
    case "A": // case adalah pengecekan
        echo "Anda Lulus dengan baik" . PHP_EOL . PHP_EOL;
        break; // berhenti, seperti end kurung kurawal
    case "B":
    case "C": // jika pengen digabung, akan seperti ini, jika statement nya sama
        echo "Anda lulus " . PHP_EOL . PHP_EOL;
        break;
    case "D":
        echo "Anda tidak lulus" . PHP_EOL . PHP_EOL;
        break;
    default: // default ini else nya kalau di if statement
        echo "mungkin anda salah jurusan" . PHP_EOL . PHP_EOL;
endswitch;