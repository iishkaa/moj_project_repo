<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 76</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 76</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla podanych liczb całkowitych
         A i B wyświetla wszystkie liczby całkowite z przedziału od A do B oddzielone średnikami.
</pre>
</section>
<section>
    <form action="" method="post">
        <label for="liczbaA">Podaj liczbe A:</label>
        <input type="number" name="liczbaA">
        <label for="liczbaB">Podaj liczbe B:</label>
        <input type="number" name="liczbaB">
        <input type="submit" name="submit" value="Wyślij">
    </form>
</section>
<?php
if(isset($_POST['submit'])) {
    $liczbaA = $_POST['liczbaA'];
    $liczbaB = $_POST['liczbaB'];

    echo "A: {$liczbaA}<br>";
    echo "B: {$liczbaB}<br>";
    for($i = $liczbaA; $i <= $liczbaB; $i++) {
        echo $i . ";";
    }
}
?>
</body>
</html>