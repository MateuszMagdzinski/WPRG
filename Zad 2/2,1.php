<?php
function getRandomArrayValue($index) {
    $array = array(4, 2, 8, 1, 6, 10, 3, 7, 5, 9); // tablica z losowymi liczbami
    return $array[$index]; // zwraca wartość elementu o podanym indeksie
}
$randomIndex = rand(0, 9); // losowy indeks od 0 do 9
echo getRandomArrayValue($randomIndex); // wyświetla wartość elementu o tym indeksie

?>