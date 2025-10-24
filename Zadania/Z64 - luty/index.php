<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 64</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 64</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który jak poprzednio, ale w przypadku lutego pyta dodatkowo o rok i dla lat przestępnych wyświetla 29 dni, a dla pozostałych 28.
</pre>
</section>
<section>
    <form action="" method="post">
        <label for="miesiac">Podaj numer miesiąca (1-12): </label><br>
        <input type="number" id="miesiac" name="miesiac" min="1" max="12" required>
        <br><br>
        <label for="rok">Podaj rok: </label><br>
        <input type="number" id="rok" name="rok" min="1" required>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $miesiac = intval($_POST['miesiac']);
    $rok = intval($_POST['rok']);


    if ($miesiac < 1 || $miesiac > 12) {
        echo "<p style='color:red;'>Błąd: miesiąc musi być w zakresie 1–12.</p>";
        exit;
    }

    $dniWMiesiacu = [
        1 => 31,
        2 => 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    ];

    if ($miesiac == 2) {
        if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
            $dniWMiesiacu[2] = 29;
        }
    }

    echo "<p>Miesiac numer $miesiac ma <b>$dniWMiesiacu[$miesiac]</b></p>";
}
?>

</body>
</html>
