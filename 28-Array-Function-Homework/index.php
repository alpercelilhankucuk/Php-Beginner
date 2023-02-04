<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];

function createRandomArray($array, $length) {
    $filteredArray = array_filter($array, function ($value) {
        return !empty($value);
    });
    return array_map(function () use ($filteredArray) {
        return $filteredArray[array_rand($filteredArray)];
    }, array_fill(0, $length, 0));
}

print_r(createRandomArray($planets, 2));
print_r(createRandomArray($planets, 3));
print_r(createRandomArray($planets, 2));
print_r(createRandomArray($planets, 4));
print_r(createRandomArray($planets, 5));



