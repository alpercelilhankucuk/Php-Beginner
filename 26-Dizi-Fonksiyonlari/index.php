<?php
//in_array();
//Bir dizide bir değerin varlığını araştırır.
//array_shift(); //DİZİNİN İÇERİSİNDEKİ İLK ELEMANI CIKARTIR.
//array_pop(); //DİZİNİN İÇERİSİNDEKİ SON ELEMANI ÇIKARTIR.
echo'<pre>';
$inArrayDizi = ['alper2','celilhan','ege','kibar'];
array_shift($inArrayDizi);
array_pop($inArrayDizi);
print_r($inArrayDizi);
if (in_array('alper',$inArrayDizi))
    echo 'alper dizinin içerisinde';
    else {
        echo('alper dizinin içerisinde bulanamadı');
    };
//array_slice(); DİZİNİN İÇERİSİNDEKİ BELLİ BİR KISMI SİLER;
$arraySlice  = ['1','2','3','4','5','6'];
$arraySliced = array_slice($arraySlice,1,4);

print_r($arraySliced);

//array_sum(); BİR DİZİNİN İÇERİSİNDEKİ DEĞERLERİN TOPLAMINI HESAPLAR;

$arraySum = ['1','5','10','80'];
$arraySummed = array_sum($arraySum);
print_r($arraySum);