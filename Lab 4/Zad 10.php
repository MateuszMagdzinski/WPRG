<!DOCTYPE html>
<html>
<head>
    <title>Zad 10</title>
</head>
<body>
<h2>Obsługa katalogów</h2>
<form method="post">
    <label>Ścieżka:</label>
    <input type="text" name="sciezka"><br><br>
    <label>Nazwa katalogu:</label>
    <input type="text" name="nazwa"><br><br>
    <label>Operacja:</label>
    <select name="operacja">
        <option value="read">Odczyt</option>
        <option value="delete">Usuń</option>
        <option value="create">Stwórz</option>
    </select><br><br>
    <input type="submit" value="Wykonaj">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $sciezka = $_POST['sciezka'];
    $nazwa = $_POST['nazwa'];
    $operacja = isset($_POST['operacja']) ? $_POST['operacja'] : 'read';

    if(substr($sciezka, -1) != "/"){
        $sciezka .= "/";
    }

    if($operacja == 'read'){
        if(file_exists($sciezka . $nazwa) && is_dir($sciezka . $nazwa)){
            $files = scandir($sciezka . $nazwa);
            echo "<h3>Lista plików w katalogu $nazwa:</h3>";
            echo "<ul>";
            foreach($files as $file){
                if($file != "." && $file != ".."){
                    echo "<li>$file</li>";
                }
            }
            echo "</ul>";
        }
        else{
            echo "<h3>Katalog $nazwa nie istnieje!</h3>";
        }
    }
    elseif($operacja == 'delete'){
        if(file_exists($sciezka . $nazwa) && is_dir($sciezka . $nazwa)){
            if(count(scandir($sciezka . $nazwa)) == 2){
                if(rmdir($sciezka . $nazwa)){
                    echo "<h3>Katalog $nazwa został usunięty.</h3>";
                }
                else{
                    echo "<h3>Wystąpił błąd podczas usuwania katalogu $nazwa.</h3>";
                }
            }
            else{
                echo "<h3>Katalog $nazwa musi być pusty, aby można go było usunąć.</h3>";
            }
        }
        else{
            echo "<h3>Katalog $nazwa nie istnieje!</h3>";
        }
    }
    elseif($operacja == 'create'){
        if(!file_exists($sciezka . $nazwa)){
            if(mkdir($sciezka . $nazwa)){
                echo "<h3>Katalog $nazwa został utworzony.</h3>";
            }
            else{
                echo "<h3>Wystąpił błąd podczas tworzenia katalogu $nazwa.</h3>";
            }
        }
        else{
            echo "<h3>Katalog $nazwa już istnieje!</h3>";
        }
    }
}
?>
</body>
</html>