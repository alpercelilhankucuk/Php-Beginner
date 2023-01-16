<?php

/*
 Mantıksal Operatorler
&& ve
|| veya
! değilse
 */

$a = 2;
$b = 3;


$sonuc = ($a == 1) || ($b < 1);

var_dump($sonuc);

$c = 3;
$d = 2;

echo ($c > $d) && ($c != $d); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo ($c > $d) || ($c == $d); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.
