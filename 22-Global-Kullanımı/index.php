<?php

//Fonksiyonların içerisinde tanımladığın değişkenler
// dışarıya gönderilmez ve aynı şekilde dışarıda tanımladığın bir değişken fonksiyon içinde görülmez.

$isim = "Bu değişken dışarıda tanımlanmıştır. Bu Fonksiyonun calısabilmesi icin fonksiyon icerisinde global nu echodan önce
cekmemiz gerekiyor.";

function isimyaz(){
    global $isim;
     echo $isim;

}
isimyaz();