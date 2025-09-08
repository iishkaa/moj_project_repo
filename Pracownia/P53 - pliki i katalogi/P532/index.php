<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>P532</title>
</head>
<header>
    <h1>Zadanie P532</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<br>
<section>
    <h2>Zadanie P532</h2>
    <pre>Napisz skrypt, który do pliku tekstowego o nazwie narodoweCzytanie.txt zapisze następujący tekst:

            W TYM ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R.
        W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”.
        WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.
        NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
        FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.

        W zapisanym pliku zachowaj wielkość liter i podział na wiersze.
        Zwróć uwagę, że każde nowe zdanie zaczyna się od nowego wiersza.

*Napisz funkcję, która odczyta dane z pliku narodoweCzytanie.txt i wypisze je na stronie z zachowaniem podziału na wiersze.</pre>

</section>
<br>
<body>
<?php
    $tekst = <<<TEKST
W TYM   ROKU NARODOWE CZYTANIE POD HONOROWYM PATRONATEM PARY PREZYDENCKIEJ ODBĘDZIE SIĘ 08.09.2018 R.
        W STULECIE ODZYSKANIA NIEPODLEGŁOŚCI WYBRANO POWIEŚĆ STEFANA ŻEROMSKIEGO „PRZEDWIOŚNIE”.
        WŁĄCZAJĄC SIĘ DO OGÓLNOPOLSKIEJ AKCJI, ZAPRASZAMY DO WSPÓLNEGO CZYTANIA W NASZEJ SZKOLE W PRZEDDZIEŃ TEGO WYDARZENIA 07.09.2018 R.
        NA DRUGIEJ GODZINIE LEKCYJNEJ W AULI SZKOLNEJ. CZYTAĆ BĘDĄ UCZNIOWIE KLASY 2M.
        FORMUŁA SPOTKANIA NIE JEST ZAMKNIĘTA – KAŻDY MOŻE PRZYŁĄCZYĆ SIĘ DO CZYTANIA LUB SŁUCHANIA.
TEKST;

// Zapis do pliku
file_put_contents("narodoweCzytanie.txt", $tekst);

// Krok 2: Funkcja odczytująca plik i wyświetlająca go z podziałem na linie
function wyswietlTekstZNarodowegoCzytania($nazwaPliku) {
    if (file_exists($nazwaPliku)) {
        $zawartosc = file_get_contents($nazwaPliku);
        // Zamiana znaków nowej linii na <br> aby zachować formatowanie na stronie
        echo nl2br($zawartosc);
    } else {
        echo "Plik $nazwaPliku nie istnieje.";
    }
}

// Wywołanie funkcji
wyswietlTekstZNarodowegoCzytania("narodoweCzytanie.txt");

?>