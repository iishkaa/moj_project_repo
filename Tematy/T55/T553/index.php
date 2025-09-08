<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T553</title>
</head>
<header>
    <h1>Zadanie T553</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie T553</h2>
    <pre>Dane są dwie tablice.
        Napisz funkcję, która otrzymuje obie tablice w argumencie
        i zwraca posortowaną tablicę zawierającą wszystkie elementy z pierwszej i drugiej tablicy.</pre>

</section>
<br>
<body>
<?php
    $tablica1 = [1,5,6,3,8];
    $tablica2 = [5,12,3,1,6];
    function polaczenieISortowanie($tablica1, $tablica2) {
        $polaczenie = array_merge($tablica1, $tablica2); //łączy tablice, array - ciąg
        sort($polaczenie); // - sortowanie
        return $polaczenie;
    }
    $wynik = polaczenieISortowanie($tablica1,$tablica2);
    print_r($wynik);
?>

