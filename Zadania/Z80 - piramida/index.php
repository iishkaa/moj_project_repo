<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 80</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 80</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla podanej liczby całkowitej A
        wyświetla piramidę znaków | o ilości wierszy równej A (maksymalna dopuszczalna wartość A = 50).
</pre>
</section>
<section>
    <form action="" method="post">
        <label for="liczbaA">Podaj liczbe A:</label>
        <input type="number" name="liczbaA" max="50">
        <input type="submit" name="submit" value="Wyślij">
    </form>
</section>
<?php
if(isset($_POST['submit'])) {
    $liczbaA = $_POST['liczbaA'];
    for($i = 1; $i <= $liczbaA; $i++){
        $znaczek = str_repeat("|", $i);
        echo "{$znaczek}<br>";
        echo "<br>";
    }
}
?>
</body>
</html>