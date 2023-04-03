<!DOCTYPE html>
<html>
<head>
    <title>Zadanie 9</title>
</head>
<body>
<form method="get">
    <label>Wybierz datę urodzenia:</label><br>
    <input type="date" name="birthdate" >
    <input type="submit" value="Wyślij">
</form>

<?php

if (isset($_GET['birthdate'])) {
    $birthdate = $_GET['birthdate'];
    $dayOfWeek = date("l", strtotime($birthdate));
    $age = date_diff(date_create($birthdate), date_create('today'))->y;
    $today = new DateTime();
    $daysUntilNextBirthday = floor((strtotime('next birthday', strtotime($birthdate)) - time()) / 86400);
    echo "<br>Urodziłeś/aś się w dniu: $dayOfWeek<br>";
    echo "Masz $age lat<br>";
    echo "Do Twoich następnych urodzin pozostało $daysUntilNextBirthday dni<br>";
}

?>

</body>
</html>

