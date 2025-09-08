<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z48c</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie Z48c</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <pre>Napisz program, który do dwuwymiarowej tablicy o wymiarach 7 x 7 wpisze wygenerowane losowo znaki ze zbioru:

        !, @, #, $, %, ^, &, *, (, ),+, =

        wyświetli tę tablicę,
        wyświetli ile razy w tablicy wystąpił znak @</pre>

</section>
<br>
<?php
    $tab = ['!','@','#','$','^','&','*','(',')','+','='];
    $wyniktab = [];
    $licznik = 0;

    for ($i = 0; $i < 7; ++$i){
        $wiersz = [];
        for ($j = 0; $j < 7; ++$j){
            $x = $tab[array_rand($tab)];
            if ($x === '@') {
                $licznik++;
            }
            $wiersz[] = $x;
        }
        $wyniktab[] = $wiersz;
    }
    echo "Tablica 7x7:\n";
    echo "<table>\n";
    foreach ($wyniktab as $wiersz) {
        echo "<tr>";
        foreach ($wiersz as $x) {
            echo "<td>$x</td>";
        }
        echo "</tr>";
    }
    echo "</table>\n";
    echo "\nZnak '@' wystapil $licznik razy.\n";

?>
</body>
</html>
