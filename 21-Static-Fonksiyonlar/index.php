<?php
// Static Fonksiyonlar
//Bir fonksiyonun çalışması bittiğinde içerisinde tanımlı olan değişkenler yok edilir yani ölürler.
// Fonksiyonun bir sonraki kullanımında tanımlı olan değişkenlerin eski değerleri kaybolmuş olur.
function say(){

    static $say = '1';

    echo $say;
    $say++;

}
say();
say();
say();
say();