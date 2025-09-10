<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>P533</title>
</head>
<header>
    <h1>Zadanie P533</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<body>
<br>
<section>
    <h2>PHP zadania z plików</h2>
    <pre>W pliku imiona.txt zapisano 7 imion, każde imię w jednym wierszu
        (plik utwórz w edytorze tekstowym np. notatnik).
        Napisz skrypt, który odczyta imiona z pliku i wyświetli je na stronie w kolejności zapisania,
        oraz w kolejności odwrotnej.</pre>

</section>
<br>
</body>
</html>
<?php
$imiona = file("imiona.txt");

foreach($imiona as $imie){
    $imie = trim($imie);
}
unset($imie); // czyszczenie referencji

echo "<h3>Imiona w kolejnosci zapisania:</h3>";
echo "<ul>";
foreach($imiona as $imie){
    echo "<li>$imie</li>";
}
echo "</ul>";
echo "<h3>Imiona w kolejnosci odwrotnej:</h3>";
echo "<ul>";
$imionaOdwrotne = array_reverse($imiona);
foreach($imionaOdwrotne as $imie){
    echo "<li>$imie</li>";
}
echo "</ul>";


//file() - czyta pliki zwraca zawartosc jako tablice (kazdy wiersz to jeden element)
//array_reverse - odwraca tablice
//trim() - usuwa biale znaki (np.\n) z poczatka i konca tekstu
//foreach() - petla do przetwarzania tablic
