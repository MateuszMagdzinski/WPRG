<!DOCTYPE html>
<html>
<head>
    <title>Zad 3</title>
</head>
<body>

<?php
//Trzeba dać opis do linku w pliku lista.txt żeby wyświetliło odnośnik
$plik = "lista.txt";
$handle = fopen($plik, "r");
if ($handle) {
    while (($linia = fgets($handle)) !== false) {
        $dane = explode(";", $linia);
        if (count($dane) == 2) {
            $adres = trim($dane[0]);
            $opis = trim($dane[1]);
            echo '<a href="' . $adres . '">' . $opis . '</a><br>';
        }
    }
    fclose($handle);
} else {
    echo "Nie udało się otworzyć pliku.";
}
?>

<a href=""></a>
</body>
</html>
