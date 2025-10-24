<?php
$db = mysqli_connect("localhost", "root", "", "3p_2_pacjenci");

$q = "CREATE TABLE IF NOT EXISTS tabela1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    email VARCHAR(50)
);";
$wynik = mysqli_query($db, $q);

$plik = "dane.txt";
if (!file_exists($plik)) {
    echo "brak pliku";
} else {
    $fp = fopen($plik, "r");
    while (($linia = fgets($fp)) !== false) {
        $linia = trim($linia);
        if ($linia == "") continue;

        $dane = explode(";", $linia);
        if (count($dane) >= 3) {
            $imie = mysqli_real_escape_string($db, $dane[0]);
            $nazwisko = mysqli_real_escape_string($db, $dane[1]);
            $email = mysqli_real_escape_string($db, $dane[2]);


            $q = "INSERT INTO tabela1 (imie, nazwisko, email)
                  VALUES ('$imie', '$nazwisko', '$email');";
            mysqli_query($db, $q);
        }
    }
    fclose($fp);
}


$q = "SELECT imie, nazwisko, email FROM tabela1;";
$wynik = mysqli_query($db, $q);

if (mysqli_num_rows($wynik) > 0) {
    echo "<table border='1' cellpadding='6' cellspacing='0'>";
    echo "<tr><th>Imię</th><th>Nazwisko</th><th>Email</th></tr>";
    while ($el = mysqli_fetch_row($wynik)) {
        echo "<tr>";
        echo "<td>$el[0]</td><td>$el[1]</td><td>$el[2]</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "<p>Brak danych w tabeli.</p>";
}

mysqli_close($db);
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T61 - pacjenci php z bazą danych i plikiem tekstowym</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T61 - pacjenci php z bazą danych i plikiem tekstowym</h1>
<h2>Autor: Michalina Wolna 3p_2</h2>
<hr>
<section>
    <pre>1. Utwórz bazę danych o nazwie 3p_2_pacjenci.

        2. W bazie danych utwórz tabelę tabela_1 zawierającą kolumny:

        identyfikator,
        imię,
        nazwisko,
        email.
        3. Utwórz plik tekstowy o nazwie dane.txt zawierający dane 3 pacjentów.

        4. Napisz skrypt php, który czyta dane z pliku i zapisuje je do tabeli tabela_1 i wyświetla je na stronie zadanie.php w postaci tabeli.

Rozwiązanie powinno zawierać: eksport bazy, plik z danymi oraz skrypt php. </pre>
</section>

</body>
</html>
