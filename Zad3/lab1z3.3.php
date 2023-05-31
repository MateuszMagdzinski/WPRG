<?php
function wyswietlTabliczkeMnozenia($bok) {
for ($i = 1; $i <= $bok; $i++) {
for ($j = 1; $j <= $bok; $j++) {
$wynik = $i * $j;
echo $wynik . "\t";
}
echo "\n";
}
}
wyswietlTabliczkeMnozenia(20); //Przykładowe użycie
?>
