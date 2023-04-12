<!DOCTYPE html>
<html>
<head>
    <title>Zad 2</title>
</head>
<body>
<?php
// Ścieżka do pliku licznika
$licznikFile = "licznik.txt";

// Sprawdzamy, czy plik istnieje
if (file_exists($licznikFile)) {
    // Odczytujemy aktualną wartość licznika
    $licznik = intval(file_get_contents($licznikFile));

    // Zwiększamy licznik o 1
    $licznik++;

    // Zapisujemy zaktualizowaną wartość licznika do pliku
    file_put_contents($licznikFile, $licznik);
} else {
    // Jeśli plik nie istnieje, tworzymy go i ustawiamy liczbę odwiedzin na 1
    file_put_contents($licznikFile, 1);
    $licznik = 1;
}

// Wyświetlamy liczbę odwiedzin
echo "Liczba odwiedzin: " . $licznik;
?>

