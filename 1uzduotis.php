<?php

// 1.  Grąžinkite visų lyginių skaičių, esančių $numbers masyve, sumą (1 balas) +0.5 jeigu array funkcijos naudojamos
echo PHP_EOL . '1 užduotis' . PHP_EOL;
$numbers = [
    15,
    55,
    66,
    91,
    100,
    995,
    17,
    550,
];

function exercises1(array $numbersArray): int
{
    function evenNumbers(int $numbersArray): int
    {
        return $numbersArray % 2 === 0;
    }
    return array_sum(array_filter($numbersArray, "evenNumbers"));
}
echo "Paduoto masyvo lyginių skaičių suma lygi " . (exercises1($numbers)) . "." . PHP_EOL;
