<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 75a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 75a</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Zadanie 75a (rozwiązanie iteracyjne)
 Napisz program, który dla danej liczby całkowitej n wypisuje wyrazy ciągu Fibonacciego według zależności:
        <img src="075.png">
 Dla n=20 program powinien wypisać: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765
</pre>
</section>
<section>
    <form method="post">
        <label for="n">Podaj liczbę n:</label>
        <input type="text" name="n" id="n">
        <input type="submit" value="Pokaż ciąg">
    </form>
</section>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = htmlspecialchars($_POST["n"]);


        if (is_numeric($n) && intval($n) == $n && $n >= 0) {
            $n = intval($n);


            $a = 0;
            $b = 1;

            echo "<p><strong>Ciąg Fibonacciego (iteracyjnie) dla n = $n:</strong></p>";


            for ($i = 0; $i <= $n; $i++) {
                echo "F($i) = $a<br>";


                $temp = $a + $b;
                $a = $b;
                $b = $temp;
            }
        } else {
            echo "<p style='color:red;'>Podaj poprawną liczbę całkowitą większą lub równą 0!</p>";
        }
    }
    ?>
</body>
</html>