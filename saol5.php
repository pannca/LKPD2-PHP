<?php
$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

$arrayResult = array_intersect($bil1, $bil2); //buat mencari nilai yang sama
echo  implode(',', $arrayResult);

echo "<br>";
$arrayDif = array_diff($bil1, $bil2); //buat ngebedain nilai
echo  implode(',', $arrayDif);
?>