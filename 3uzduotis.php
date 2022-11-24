<?php
/*
 3. Masyve $holidays turime kelionių agentūros siūlomas keliones su kaina ir dalyvių skaičiumi.
 Terminale išspausdinkite santrauką, kurioje matytusi miesto pavadinimas, kelionių pavadinimai ir dalyvių sumokėta suma
 Dėmesio! Santraukoje nerodykite tų kelionių, kurių kaina yra null. (2 balai)
*/

//   Destination "Paris".
//   Titles: "Romantic Paris", "Hidden Paris"
//   Total: 99500
//   ************
//   Destination "New York"
echo PHP_EOL . '3 užduotis' . PHP_EOL;

$holidays = [
    [
        'title' => 'Romantic Paris',
        'destination' => 'Paris',
        'price' => 1500,
        'tourists' => 55,
    ],
    [
        'title' => 'Amazing New York',
        'destination' => 'New York',
        'price' => 2699,
        'tourists' => 21,
    ],
    [
        'title' => 'Spectacular Sydey',
        'destination' => 'Sydey',
        'price' => 4130,
        'tourists' => 9,
    ],
    [
        'title' => 'Hidden Paris',
        'destination' => 'Paris',
        'price' => 1700,
        'tourists' => 10,
    ],
    [
        'title' => 'Emperors of the past',
        'destination' => 'Beijing',
        'price' => null,
        'tourists' => 10,
    ],
];

function exercises3($holidays)
{
    // var_dump($holidays);
    foreach ($holidays as $trip) {
        $holidaysSummary =
            [
                'title' => null,
                'destination' => null,
                'price' => null,
                'tourists' => null,
            ];
        if ($trip["price"] === null) {
            exit(1);
        } else {
            if (!($trip["destination"] == $holidaysSummary["destination"])) {
                $holidaysSummary[] += $trip;
            }
            // echo "ne null". PHP_EOL;
            // var_dump($trip);
        }
    }
    var_dump($holidaysSummary);
}



(exercises3($holidays));
