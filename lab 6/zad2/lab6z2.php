<?php
if (isset($_COOKIE['licznik'])) {
    $licznik = $_COOKIE['licznik'] + 1;
} else {
    $licznik = 1;
}
setcookie('licznik', $licznik, time() + (86400 * 30), '/'); // Cookie ważne przez 30 dni
$limit = 5; // Zadany limit odwiedzin
if ($licznik <= $limit) {
    echo "Witaj, jesteś odwiedzającym numer $licznik!";
} else {
    echo "Osiągnąłeś zadany limit odwiedzin.";
}

?>

