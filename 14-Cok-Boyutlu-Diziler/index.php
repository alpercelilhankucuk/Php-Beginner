<?php

// Çok Boyutlu Diziler
// PRİNT_R İLE ARRAY YAZDIRABİLİRİM ORN $hayvanlar print_r( [1,2,3] )
$hayvanlar =[
    "Uçan Hayvanlar" => ["Kartal", "Güvercin","Şahin"],
    "Sürüngen Hayvanlar",

];
echo "<pre>";
$ucan_hayvanlar = ['Kartal','Güvercin','Şahin'];
echo $hayvanlar['Uçan Hayvanlar'][1];
