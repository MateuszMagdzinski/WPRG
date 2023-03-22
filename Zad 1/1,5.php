<?php
function calculateTriangleArea() {
    $base = readline("Podaj długość podstawy trójkąta: ");
    $height = readline("Podaj wysokość trójkąta: ");
    $area = 0.5 * $base * $height;
    echo "Pole powierzchni trójkąta wynosi: " . $area;
}

function calculateRectangleArea() {
    $width = readline("Podaj szerokość prostokąta: ");
    $height = readline("Podaj wysokość prostokąta: ");
    $area = $width * $height;
    echo "Pole powierzchni prostokąta wynosi: " . $area;
}

function calculateTrapeziumArea() {
    $base1 = readline("Podaj długość pierwszej podstawy trapezu: ");
    $base2 = readline("Podaj długość drugiej podstawy trapezu: ");
    $height = readline("Podaj wysokość trapezu: ");
    $area = 0.5 * ($base1 + $base2) * $height;
    echo "Pole powierzchni trapezu wynosi: " . $area;
}

echo "Kalkulator pól powierzchni\n";
echo "Wybierz figurę, dla której chcesz obliczyć pole:\n";
echo "1. Trójkąt\n";
echo "2. Prostokąt\n";
echo "3. Trapez\n";
$choice = readline("Wybierz 1, 2 lub 3: ");

switch ($choice) {
    case 1:
        calculateTriangleArea();
        break;
    case 2:
        calculateRectangleArea();
        break;
    case 3:
        calculateTrapeziumArea();
        break;
    default:
        echo "Nieznana figura!";
        break;
}

?>