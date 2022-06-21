<?php

$bmw = [
    'model' => 'X5',
    'speed' => 150,
    'doors' => 5,
    'year' => 2015
];

$toyota = [
    'model' => 'Prius',
    'speed' => 100,
    'doors' => 5,
    'year' => 2018
];

$opel = [
    'model' => 'Frontera',
    'speed' => 130,
    'doors' => 5,
    'year' => 2010
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

foreach ($cars as $name => $car) {
    echo "CAR $name <br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']} <br><hr><br>";
}
