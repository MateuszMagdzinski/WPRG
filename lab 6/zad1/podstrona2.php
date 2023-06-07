<!DOCTYPE html>
<html>
<head>
    <title>Strona 2</title>
</head>
<body>
<h1>Podstrona 2</h1>
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nr_karty'] = $_POST['nr_karty'];
    $_SESSION['dane_zamawiajacego'] = $_POST['dane_zamawiajacego'];
    $_SESSION['ilosc_osob'] = $_POST['ilosc_osob'];
}
?>
<form action="podstrona3.php" method="post">
    <?php
    for ($i = 1; $i <= $_SESSION['ilosc_osob']; $i++) {
        echo "<h3>Dane osobowe osoby $i:</h3>";
        echo "<label for='imie$i'>Imię:</label>";
        echo "<input type='text' name='imie$i' required><br><br>";

        echo "<label for='nazwisko$i'>Nazwisko:</label>";
        echo "<input type='text' name='nazwisko$i' required><br><br>";

        echo "<label for='email$i'>Email:</label>";
        echo "<input type='email' name='email$i' required><br><br>";
    }
    ?>
    <input type="submit" value="Dalej">
</form>
</body>
</html>

