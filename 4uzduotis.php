<?php
// 4. Pakoreguokite 3 užduotį taip, kad ji duomenis rašytų ne į terminalą, o spausdintų į failą. (1 balas)
echo PHP_EOL . '4 užduotis' . PHP_EOL;

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

function exercises4(array $holidaysList): void
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
        $filename = "4uzduotis_atsakymas.txt";
        $file = fopen($filename, "a+") or die("Can not open the file");
        fwrite($file, 'Destination ' . '"' . $holidays['destination'] . '"' . PHP_EOL);
        fwrite($file, 'Titles: ' . $holidays['titles'] . PHP_EOL);
        fwrite($file, 'Total: ' . $holidays['total']) . PHP_EOL;
        fclose($file);
        $array_keys = array_keys($allHolidays);
        if (end($array_keys) !== $key) {
            $filename = "4uzduotis_atsakymas.txt";
            $file = fopen($filename, "a+") or die("Can not open the file");
            fwrite($file, PHP_EOL . '************' . PHP_EOL);
            fclose($file);
        }
    };
}
exercises4($holidays);
