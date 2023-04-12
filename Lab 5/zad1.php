<!DOCTYPE html>
<html>
<head>
    <title>Odwracanie kolejności wierszy</title>
</head>
<body>
<h1>Odwróć kolejność wierszy w pliku tekstowym</h1>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Prześlij plik" name="submit">
</form>
<?php
if (isset($_POST["submit"])) {
    // Sprawdzamy czy plik został przesłany
    if ($_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
        $fileName = $_FILES['fileToUpload']['name'];
        $fileSize = $_FILES['fileToUpload']['size'];
        $fileType = $_FILES['fileToUpload']['type'];
        $fileContent = file_get_contents($fileTmpPath);
        $lines = explode(PHP_EOL, $fileContent);  // Rozdzielamy zawartość pliku na wiersze
        $reversedLines = array_reverse($lines); // Odwracamy
        $reversedContent = implode(PHP_EOL, $reversedLines); // Zapis odwrotności
        file_put_contents($fileName, $reversedContent);

        echo "<p>Plik został przetworzony. Odwrócono kolejność wierszy.</p>";
    } else {
        echo "<p>Wystąpił błąd podczas przesyłania pliku. Spróbuj ponownie.</p>";
    }
}
?>
</body>
</html>

