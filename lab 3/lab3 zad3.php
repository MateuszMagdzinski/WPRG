
<?php
function oblicz_wielkanoc($rok) {
    $a = $rok % 19;
    $b = floor($rok / 100);
    $c = $rok % 100;
    $d = floor($b / 4);
    $e = $b % 4;
    $f = floor(($b + 8) / 25);
    $g = floor(($b - $f + 1) / 3);
    $h = (19 * $a + $b - $d - $g + 15) % 30;
    $i = floor($c / 4);
    $k = $c % 4;
    $l = (32 + 2 * $e + 2 * $i - $h - $k) % 7;
    $m = floor(($a + 11 * $h + 22 * $l) / 451);
    $month = floor(($h + $l - 7 * $m + 114) / 31);
    $day = ($h + $l - 7 * $m + 114) % 31 + 1;

    return sprintf("%02d-%02d-%04d", $day, $month, $rok);
}

$rok = isset($_POST['rok']) ? $_POST['rok'] : '';
$data_wielkanocy = '';
if (!empty($rok)) {
    $data_wielkanocy = oblicz_wielkanoc($rok);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Obliczanie daty Wielkanocy</title>
</head>
<body>
<h1>Obliczanie daty Wielkanocy</h1>
<form method="post" action="">
    <label for="rok">Podaj rok:</label>
    <input type="text" id="rok" name="rok" value="<?php echo $rok; ?>">
    <input type="submit" value="Oblicz">
</form>

<?php if (!empty($data_wielkanocy)): ?>
    <p>Data Wielkanocy dla roku <?php echo $rok; ?>: <?php echo $data_wielkanocy; ?></p>
<?php endif; ?>
</body>
</html>

