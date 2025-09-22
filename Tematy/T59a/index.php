<?php
if(isset($_COOKIE['wizyta'])){
    $ostatniaWizyta = $_COOKIE['wizyta'];
    echo "Witamy ponownie! <br> Ostatni raz odwiedziles nas: ". $ostatniaWizyta;
}
else{
    echo "Witamy na naszej stronie!";
}

$aktualnaData = date("Y-m-d H:i:s");
$czasWygasniecia = time() + (60 * 60 * 24 * 365);

setcookie("wizyta", $aktualnaData, $czasWygasniecia);