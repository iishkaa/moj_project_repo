<?php
$db = mysqli_connect("localhost", "root", "", "3p_02_pracownicy_w_kolorze");
if (!$db) {
    die("Błąd połączenia: " . mysqli_connect_error());
}
$q = "SELECT * FROM mock_data;";
$wynik = mysqli_query($db, $q);
if (!$wynik) {
    die("Błąd zapytania: " . mysqli_error($db));
}
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>ID</th><th>Imię</th><th>Nazwisko</th><th>Email</th><th>Gender</th><th>IP adress</th><th>Kolor</th></tr>";
while ($el = mysqli_fetch_row($wynik)) {
    $id = htmlspecialchars($el[0]);
    $imie = htmlspecialchars($el[1]);
    $nazwisko = htmlspecialchars($el[2]);
    $email = htmlspecialchars($el[3]);
    $gender = htmlspecialchars($el[4]);
    $ip = htmlspecialchars($el[5]);
    $color = htmlspecialchars($el[6]);
    echo "<tr style='background-color: $color'>
            <td>$id</td>
            <td>$imie</td>
            <td>$nazwisko</td>
            <td>$email</td>
            <td>$gender</td>
            <td>$ip</td>
            <td>$color</td>
          </tr>";
}
echo "</table>";
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie T61c - Praca z bazą w kolorze</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T61c - Praca z bazą w kolorze</h1>
<h2>Autor: Michalina Wolna 3p_2</h2>
<hr>
<section>
    <pre>Korzystając ze strony https://mockaroo.com/ wygeneruj w SQL następujące dane 50 pracowników:

id
first_name
last_name
email
gender
ip_address
color
Wartość color powinna być wyrażona w liczbie szesnastkowej.

Utwórz bazę danych 3p_02_pracownicy_w_kolorze.
Zaimportuj dane z wygenerowanego pliku.
Napisz skrypt php, który wyświetli dane pracowników na tle koloru zapisanego w kolumnie color.
Jako rozwiązanie prześlij: wygenerowany plik sql, eksport bazy danych oraz skrypt php realizujący zadanie. </pre>
</section>

</body>
</html>

