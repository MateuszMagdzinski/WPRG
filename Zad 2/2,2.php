<?php
function getNationality($country) {
    $nationalities = array(
        "Polska" => "Polska",
        "Niemcy" => "Niemiecka",
        "Włochy" => "Włoska",
        "Francja" => "Francuska",
        "Hiszpania" => "Hiszpańska",
        // dodaj inne kraje i narodowości
    );
    if (array_key_exists($country, $nationalities)) {
        return $nationalities[$country]; // zwraca odpowiadającą nazwę narodowości
    } else {
        return "Nieznana narodowość"; // zwraca komunikat, jeśli kraj nie istnieje w tablicy
    }
}
echo getNationality("Polska"); // wyświetla "Polska"
echo getNationality("Niemcy"); // wyświetla "Niemiecka"
echo getNationality("USA"); // wyświetla "Nieznana narodowość"

?>