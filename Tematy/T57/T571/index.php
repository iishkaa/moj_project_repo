<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>T571</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Zadanie T571</h1>
<h3>Autor: Michalina Wolna 2p_2</h3>
<pre>Tu przesyłamy kod z klasą Osoba z dodanym polem wiek.</pre>

<?php
class osoba
{
    public $nazwisko, $imie,$wiek;
    function __construct()
    {
        $this -> nazwisko="Anonim";
        $this -> imie="Gall";
        $this -> wiek=16;
    }
    public function wpiszNazwisko($arg1)
    {
        $this->nazwisko=$arg1;
    }
    public function pobierzNazwisko()
    {
        return $this->nazwisko;
    }
    public function wpiszImie($arg2)
    {
        $this->imie=$arg2;
    }
    public function pobierzImie()
    {
        return $this ->imie;
    }
    public function wpiszWiek($wiek)
    {
        $this -> wiek=$wiek;
    }
    public function pobierzWiek()
    {
        return $this -> wiek;
    }
    function __destruct()
    {
        echo "Teraz zadziałał destruktor";
    }

}
{
    $postac2=new osoba();

    $postac2->wpiszNazwisko('Nowak');
    $postac2->wpiszImie('Adam');
    $postac2->wpiszWiek(16);

}

$postac1=new osoba();
echo $postac1->pobierzNazwisko(), $postac1->pobierzImie();
echo "<br>";
echo $postac2->pobierzNazwisko(),$postac2->pobierzImie(), $postac2->pobierzWiek();
echo "<br>";
?>
</body>
</html>
