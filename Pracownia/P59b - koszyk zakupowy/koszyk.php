<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Koszyk</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <h2>P59b - koszyk zakupowy</h2>
    <p>Autor: Michalina Wolna 3p_2</p></section>
<pre>PHP - zastosowanie sesji - koszyk zakupowy


Na podstawie przykładu w
    podręczniku wykonaj projekt strony symulującej zachowanie koszyka zakupowego w sklepie internetowym.</pre>
<p><b>Zawartość koszyka</b></p>
<?php
if(isset($_SESSION['koszyk'])) {
    foreach(unserialize($_SESSION['koszyk'])as $produkt) {
        echo "<li>" .$produkt."</li>";
    }
} else {
    echo "brak sesji";
}
?>
<p><a href="lista.php">Przejdź do listy produktów</a></p>
</body>
</html>