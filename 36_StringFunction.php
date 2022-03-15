<?php

/*
    Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string
    Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
    https://www.php.net/manual/en/ref.strings.php
*/

/*
    join() / implode() -> untuk menggabungkan array menjadi string
    explode() -> Memecah string menjadi array
    substr() -> mengambil sebagian string
    trim() -> Menghapus whitespace di depan dan belakang string
    strtolower() -> mengubah string menjadi lowercase
    strtoupper() -> mengubah string menjadi uppercase
*/

var_dump(join(",", [1, 2, 3, 4, 5]));
var_dump(explode(" ", "Doni Saputra"));
var_dump(strtolower("DONI SAPUTRA"));
var_dump(strtoupper("Doni Saputra"));
var_dump(trim("     eko      ")); // hanya di depan dan dibelakang, jika ada whitespace di tengah, maka tidak bisa di hapus
var_dump(substr("Doni Saputra", 0, 3));