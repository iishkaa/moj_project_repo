<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T51a</title>
</head>
<header>
    <h1>Zadanie T51a</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Liczba odkryta</h2>
    <pre>Liczbą odkrytą nazywamy liczbę całkowitą większą od 0, której wartość jest podzielna przez każdą cyfrę różną od zera,
        z której się składa jej zapis.
        Jeśli liczba całkowita jest zapisana w systemie liczbowym o podstawie p, gdzie 2≤p≤10, to jest ona liczbą odkrytą,
        jeśli jej wartość w systemie dziesiętnym jest podzielna przez każdą cyfrę różną od zera,
        z której się składa jej zapis w systemie o podstawie p.

Przykłady:

Dla p=10 liczbą odkrytą jest liczba 24, ponieważ dzieli się przez 2 oraz 4,
        natomiast przykładem liczby nieodkrytej jest liczba 26,
        ponieważ dzieli się przez 2, ale nie dzieli się przez 6.

Napisz funkcję w języku PHP, która dla podanej liczby dziesiętnej większej od 0 zwraca TRUE,
        gdy liczba jest odkryta i FALSE w przeciwnym wypadku.</pre>
    <form action="index.php" method="post">Podaj liczbe:
        <input type="number" name="liczba"><br>
        <input type="submit" name="wyslij" value="Wyślij">
    </form>
</section>
<br>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $liczba = $_POST['liczba'];


    function liczba_odkryta($liczba, $podstawa = 10)
    {
        if ($liczba <= 0 || $podstawa < 2 || $podstawa > 10) {
            return false;
        }

        $oryginalna = $liczba;
        $cyfry = [];


        while ($liczba > 0) {
            $cyfry[] = $liczba % $podstawa;
            $liczba = intdiv($liczba, $podstawa);
        }


        foreach ($cyfry as $cyfra) {
            if ($cyfra != 0 && $oryginalna % $cyfra != 0) {
                return false;
            }
        }

        return true;
    }


    var_dump(liczba_odkryta(24));
    var_dump(liczba_odkryta(26));
    var_dump(liczba_odkryta(21, 8));

}
?>