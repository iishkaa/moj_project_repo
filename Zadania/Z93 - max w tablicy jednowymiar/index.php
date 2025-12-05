<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 93</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 93</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który wczytuje liczby całkowite do jednowymiarowej tablicy, wyświetla tę tablicę i wyświetla maksymalną wartość zapisaną w tablicy.
        Użytkownik wprowadza liczby do komponentu textarea oddzielone przecinkami. Program powinien zweryfikować, czy podane wartości są liczbami całkowitymi,
        a w odpowiedzi podać liczbę elementów w tablicy oraz maksymalną wartość.

Wskazówki dla ucznia:
Użyj explode(), aby rozdzielić ciąg z textarea na tablicę liczb na podstawie przecinków.
Zweryfikuj, czy każda wartość jest liczbą całkowitą za pomocą is_numeric() i sprawdzenia, czy po konwersji na int nie traci wartości dziesiętnej.
Użyj funkcji max(), aby znaleźć maksymalną wartość w tablicy.
Liczbę elementów uzyskaj za pomocą count().
Zabezpiecz dane wejściowe za pomocą htmlspecialchars() przy pobieraniu, aby chronić przed XSS.
</pre>
</section>
<section>
    <form action="" method="post">
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

    $values_raw = htmlspecialchars($_POST['values']);

    echo "<p><b>Wprowadzone wartości:</b> $values_raw</p>";

    $values = explode(',', $values_raw);
    $values = array_map('trim', $values);

    foreach ($values as $v) {
        if (!is_numeric($v) || intval($v) != $v) {
            echo "<p><b>Rezultat:</b> wartość '$v' nie jest liczbą całkowitą.</p>";
            exit;
        }
    }

    $values = array_map('intval', $values);

    $count = count($values);

    $max_value = max($values);


    echo "<p><b>Tablica jednowymiarowa ($count elementów):</b></p>";
    echo "<pre>";
    foreach ($values as $num) {
        echo str_pad($num, 7, " ", STR_PAD_LEFT);
    }
    echo "</pre>";

    echo "<p><b>Liczba elementów:</b> $count</p>";
    echo "<p><b>Maksymalna wartość:</b> $max_value</p>";
}
?>
</body>
</html>