<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T511</title>
</head>
<header>
    <h1>Zadanie T551</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie T551</h2>
    <pre>Dana jest tablica zawierająca liczby. Napisz funkcję,
        która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch najmniejszych liczb zapisanych w tablicy.</pre>

</section>
<br>
<body>
<?php
    $tablica = [5,7,3,1,6];
    function sumaNajmniejszych($tablica){
        sort($tablica); //sort() - sortowanie
        return $tablica[0] + $tablica[1]; //zwrócenie sumy dwóch indeksów
    }
    echo sumaNajmniejszych($tablica);
?>
