<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 92</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 92</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który wypełnia tablicę o wymiarach n x m, gdzie n<100 i m<100 - wartości n i m podaje użytkownik, a następnie wyświetla te liczby. Liczby należy wprowadzić do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy n i m są liczbami całkowitymi mniejszymi od 100, czy podane wartości są liczbami (całkowitymi lub rzeczywistymi), oraz czy ich liczba zgadza się z n x m, a następnie wyświetlić tablicę w czytelny sposób, np. w formie tabeli.

Wskazówki dla ucznia:
Sprawdź, czy n i m są liczbami całkowitymi (is_numeric() i is_int() po konwersji) oraz czy są mniejsze od 100.
Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
Zweryfikuj, czy każda wartość jest liczbą za pomocą is_numeric().
Przekształć jednowymiarową tablicę na dwuwymiarową, rozdzielając ją na wiersze po m elementów.
Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
</pre>
</section>
<section>
    <form action="" method="post">
        <fieldset>
            <legend>Wymiary tablicy:</legend>

            <label for="n">Liczba wierszy (n):</label><br>
            <input type="text" name="n" max="100"><br>
            <label for="m">Liczba kolumn (m):</label><br>
            <input type="text" name="m" max="100" ></fieldset>
        <fieldset>
            <legend>Wartości tablicy (liczby oddzielone przecinkami):</legend>
            <br>
            <input type="text" name="values"><br>
        </fieldset>
        <input type="submit" name="submit" value="Wyślij"><br>
    </form>
</section>
<?php
if (isset($_POST['submit'])) {
    $n_raw = htmlspecialchars($_POST['n']);
    $m_raw = htmlspecialchars($_POST['m']);
    $values_raw = htmlspecialchars($_POST['values']);
    echo "<p><b>Wymiary tablicy: n = $n_raw, m = $m_raw</b></p>";
    echo "<p><b>Wprowadzone liczby:</b> $values_raw</p>";
    if (!is_numeric($n_raw)) {
        echo "<p><b>Rezultat:</b> n musi być liczbą.</p>";
        exit;
    }

    $n = (int)$n_raw;

    if ($n_raw != $n || $n <= 0 || $n >= 100) {
        echo "<p><b>Rezultat:</b> n musi być dodatnią liczbą całkowitą mniejszą od 100.</p>";
        exit;
    }
    if (!is_numeric($m_raw)) {
        echo "<p><b>Rezultat:</b> m musi być liczbą.</p>";
        exit;
    }

    $m = (int)$m_raw;

    if ($m_raw != $m || $m <= 0 || $m >= 100) {
        echo "<p><b>Rezultat:</b> m musi być dodatnią liczbą całkowitą mniejszą od 100.</p>";
        exit;
    }
    $values = explode(',', $values_raw);
    $values = array_map('trim', $values);
    if (count($values) != $n * $m) {
        echo "<p><b>Rezultat:</b> liczba wartości (" . count($values) . ") nie zgadza się z n×m = " . ($n*$m) . ".</p>";
        exit;
    }
    foreach ($values as $v) {
        if (!is_numeric($v)) {
            echo "<p><b>Rezultat:</b> wartość '$v' nie jest liczbą.</p>";
            exit;
        }
    }
    $values = array_map('floatval', $values);
    $array2D = [];
    $index = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $array2D[$i][$j] = $values[$index++];
        }
    }
    echo "<p><b>Tablica $n x $m:</b></p>";
    echo "<pre>";

    foreach ($array2D as $row) {
        foreach ($row as $num) {
            echo str_pad($num, 10, " ", STR_PAD_LEFT);
        }
        echo "\n";
    }

    echo "</pre>";
}
?>




</body>
</html>