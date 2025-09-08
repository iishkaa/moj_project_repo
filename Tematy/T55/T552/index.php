<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T552</title>
</head>
<header>
    <h1>Zadanie T552</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie T552</h2>
    <pre>Dana jest tablica zawierająca imiona. Napisz funkcję,
        która wypisuje ilość imion żeńskich zapisanych w tablicy.
        Dla uproszczenia zakładamy, że imiona żeńskie to te,
        które kończą się na literę "a".
        Proszę uwzględnić imiona Kuba i Barnaba.</pre>

</section>
<br>
<body>
<?php
//str_ends_with( &zmienna, '') - funkcja sprawdza ostatnią literę string
//strtolower($zmienna) - funkcja zmienia litery na małe
    $tablica = ['Anna', 'Kuba', 'Marta', 'Barnaba', 'Kamil','Ola'];
    function liczbazenska($tablica){
        $liczba = 0;
        foreach ($tablica as $imie){
            if(str_ends_with(strtolower($imie), 'a') && strtolower($imie) !== 'kuba' && strtolower($imie) !== 'barnaba'){
                $liczba++;
            }
        }
        return $liczba;
    }
echo liczbazenska($tablica);
?>

