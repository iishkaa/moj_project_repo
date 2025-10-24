<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 59</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 59</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:
            5 - 90% do 100%
            4,5 - 80% do 89%
            4 - 70% do 79%
            3,5 - 60% do 69%
            3 - 50% do 59%
            2 - poniżej 50%

</pre>
</section>
<section>
    <form action="" method="post">
        <label for="liczba">Podaj wynik studenta (%) = </label><br>
        <input type="number" id="liczba" name="liczba">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if (isset($_POST['liczba'])) {
    $liczba = $_POST['liczba'];
    $ocena = 0;

    if ($liczba > 100) {
        $ocena = -1;
    } elseif ($liczba < 50) {
        $ocena = 2;
    } elseif ($liczba < 60) {
        $ocena = 3;
    } elseif ($liczba < 70) {
        $ocena = 3.5;
    } elseif ($liczba < 80) {
        $ocena = 4;
    } elseif ($liczba < 90) {
        $ocena = 4.5;
    } else {
        $ocena = 5;
    }

    if ($ocena != -1) {
        echo "Podana wartość procentowa to: $liczba%<br>";
        echo "Ocena studenta to: $ocena";
    } else {
        echo "Trochę przesadziłeś z procentami, maksymalna wartość to 100";
    }
}
?>
</body>
</html>