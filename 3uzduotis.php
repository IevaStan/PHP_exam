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

function super_unique(array $array, mixed $key): array
{
    $temp_array = [];
    foreach ($array as &$element) {
        if (!isset($temp_array[$element[$key]]))
            $temp_array[$element[$key]] = &$element;
    }
    $array = array_values($temp_array);
    return $array;
}

function exercises3(array $holidaysList): void
{
    $allHolidays = [];
    for ($i = 0; $i < count($holidaysList); $i++) {
        if (isset($holidaysList[$i]['price'])) {
            $holidaySummary = [
                'destination' => $holidaysList[$i]['destination'],
                'titles' => ['"' . $holidaysList[$i]['title'] . '"'],
                'total' => $holidaysList[$i]['price'] * $holidaysList[$i]['tourists']
            ];
            foreach ($holidaysList as $holiday) {
                if ($holidaySummary['destination'] === $holiday['destination'] && !in_array('"' . $holiday['title'] . '"', $holidaySummary['titles'], true)) {
                    $holidaySummary['titles'][] = '"' . $holiday['title'] . '"';
                    $holidaySummary['total'] += $holiday['price'] * $holiday['tourists'];
                }
            }
            $holidaySummary['titles'] = implode(", ", $holidaySummary['titles']);
            $allHolidays[] = $holidaySummary;
        };
    };

    $allHolidays = super_unique($allHolidays, 'destination');

    foreach ($allHolidays as $key => $holidays) {
        echo 'Destination ' . '"' . $holidays['destination'] . '"' . PHP_EOL;
        echo 'Titles: ' . $holidays['titles'] . PHP_EOL;
        echo 'Total: ' . $holidays['total'] . PHP_EOL;

        $array_keys = array_keys($allHolidays);
        if (end($array_keys) !== $key) {
            echo '************' . PHP_EOL;
        }
    };
}
exercises3($holidays);
