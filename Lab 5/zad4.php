<!DOCTYPE html>
<html>
<head>
    <title>Wyświetlanie różnych treści dla wybranych adresów IP</title>
</head>
<body>

<?php
$plik = "ip.txt";
$ip_uzytkownika = $_SERVER['REMOTE_ADDR'];
$handle = fopen($plik, "r");
if ($handle) {
    while (($linia = fgets($handle)) !== false) {
        $ip = trim($linia);
        if ($ip === $ip_uzytkownika) {
            echo "<h1>Witaj użytkowniku o adresie IP: $ip_uzytkownika!</h1>";
            echo "<p>Wyświetlamy treść specjalną dla tego adresu IP.</p>";
        }
    }
    fclose($handle);
} else {
    echo "Nie udało się otworzyć pliku.";
}
?>

<!-- Treść wspólna dla wszystkich pozostałych adresów IP -->
<h1>Witaj na stronie!</h1>
<p>Wyświetlamy treść dla pozostałych użytkowników.</p>


</body>
</html>


