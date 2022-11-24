<?php

// 2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas), +0.5 jeigu array funkcijos naudojamos
echo PHP_EOL . '2 užduotis' . PHP_EOL;
$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];


function exercises2($numbers)
{
    function multiply(int $product, array $numbersArray):int
    {
        foreach ($numbersArray as $number)
            $product *= $number;
        return $product;
    }
    return array_reduce($numbers, "multiply", 1);
}
echo "Paduoto masyvo skaičių sandauga lygi " . (exercises2($numbers)) . "." . PHP_EOL;
