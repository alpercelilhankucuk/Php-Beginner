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

//array_product(); BİR DİZİNİN DEĞERİNİ ÇARPIMI BULUR

$arrayProduct =['20','20'];
$arrayProducted = array_product($arrayProduct);
print_r($arrayProducted);


//array_push(); BELLİ SAYIDA ELEMANI DİZİNİN SONUNA EKLER
$arrayPush = ['alper','mertcan','ege'];
$arrayPushed = array_push($arrayPush,'Eklendi1');
$arrayPushed = array_push($arrayPush,'Eklendi2');

print_r($arrayPush);

//array_unshift() BİR DİZİNİN BAŞLANGICINA BİR VEYA DAHA FAZLA ELEMAN EKLER.
$arrayUnShift = ['dizi başlangıcı','2','3','4','dizi sonu'];
$arrayUnShifted = array_unshift($arrayUnShift,'dizinin başına ekledi',);
print_r($arrayUnShift);

//array_keys(); BİR DİZİDEKİ TÜM ANAHTARLARI VEYA BİR ANAHTAR ALT KÜMESİNİ DÖNDÜRÜR.
$arrayKeys = array(0 => 100, "color" => "red");
$arrayKeysed = array_keys($arrayKeys);
print_r($arrayKeys);