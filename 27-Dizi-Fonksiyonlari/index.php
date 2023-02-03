<?php
// Dizi Fonksiyonları 4

//
//current();Bir dizideki geçerli öğeyi döndür
//end();Bir dizinin dahili işaretçisini son elemanına ayarlar
//next();Bir dizinin dahili işaretçisini ilerletir
//prev();Dahili dizi işaretçisini geri alır.

echo '<pre>';

$dizi = ['alper-baslangic','alper1','alper2','alper3','alper-son'];

echo current($dizi) . "<br>";
echo next($dizi). "<br>";
echo next($dizi). "<br>";
end($dizi). "<br>";
echo prev($dizi). "<br>";
reset($dizi);
echo current($dizi)."<br>";


//extract(); DİZİNİN ANAHTARLARINI BİR DEEĞİŞKEN OLARAK DIŞARI AKTARMAMIZI SAĞLIYOR.

echo '<pre>';
$extract = ['bir'=>'araba','iki'=>'bisiklet','uc'=>'motor'];
extract($extract);
echo($bir);
echo($iki);

echo '<pre>';

//asort(); //Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan küçükten büyüğe doğru sıralar.
//arsort(); //Bir dizinin değerlerini anahtarlarıyla ilişkilerini bozmadan büyükten küçüğe doğru sıralar.
//ksort(); //Bir diziyi anahtarlarına göre küçükten büyüğe doğru sıralar.
//krsort(); //Bir diziyi anahtarlarına göre büyükten küçüğe doğru sıralar.
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}