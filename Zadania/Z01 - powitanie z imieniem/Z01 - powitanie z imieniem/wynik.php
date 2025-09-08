<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Powitanie z imieniem</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <?php
    $imie = $_POST["imie"];
    echo "<h1>Witaj $imie !!!!!!!!</h1>";
    echo "<h2>Milo cie widziec na naszej stronie.</h2>";
    ?>
</section>
</body>
</html>
