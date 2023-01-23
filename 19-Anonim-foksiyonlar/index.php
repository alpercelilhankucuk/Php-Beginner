<?php

// Anonim fonksyinolar - Anonim fonksiyonlar, isimsiz fonksiyonlardır.

//$topla = function ($s1,$s2){
//    return $s1 + $s2;
//};
//echo $topla(5, 10);

//$dizi = [
//    4,6,8,10
//];
//
//$dizi = array_map(function ($e){
//    return 2*$e;
//},$dizi);
//echo "<pre>";
//print_r($dizi);

$islem =[
    'topla'=> function($a,$b){return $a + $b;},
    'cikar'=> function($a,$b){return $a + $b;},
    'carp'=> function($a,$b){return $a + $b;},
    'bol'=> function($a,$b){return $a + $b;}

];

echo $islem['topla'](2,4)."topladı"."<br>";
echo $islem['cikar'](5,2)."cikar"."<br>";
echo $islem['carp'](5,3)."carptı"."<br>";
echo $islem['bol'](14,2)."boldu"."<br>";

