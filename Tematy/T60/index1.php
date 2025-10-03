<?php
//wyswietli imie, naz3isko, where wynagrodzenie > 90 000
$db = mysqli_connect("localhost", "root", "", "3i_2_baza1");
$q = "SELECT pracownicy.imie,pracownicy.nazwisko FROM pracownicy WHERE pracownicy.wynagrodzenie > 90000;";
$wynik = mysqli_query($db, $q);

echo "<ul>";
while($el = mysqli_fetch_row($wynik)) {
    echo "<li>". $el[0]. " " . $el[1]. "</li>";
}
echo "</ul>";
mysqli_close($db);
