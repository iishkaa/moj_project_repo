<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T555</title>
</head>
<header>
    <h1>Zadanie T555</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie T555</h2>
    <pre>Napisz funkcję, która na podstawie danych pobranych z tablicy zwracanej
        przez funkcję getdate() wyświetli bieżącą datę.
        W dacie miesiąc ma być wyświetlony w postaci tekstu w języku polskim.</pre>

</section>
<br>
<body>
<?php
$polskie_miesiace = [
    1 => 'stycznia',
    2 => 'lutego',
    3 => 'marca',
    4 => 'kwietnia',
    5 => 'maja',
    6 => 'czerwca',
    7 => 'lipca',
    8 => 'sierpnia',
    9 => 'września',
    10 => 'października',
    11 => 'listopada',
    12 => 'grudnia'
];
    function wyswietlDate($data){
        global $polskie_miesiace;
        $dzien = $data['mday'];
        $miesiac = $data['mon'];
        $rok = $data['year'];

        return $dzien .' ' . $polskie_miesiace[$miesiac] . ' ' . $rok;
    }
    $data = getdate();
    echo wyswietlDate($data);
?>
