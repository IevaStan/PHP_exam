<?php
//  6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, 
//  sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas 
//  ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. 
//  php index.php  3 5 -->> Jūsų skaičius: 225
echo PHP_EOL . '6 užduotis' . PHP_EOL;

if (isset($argv[1]) === false) {
    echo "Error 1: you didn't enter any data" . PHP_EOL;
    exit(1);
}
if (is_numeric($argv[1]) === false) {
    echo "Error 2: you've entered wrong format. Please enter the number." . PHP_EOL;
    exit(1);
}
if (isset($argv[2]) === false) {
    echo "Error 1: you didn't enter second number." . PHP_EOL;
    exit(1);
}
if (is_numeric($argv[2]) === false) {
    echo "Error 2: you've entered wrong format for the second number. Please enter the number." . PHP_EOL;
    exit(1);
}
echo "The result is: " . round((($argv[1] * $argv[2]) ** 2), 2);
