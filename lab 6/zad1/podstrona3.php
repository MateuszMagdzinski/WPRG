<!DOCTYPE html>
<html>
<head>
    <title>Strona 3</title>
</head>
<body>
<h1>Podstrona 3</h1>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    for ($i = 1; $i <= $_SESSION['ilosc_osob']; $i++) {
        $_SESSION["imie$i"] = $_POST["imie$i"];
        $_SESSION["nazwisko$i"] = $_POST["nazwisko$i"];
        $_SESSION["email$i"] = $_POST["email$i"];
    }
}

// Wyświetlanie podsumowania zebranych danych
echo "<h2>Podsumowanie:</h2>";
echo "Numer karty: "

