<?php
$cars['BMW']['Model'] = 'i8';
$cars['BMW']['Price'] = 120000;
$cars['BMW']['Year'] = 2020;

$cars['Skoda']['Model'] = 'Octavia';
$cars['Skoda']['Price'] = 20000;
$cars['Skoda']['Year'] = 2018;

$cars['Toyota']['Model'] = 'Corolla';
$cars['Toyota']['Price'] = 25000;
$cars['Toyota']['Year'] = 2019;

$currentIndex = 0;
foreach ($cars as $key => $car) {
    echo "Car #" .($currentIndex + 1).":<br/>";
    foreach($car as $key => $var) {
        echo "$key - $var<br/>";
    }
    echo "<br/>";
    $currentIndex++;
}
?>