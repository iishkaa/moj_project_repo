<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 78</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 78</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który odczytuje dwie wartości będące
        dużymi literami alfabetu angielskiego i wypisuje litery od pierwszej do drugiej.
</pre>
</section>
<section>
    <form action="" method="post">
        <label for="liczbaA">Podaj znak (A-Z):</label>
        <input type="text" name="liczbaA">
        <label for="liczbaA">Podaj znak (A-Z):</label>
        <input type="text" name="liczbaB">
        <input type="submit" name="submit" value="Wyślij">
    </form>
</section>
<?php
if(isset($_POST['submit'])) {
    $liczbaA = $_POST['liczbaA'];
    $liczbaB = $_POST['liczbaB'];

    $start = ord($liczbaA);
    $end = ord($liczbaB);

    for ($i = $start; $i <= $end; $i++) {
        echo chr($i) . " ";
    }

    echo PHP_EOL;
}
?>
</body>
</html>