<?php
//funkcja - obliczaniee ile do uro
function dniDoUrodzin($urodziny) {
    $dzis = new DateTime();
    $dataUrodzin = DateTime::createFromFormat('Y-m-d', $urodziny);

    if (!$dataUrodzin) {
        return false;
    }

    $dataUrodzin->setDate((int)$dzis->format("Y"), (int)$dataUrodzin->format("m"), (int)$dataUrodzin->format("d"));

    // Jeślijuż były w tym roku
    if ($dataUrodzin < $dzis) {
        $dataUrodzin->modify('+1 year');
    }

    $roznica = $dzis->diff($dataUrodzin);
    return $roznica->days;
}


if (!isset($_COOKIE['dane']) && !isset($_POST['nazw']) && !isset($_POST['urodziny'])) {
    ?>
    <!DOCTYPE HTML>
    <html>
    <head>
        <title>Dane_user</title>
        <meta charset="UTF-8">
    </head>
    <body>
    <form action="index.php" method="post">
        Podaj nazwisko i imię:<br>
        <input type="text" name="nazw" required size="35"><br><br>

        Urodziny:<br>
        <input type="date" name="urodziny" required><br><br>

        <p><input type="submit" value="Wyślij" name="wyslij"></p>
    </form>
    </body>
    </html>

    <?php
} elseif (isset($_POST['nazw']) && isset($_POST['urodziny'])) {

    $nazw = trim($_POST['nazw']);
    $urodziny = $_POST['urodziny'];

    setcookie('dane', $nazw, time() + 60*60*24*365);        // 1 rok
    setcookie('urodziny', $urodziny, time() + 60*60*24*365); // 1 rok

    echo "<p>Dziękujemy za wprowadzenie danych, <strong>$nazw</strong>.</p>";

    $dni = dniDoUrodzin($urodziny);
    if ($dni !== false) {
        echo "<p>Twoje urodziny będą za <strong>$dni dni</strong>.</p>";
    } else {
        echo "<p>Nieprawidłowy format daty urodzin.</p>";
    }

} else {
    $nazw = htmlspecialchars($_COOKIE['dane']);
    $urodziny = $_COOKIE['urodziny'] ?? '';

    echo "<p>Witamy po raz kolejny, <strong>$nazw</strong>!</p>";

    if (!empty($urodziny)) {
        $dni = dniDoUrodzin($urodziny);
        if ($dni !== false) {
            echo "<p>Twoje urodziny będą za <strong>$dni dni</strong>.</p>";
        } else {
            echo "<p>Nieprawidłowy format daty urodzin zapisany w cookie.</p>";
        }
    } else {
        echo "<p>Nie podano daty urodzin.</p>";
    }
}
?>
