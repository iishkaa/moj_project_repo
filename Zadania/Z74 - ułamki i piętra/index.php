<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 74</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Zadanie 74</h1>
    <h2>Autor: Michalina Wolna 2p_2</h2>
    <hr>
</header>
<section>
    <pre>Napisz program, który dla danej liczby całkowitej N wyświetla ciąg liczb w postaci ułamka zwykłego i dziesiętnego, prezentując wynik w specyficzny sposób. Na przykład dla N=3 program powinien wyświetlić:
Piętro 1 > 1/1 - 1.000000
Piętro 2 > > 1/2 - 0.500000
            Piętro 3 > > > 1/3 - 0.333333
            > > > > Koniec wspinaczki wracamy < < < <
            Piętro 3 > > >
            Piętro 2 > >
            Piętro 1 >
            Program powinien przyjmować N z formularza i weryfikować, czy jest to liczba całkowita dodatnia.

Wskazówki dla ucznia:
Sprawdź, czy N jest liczbą całkowitą dodatnią za pomocą is_numeric() i warunku N > 0.
Użyj pętli for, aby wygenerować ułamki od 1/1 do 1/N.
Oblicz ułamek dziesiętny za pomocą dzielenia (np. 1 / $i) i sformatuj go funkcją sprintf() do 6 miejsc po przecinku.
Dodawaj znaki > zależnie od numeru piętra (np. w pętli zwiększaj ich liczbę), a potem odwracaj kolejność dla powrotu.
Zabezpiecz dane wejściowe za pomocą htmlspecialchars(), aby uniknąć problemów z XSS.
</pre>
</section>
<section>
    <form action="" method="post">
        <fieldset>
        <legend>Liczba pięter:</legend>
            <label for="N">N: </label>
        <input type="number" id="N" name="N" required><br>
        <input type="submit" name="submit" value="Wyślij">
        </fieldset>
    </form>
</section>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $N = htmlspecialchars($_POST["N"]);


    if (is_numeric($N) && intval($N) == $N && $N > 0) {
        $N = intval($N);


        for ($i = 1; $i <= $N; $i++) {
            $strzalki = str_repeat("> ", $i);
            $ulamek = "1/$i";
            $dziesietny = sprintf("%.6f", 1 / $i);
            echo "Piętro $i $strzalki $ulamek - $dziesietny<br>";
        }


        $strzalki = str_repeat("> ", $N + 1);
        $powrot = str_repeat("< ", $N + 1);
        echo "$strzalki Koniec wspinaczki wracamy $powrot<br>";


        for ($i = $N; $i >= 1; $i--) {
            $strzalki = str_repeat("> ", $i);
            echo "Piętro $i $strzalki<br>";
        }
    } else {
        echo "<p style='color:red;'>Podaj poprawną liczbę całkowitą dodatnią!</p>";
    }
}
?>
</body>
</html>