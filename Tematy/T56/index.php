<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Opinie użytkowników - T56</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T56</h1>
<h3>Autor: Michalina Wolna 2p_2</h3>
<pre>Utwórz skrypt, który będzie zapisywał opinie użytkowników w pliku tekstowym opinie.txt.
    Na stronie wyświetl formularz, który pozwoli na wpisanie opinii. Nowe opinie powinny być dopisywane
    do pliku i umieszczane na jego końcu.
    Dotychczasowe opinie zapisane w pliku tekstowym powinny zostać wyświetlone na stronie i powinny
    być dostępne dla innych jej użytkowników.</pre>
<div>
    <form action="" method="post">
        <p><b>Dodaj swój komentarz na temat globalnego ocieplenia</b><br>
            (Maksymalnie 255 znaków)</p>
        <textarea name="komentarz" rows="6" cols="50" wrap="virtual"></textarea><br>
        <input type="submit" value="Wyślij">
    </form>
</div>
<!-- isset() - sprawdza czy zmienna (np $_POST['komentarz'] - zostala ustawiona -->
<!--substr() = ucina komentarz do ograniczenia np 255 znakow -->
<!--strip_tags() - usuwa wszystkie znaczniki HTML i PHP -->
<!--fopen() - otwiera plik, w trybie a - append = dopisywanie na koncu-->
<!--//fwrite() - zapisuje do pliku-->
<!--//fclose() - zamyka plik-->
<!--file_exists() - sprawdza czy plik istnieje-->
<!--file_get_contents() - wczytuje cala wartosc pliku jako ciag znakow-->
<!--trim() - usuwa biale znaki z poczatku i konca (np spacje, nowe linie)-->
<!--htmlspecialchars() - zabezpiecza kod przed interpretacja jako HTML-->
<!--nl2br() - zamienia znaki nowej linii \n na znaczniki HTML->-->

<b>Dodane opinie:</b>
<div>
    <?php
    // Jeśli formularz został przesłany
    if (isset($_POST['komentarz'])) {
        $tekst = substr($_POST['komentarz'], 0, 255);
        $tekst = strip_tags($tekst) . "\n";
        if (!$op = fopen('opinie.txt', 'a')) {
            echo "<p style='color:red;'>Błąd! Nie można otworzyć pliku opinie.txt</p>";
        } else {
            if (fwrite($op, $tekst) === false) {
                echo "<p style='color:red;'>Dodanie komentarza nie powiodło się</p>";
            }
            fclose($op);
        }
    }

    // Wyświetlanie opinii
    if (file_exists('opinie.txt')) {
        $opinie = file_get_contents('opinie.txt');
        if (trim($opinie) != '') {
            echo nl2br(htmlspecialchars($opinie));
        } else {
            echo "Brak opinii na temat zmian klimatu.";
        }
    } else {
        echo "Brak opinii na temat zmian klimatu.";
    }
    ?>
</div>
</body>
</html>
