<?php
function pesel($pesel) {
    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);
    $plec = substr($pesel, 9, 1);

    $rok = ($plec >= 2 && $plec <= 9) ? '20' . $rok : '19' . $rok;

    $data_urodzenia = $rok . '-' . $miesiac . '-' . $dzien;

    return array(
        'data_urodzenia' => $data_urodzenia,
        'plec' => ($plec % 2 == 0) ? 'Kobieta' : 'Mężczyzna'
    );
}

$pesel = isset($_POST['pesel']) ? $_POST['pesel'] : '';
$wyniki = array();
if (!empty($pesel)) {
    $wyniki = pesel($pesel);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dekodowanie PESEL</title>
</head>
<body>
<h1>Dekodowanie PESEL</h1>
<form method="post" action="">
    <label for="pesel">Podaj PESEL:</label>
    <input type="text" id="pesel" name="pesel" value="<?php echo $pesel; ?>">
    <input type="submit" value="Dekoduj">
</form>

<?php if (!empty($wyniki)): ?>
    <h2>Wyniki dekodowania:</h2>
    <p>Data urodzenia: <?php echo $wyniki['data_urodzenia']; ?></p>
    <p>Płeć: <?php echo $wyniki['plec']; ?></p>
<?php endif; ?>
</body>
</html>
