<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>P531</title>
</head>
<header>
    <h1>Zadanie P531</h1>
    <h3>Michalina Wolna 2p_2</h3>
    <hr>
</header>
<body>
<br>
<section>
    <h2>PHP zadania z plików</h2>
    <pre>Zapoznaj się z materiałem lekcji. Utwórz skrypt, który:

            -Tworzy plik nazwisko_i_imie.txt
            -Tworzy plik o nazwie: doSkasowania.txt.
            -Kasuje plik doSkasowania.txt
            -Tworzy folder o nazwie zgodnej z Twoim nazwiskiem.
            -W tym folderze tworzy plik o nazwie nazwisko_i_imie.txt</pre>

</section>
<br>
</body>
</html>
<?php
$nazwisko = "wolna"; //dane
$imie = "michalina";

$plikImieNazwisko = $nazwisko . "_" . $imie . ".txt"; //nazwa pliku z imieniem i nazwiskiem

file_put_contents($plikImieNazwisko, "To jest plik: $plikImieNazwisko"); //1. tworzenie pliku nazwisko_imie.txt
echo "utworzono plik: $plikImieNazwisko\n";

file_put_contents("doSkasowania.txt", "Ten plik zostanie usunięty."); //2. tworzenie pliku doSkasowania.txt

if(file_exists("doSkasowania.txt")){ //usuwanie pliku doSkasowania.txt
    unlink("doSkasowania.txt"); //unlink - usuwa plik
    echo "Usunięto plik: doSkasowania.txt\n";
}
else{
    echo "Plik doSkasowania.txt nie istnieje.\n";
}

if(!is_dir($nazwisko)){ //4. tworzenie folderu o nazwie nazwiska
    mkdir($nazwisko);
    echo "Utworzono folder: $nazwisko\n";
}
else{
    echo "Folder $nazwisko już istnieje.\n";
}

//5. tworzenie pliku nazwisko_imie.txt w folderze
$sciezkaDOpliku = $nazwisko . DIRECTORY_SEPARATOR . $plikImieNazwisko;
file_put_contents($sciezkaDOpliku, "to jest plik w folderze $nazwisko\n");
echo "utworzono plik w folderze:  $sciezkaDOpliku\n";

//file_put_contents() - tworzy plik i wpisuje tekst
//unlink() - usuwa plik
//mkdir() - tworzy folder
//file_put_contents + DIRECTORY SEPARATOR - tworzy plik w folderze.
