<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T572</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T572</h1>
<h3>Autor: Michalina Wolna 2p_2</h3>
<pre>Zdefiniuj klasę czołg. Czołg powinien mieć następujące właściwości:

nazwa,
kolor,
ilość amunicji
oraz metody:

info() – wyświetlająca informację o czołgu,
pomaluj() – zmieniająca kolor czołgu,
załaduj() – zwiększająca ilość amunicji,
strzelaj() – wyświetla komunikat i zmniejsza ilość amunicji o 1 (w wariancie rozwiniętym należy uniemożliwić wykonanie strzału jeśli nie ma amunicji).
Utwórz obiekt klasy czołg i przetestuj działanie metod.</pre>

<?php
class Czolg{
    public $nazwa,$kolor,$amunicja;
    public function __construct($nazwa,$kolor,$amunicja){
        $this->nazwa=$nazwa;
        $this->kolor=$kolor;
        $this->amunicja=$amunicja;
    }
    public function info(){
        echo "Nazwa: $this->nazwa<br>";
        echo "Kolor: $this->kolor<br>";
        echo "Amunicja: $this->amunicja<br>";
    }
    public function pomaluj($nowykolor){
        $this->kolor=$nowykolor;
        echo "Czolg zostal pomalowany na kolor: $nowykolor<br>";
    }
    public function zaladuj($ilosc){
        $this->amunicja +=$ilosc;
        echo "Zaladowano $ilosc sztuk amunicji. Aktualnie: $this->amunicja<br>";
    }
    public function strzelaj(){
        if($this->amunicja > 0){
            $this->amunicja--;
            echo "Boom! strzal oddany. Pozostala amunicja:$this->amunicja<br>";
        }else{
            echo "Brak amunicji.<br>";
        }
    }
}
$czolg1 = new Czolg("Panzer","zielony",3);

$czolg1->info();
$czolg1->pomaluj("niebieski");
$czolg1->zaladuj(2);
$czolg1->strzelaj();
$czolg1->strzelaj();
$czolg1->strzelaj();
$czolg1->strzelaj();
$czolg1->strzelaj();
$czolg1->strzelaj();
$czolg1->info();
?>
</body>
</html>
