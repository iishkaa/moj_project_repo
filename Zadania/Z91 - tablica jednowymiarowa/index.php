<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 91</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 91</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który wczytuje n liczb całkowitych do jednowymiarowej tablicy i wyświetla tę tablicę. Wartość n<100 podaje użytkownik. Liczby należy wprowadzić do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n jest liczbą całkowitą mniejszą od 100, czy podane wartości są liczbami całkowitymi, oraz czy ich liczba zgadza się z n, a następnie wyświetlić tablicę w czytelny sposób.

Wskazówki dla ucznia:
Sprawdź, czy n jest liczbą całkowitą (is_numeric() i is_int() po konwersji) oraz czy jest mniejsze od 100.
Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
Sprawdź, czy liczba wprowadzonych wartości zgadza się z n.
Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
</pre>
</section>
<section>
    <form action="" method="post">
        <fieldset>
            <legend>Liczba elementów:</legend>

            <label for="liczban">Podaj liczbe n:</label><br>
            <input type="text" name="liczban" max="100">
        </fieldset>
        <fieldset>
            <legend>Wartości tablicy (liczby całkowite oddzielone przecinkami):</legend>
            <input type="text" name="array" max="100" ></fieldset>
        <input type="submit" name="submit" value="Wyślij"><br>
    </form>
</section>
<?php
if (isset($_POST['submit'])) {

    $n_raw = htmlspecialchars($_POST['liczban']);
    $values_raw = htmlspecialchars($_POST['array']);
    echo "<p><b>Liczba elementów: n = $n_raw</b></p>";
    echo "<p><b>Wprowadzone liczby:</b> $values_raw</p>";
    if (!is_numeric($n_raw)) {
        echo "<p><b>Rezultat:</b> n musi być liczbą.</p>";
        exit;
    }
    $n = (int)$n_raw;
    if ($n_raw != $n || $n <= 0 || $n >= 100) {
        echo "<p><b>Rezultat:</b> n musi być dodatnie i mniejsze od 100.</p>";
        exit;
    }
    $values = explode(',', $values_raw);
    $values = array_map('trim', $values);
    if (count($values) != $n) {
        echo "<p><b>Rezultat:</b> liczba wartości (" . count($values) . ") nie zgadza się z n = $n.</p>";
        exit;
    }
    foreach ($values as $v) {
        if (!is_numeric($v) || intval($v) != $v) {
            echo "<p><b>Rezultat:</b> wartość '$v' nie jest liczbą całkowitą.</p>";
            exit;
        }
    }
    $values = array_map('intval', $values);
    echo "<p><b>Tablica jednowymiarowa ($n elementów):</b></p>";
    echo "<pre>";
    foreach ($values as $val) {
        echo str_pad($val, 7, " ", STR_PAD_LEFT);
    }
    echo "</pre>";
}
?>



</body>
</html>