<?php
// Patika.dev profile adress = https://app.patika.dev/alpercelilhankucuk


function ucgen($value){
    $dongu = 0;
    while($dongu <= $value){
        for($j= 1; $j <= $dongu; $j++){
            echo"15";
        }
        echo "<br>";
        $dongu++;
    }

}
ucgen(15);