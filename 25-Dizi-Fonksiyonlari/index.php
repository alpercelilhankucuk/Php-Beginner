<pre>

<?php
// Dii fonksiyonları 2
//
//


// Shuffle shuffle();
//Bir diziyi karıştırır.

$sayilar = range(1,20);
shuffle($sayilar);
print_r ($sayilar);


// array_combine();
// Anahtarlar için bir dizi, değerler için başka bir dizi kullanarak ilişkisel değer oluşturur.
$meyveler = [
    'elma','armut','maldalin'
];
$harfler = [
    'a','b','c'
];
$combine = array_combine($meyveler,$harfler);
print_r ($combine);

// array_count_values();
// Bir dizideki bütün değerleri sayar. Aynı değerden kaç tane var ise onu sayar.

$countVallesDiziler = [
    'alper','alper','1','2','3','3','3','3'
];
print_r (array_count_values($countVallesDiziler));

// array_flip();
// Bir dizideki anahtarla değerin yerini değiştirir.

$arrayFlip = array('alper','celilhan','ege','baki');
$flipped = array_flip($arrayFlip);
print_r($flipped);

// array_key_exist();
// Belirtilen anahtar veya indis dizide var mı diye bakar.

$arrayKeyExist = [
    'alper','2','3','4'
];
$arrayKeyExist = array_key_exists(2,$arrayKeyExist);
var_dump($arrayKeyExist);


//array_map();
//Belirtilen dizilerin elemanlarını geriçağırım işlevini kullanır.

$sayilarMapArray = range(1,10);

$dizi = array_map(function ($e){
return $e+2;
}, $sayilarMapArray);
print_r($dizi);

//array_filter();
//Bir dizinin elemanlarını bir geriçağırım işleviyle süzgeçten geçirir.

$sayilarFilter = range(1,20);
$ciftSayilarFiltered = array_filter($sayilarFilter,function ($e){
    return ($e % 2) == 0 ? $e : false;
});
print_r($ciftSayilarFiltered);

//array_merge();
//Belirtilen dizileri alt alta ekleyerek yeni dizi olusturur.

$sayilarMerged = range('a','z');
$sayilar2Merged = range(1,20);

$sayilarMerged = array_merge($sayilarMerged,$sayilar2Merged);

print_r($sayilarMerged);

//array_rand();
//Bir diziden belli sayıda rastgele anahtar oluşturur.
$arrayRand = array('alper','mehmet','ege');

$arrayRanded = array_rand($arrayRand, 3);

print_r($arrayRanded);

//array_reverse();
//Diziyi tersine sıralayıp döndürür.

$arrayReverse = ['alper','celilhan','ege','kibar'];
$arrayReversed = array_reverse($arrayReverse);
print_r($arrayReversed);

//array_search();
//Dizi içerisinde belli bir değeri arar bulur ise değerini yazdırır.
$arraySearch = ['bugun','ayın','28','i','yıl','2023'];
$arraySearced = array_search('i',$arraySearch);
print_r($arraySearced);


