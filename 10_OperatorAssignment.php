<?php

// Operator Assignment atau penugasan

// $a += $b  => $a = $a + $b
// lalu operator yang lainnya sama

$total = 0;

$fruit = 10000;
$chicken = 35000;
$orangeJuice = 1000;

$total += $fruit; // $total = $total + $fruit;
$total += $chicken;
$total += $orangeJuice;

var_dump($total);