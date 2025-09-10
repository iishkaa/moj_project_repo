<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>4</title>
</head>
<header>
    <h1>Zadanie P534</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<body>
<br>
<section>
    <h2>PHP zadania z plików</h2>
    <pre>Plik napisy.txt zawiera 1000 liczb binarnych zapisanych w oddzielnych wierszach.
        Napisz skrypt, który odczyta te liczby i wypisze je na ekranie w następującej postaci:

                    Nr_liczby – liczba_binarna – liczba_dziesiętna</pre>

</section>
<br>
</body>
</html>
<?php
$linie = file("napisy.txt");

if(!$linie){
    echo "błąd: nie mozna wczytac pliku";
    exit;
}

$numer = 1;

foreach($linie as $linia){
    $bin = trim($linia);

    $dec = bindec($bin); //zmiana na liczbe dziesietna

    echo "$numer - $bin - $dec<br>";
    $numer++;
}
