<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Z03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie Z03</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią geometryczną.
        Wynik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>

</section>
<br>
<form action="index.php" method="post">Podaj a:
    <input type="number" name="first"><br>Podaj b:
    <input type="number" name="second"><br>Podaj c:
    <input type="number" name="third"><br>Podaj d:
    <input type="number" name="fourth">
    <input type="submit" name="wyslij" value="Wyślij">
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {


    $first = $_POST['first'];
    $second = $_POST['second'];
    $third = $_POST['third'];
    $fourth = $_POST['fourth'];
    $liczba = $first * $second * $third * $fourth;
    function pierwiastekCzwartegoStopnia($liczba) {
        return $liczba ** (1/4);
    }
    echo "a: $first<br>";
    echo "b: $second<br>";
    echo "c: $third<br>";
    echo "d: $fourth<br>";
    echo "srednia: ".pierwiastekCzwartegoStopnia($liczba)."<br>";
    $zaokraglona = number_format(pierwiastekCzwartegoStopnia($liczba), 3, '.', '');
    echo "zaokraglona: $zaokraglona";
}
?>
</body>
</html>