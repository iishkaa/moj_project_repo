<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>T554</title>
</head>
<header>
    <h1>Zadanie T554</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie T554</h2>
    <pre>Napisz funkcję, która dla podanej daty w postaci
        mm,
        dd,
        YY sprawdzi,
        czy jest to prawidłowa data i jeśli tak sprawdzi,
        czy jest to data z przeszłości. Jeśli tak funkcja wypisze słowo „historia”,
        a jeśli nie wypisze „teraźniejszość lub przyszłość”.
        W przypadku błędnej danej funkcja kończy działanie i wyświetla komunikat o błędnej dacie.</pre>

</section>
<br>
<body>
<?php
function sprawdzDate($mm, $dd, $yy) {
    // Zamień dwucyfrowy rok (np. 25) na czterocyfrowy (2025)
    $rok = 2000 + $yy;

    // Sprawdzenie poprawności daty
    if (!checkdate($mm, $dd, $rok)) {
        echo "Błędna data!";
        return;
    }

    // Tworzymy timestamp dla podanej daty
    $dataUzytkownika = mktime(0, 0, 0, $mm, $dd, $rok);

    // Pobieramy dzisiejszą datę (tylko data, bez godziny)
    $dzisiaj = strtotime(date("Y-m-d"));

    // Porównanie dat
    if ($dataUzytkownika < $dzisiaj) {
        echo "historia";
    } else {
        echo "teraźniejszość lub przyszłość";
    }
}
sprawdzDate(9, 1, 24);
?>
