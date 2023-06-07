<!DOCTYPE html>
<html>
<head>
    <title>Strona 1</title>
</head>
<body>
<h1>Podstrona 1</h1>
<form action="podstrona2.php" method="post">
    <label for="nr_karty">Numer karty:</label>
    <input type="text" name="nr_karty" required><br><br>

    <label for="dane_zamawiajacego">Dane zamawiającego:</label>
    <input type="text" name="dane_zamawiajacego" required><br><br>

    <label for="ilosc_osob">Ilość osób:</label>
    <input type="number" name="ilosc_osob" required><br><br>

    <input type="submit" value="Dalej">
</form>
</body>
</html>
