<?php
// Patika.dev profile adress = https://app.patika.dev/alpercelilhankucuk


function ucgen($value){
    $dongu = 0;
    while($dongu <= $value){
        for($a= 1; $a <= $dongu; $a++){
            echo"15";
        }
        echo "<br>";
        $dongu++;
    }

}
ucgen(15);