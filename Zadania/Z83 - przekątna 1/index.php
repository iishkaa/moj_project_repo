<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 83</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 83</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla podanej liczby całkowitej A oznaczającej ilość znaków w wierszu
        wyświetla następujący blok znaków.
        Przykład:
                    A=5
                    10000
                    01000
                    00100
                    00010
                    00001
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
    for ($i = 0; $i < $liczbaA; $i++) {
        for ($j = 0; $j < $liczbaA; $j++) {
            if ($i == $j) {
                echo "1";
            } else {
                echo "0";
            }
        }
        echo "<br>";
    }
}
?>
</body>
</html>