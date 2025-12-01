<?php
$db = mysqli_connect("localhost", "root", "", "3p_2_baza_pracownikow");
if (isset($_POST['create'])) {
$q = "CREATE TABLE IF NOT EXISTS pracownicy (id INT AUTO_INCREMENT PRIMARY KEY, nazwisko VARCHAR(50), imie VARCHAR(50) , stanowisko VARCHAR(100), dzial VARCHAR(50), sekcja VARCHAR(50));";
if (mysqli_query($db, $q)) {
        echo "<p> Utworzono tabelę 'pracownicy'.</p>";
    } else {
        echo "<p> Błąd tworzenia tabeli: " . mysqli_error($db) . "</p>";
    }
}

if (isset($_POST['load'])) {
    $plik = "pracownicy.txt";
    if (!file_exists($plik)) {
        echo "<p> Brak pliku <b>$plik</b>.</p>";
    } else {
        $fp = fopen($plik, "r");
        $ile = 0;
        while (($linia = fgets($fp)) !== false) {
            $linia = trim($linia);
            if ($linia == "") continue;

            $dane = explode(";", $linia);
            if (count($dane) >= 5) {
                $imie = mysqli_real_escape_string($db, $dane[1]);
                $nazwisko = mysqli_real_escape_string($db, $dane[0]);
                $stanowisko = mysqli_real_escape_string($db, $dane[2]);
                $dzial = mysqli_real_escape_string($db, $dane[3]);
                $sekcja = mysqli_real_escape_string($db, $dane[4]);


                $q = "INSERT INTO pracownicy (nazwisko, imie, stanowisko, dzial, sekcja)
                      VALUES ('$nazwisko', '$imie', '$stanowisko', '$dzial', '$sekcja');";
                mysqli_query($db, $q);
                $ile++;
            }
        }
        fclose($fp);
        echo "<p> Załadowano $ile rekordów z pliku.</p>";
    }
}

if (isset($_POST['show'])) {
    $q = "SELECT nazwisko, imie, stanowisko, dzial, sekcja FROM pracownicy;";
    $wynik = mysqli_query($db, $q);

    if (mysqli_num_rows($wynik) > 0) {
        echo "<table border='1' cellpadding='6' cellspacing='0'>";
        echo "<tr><th>Nazwisko</th><th>Imie</th><th>Stanowisko</th><th>Dział</th><th>Sekcja</th></tr>";
        while ($el = mysqli_fetch_row($wynik)) {
            echo "<tr>";
            echo "<td>$el[0]</td><td>$el[1]</td><td>$el[2]</td><td>$el[3]</td><td>$el[4]</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Brak danych w tabeli.</p>";
    }
}

mysqli_close($db);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T60a - praca z bazą danych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T60a - praca z bazą danych</h1>
<h2>Autor: Michalina Wolna 3p_2</h2>
<hr>

<form method="post">
    <input type="submit" name="create" value="Utwórz tabelę">
    <input type="submit" name="load" value="Załaduj dane">
    <input type="submit" name="show" value="Wyświetl dane">
</form>

</body>
</html>
