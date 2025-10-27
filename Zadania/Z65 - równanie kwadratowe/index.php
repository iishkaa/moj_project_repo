<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 65</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 65</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który oblicza pierwiastki równania kwadratowego.
        Program dla danych A, B i C ma sprawdzać czy równanie jest kwadratowe,
        czy ma jeden czy dwa pierwiastki i czy ma rozwiązanie.
</pre>
</section>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Równanie kwadratowe</title>
</head>
<body>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Równanie kwadratowe</title>
</head>
<body>
<section>
    <form action="" method="post">
        <label for="liczbaA">Podaj A: </label><br>
        <input type="number" id="liczbaA" name="liczbaA" required><br>
        <label for="liczbaB">Podaj B: </label><br>
        <input type="number" id="liczbaB" name="liczbaB" required><br>
        <label for="liczbaC">Podaj C: </label><br>
        <input type="number" id="liczbaC" name="liczbaC" required><br><br>
        <input type="submit" name="submit" value="Wyślij">
    </form>
</section>

<?php
if (isset($_POST['submit'])) {
    $liczbaA = (float)$_POST['liczbaA'];
    $liczbaB = (float)$_POST['liczbaB'];
    $liczbaC = (float)$_POST['liczbaC'];

    echo "A: $liczbaA <br>B: $liczbaB <br>C: $liczbaC <br>";

    if ($liczbaA == 0) {
        echo "<strong>To nie jest równanie kwadratowe.</strong><br>";

        if ($liczbaB != 0) {
            $x = -$liczbaC / $liczbaB;
            echo "To jest równanie liniowe: {$liczbaB}x + {$liczbaC} = 0<br>";
            echo "Rozwiązanie: x = $x";
        } else {
            if ($liczbaC == 0) {
                echo "Równanie ma nieskończenie wiele rozwiązań (0 = 0).";
            } else {
                echo "Równanie sprzeczne (brak rozwiązań).";
            }
        }
    } else {

        $delta = $liczbaB ** 2 - (4 * $liczbaA * $liczbaC);

        echo "Postać równania: f(x) = $liczbaA x<sup>2</sup> + $liczbaB x + $liczbaC<br>";

        if ($delta > 0) {
            $x1 = (-$liczbaB - sqrt($delta)) / (2 * $liczbaA);
            $x2 = (-$liczbaB + sqrt($delta)) / (2 * $liczbaA);
            echo "Rozwiązanie: dwa pierwiastki:<br>x₁ = $x1<br>x₂ = $x2";
        } elseif ($delta == 0) {
            $x = -$liczbaB / (2 * $liczbaA);
            echo "Rozwiązanie: jeden pierwiastek:<br>x = $x";
        } else {
            echo "Rozwiązanie: brak pierwiastków rzeczywistych.";
        }
    }
}
?>
</body>
</html>
