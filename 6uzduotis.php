<?php
//  6. Parašykite programą, kuri per argumentų padavimą terminale, paleidžiant funkciją juos priimtų, 
//  sudaugintų tarpusavyje ir pakeltu kvadratu. Atkreipkite dėmesį, kad jeigu argumentas yra paduodamas 
//  ne skaičius, reikia, kad terminale gautumėme atitinkamą klaidos kodą ir pranešimą. 
//  php index.php  3 5 -->> Jūsų skaičius: 225
echo PHP_EOL . '6 užduotis' . PHP_EOL;

echo "Enter first number: ";
fscanf(STDIN, "%d", $firstNumber);
if (isset($firstNumber) === false) {
    echo "Error 1: you didn't enter the number" . PHP_EOL;
    exit(1);
}
if (is_numeric($firstNumber) === false) {
    echo "Error 2: you've entered wrond data format" . PHP_EOL;
    exit(1);
}
echo "Enter second number: ";
fscanf(STDIN, "%d", $secondNumber);
if (isset($secondNumber) === false) {
    echo "Error 1: you didn't enter the number" . PHP_EOL;
    exit(1);
}
if (is_numeric($secondNumber) === false) {
    echo "Error 2: you've entered wrond data format" . PHP_EOL;
    exit(1);
}
echo "The result is: " . round((($firstNumber*$secondNumber)**2),2);
