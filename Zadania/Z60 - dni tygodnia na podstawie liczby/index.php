<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 60</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 60</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla podanej liczby całkowitej z przedziału
        od 1 do 7 wypisuje jaki to dzień tygodnia. Zakładamy, że 1 to poniedziałek.
        W przypadku liczby z poza zakresu należy wyświetlić informację o błędzie.
</pre>
</section>
<section>
    <form action="" method="post">
        <label for="liczba">Podaj liczbe calkowita: </label><br>
        <input type="number" id="liczba" name="liczba">
        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if (isset($_POST['liczba'])) {
    $liczba = $_POST['liczba'];
    $tekst = "";


    switch ($liczba) {
        case 1:
            $tekst = "Poniedzialek";
            break;
        case 2:
            $tekst = "Wtorek";
            break;
        case 3:
            $tekst = "Sroda";
            break;
        case 4:
            $tekst = "Czwartek";
            break;
        case 5:
            $tekst = "Piatek";
            break;
        case 6:
            $tekst = "Sobota";
            break;
        case 7:
            $tekst = "Niedziela";
            break;
        default:
            $tekst = "podana liczba nie miesci sie w zakresie.";
    }
}
echo "podana liczba: $liczba<br>";
echo "Nazwa dnia tygodnia: $tekst<br>";
?>
</body>
</html>