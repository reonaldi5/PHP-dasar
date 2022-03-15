<?php

echo "Decimal : ";
var_dump(1234);


echo "Octal : ";
var_dump(0123);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111);

echo "Underscore di number : ";
var_dump(123_4567_456);


// FLOAT

echo "Floating Point : ";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Min (7 x 0.001) : ";
var_dump(7e-3);

echo "Underscore di floating point : ";
var_dump(1_234.567);

// batasan integer di php

echo "Integer overflow 32 Bit : ";
var_dump(2147483648);

echo "Integer overflow 64 Bit : ";
var_dump(9223372036854775808); // ditambahkan 1 menjadi akhiran 808 dr kapasitas integer php
