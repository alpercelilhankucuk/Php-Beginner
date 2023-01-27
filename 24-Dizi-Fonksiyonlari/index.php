<?php

// Dizi Fonksiyonları

// print_r()
    // Bir diziyi ekrana yazdırır. Değişkenide ekrana basabiliriz.

//var_dump();
    // Veri tipinin türünü işlevini ve daha detaylı olarak cıktısını sağlar;

//explode(); str  "1,2,3,4"
    // Bir dizgeyi ayraca göre bölüp bir dizi haline getirir.

//implode()
    // Dizi elemanlarını birleştirip bir dizge elde eder.

//count()
    //  Dizide eleman sayısını bize yazdırır;

//is_array()
    // Dizi içerip içermediğini bakar;

$arr = [
    "fd","fd","ds","ds","sa","d"
];
$dizge = implode("=",$arr);

echo($dizge);
echo "<br>";
$newArray = explode("=",$dizge);
print_r($newArray);
