<?php

//  $a == $b     Eşittir                    TRUE FALSE
//  $a ==== $b   Aynıdır                    TRUE FALSE
//  $a != $b     Eşit Değildir              TRUE FALSE
//  $a !== $b    Farklıdır                  TRUE FALSE
//  $a < $b      Küçüktür                   TRUE FALSE
//  $a > $b      Büyüktür                   TRUE FALSE
//  $a <= $b     Küçükse veya eşittir       TRUE FALSE
//  $a >= $b     Büyükse veya eşittir       TRUE FALSE
//  $a <=> $b    Mekik                      0 1   -1
$alper = 20;
$ege = 26;

if ($alper <= $ege){
    echo "çalıştı";
}