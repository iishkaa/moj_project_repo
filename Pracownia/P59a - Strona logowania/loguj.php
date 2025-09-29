<?php
session_start();
if (isset($_SESSION['log'])) {
    header('location: strona.php');
    exit();
} elseif (isset($_POST['nazwa']) && isset($_POST['haslo'])) {
    if ($_POST['nazwa'] == 'iishkaa' && $_POST['haslo'] == 'kotek123') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
    } else {
        echo "Nieprawidłowe dane logowania<br>";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Autoryzacja danych</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <style>
        p.fo {
            font-weight: bold;
            font-size: 11pt;
        }
        #log {
            font-weight: bold;
            font-size: 14pt;
        }
    </style>
</head>
<body>
<div>
    <section><h2>
            P59a - Strona logowania</h2>
        <p>Autor: Michalina Wolna 3p_2</p></section>
    <pre>PHP - strona logowania


Przyjmij, że do strony internetowej mają dostęp tylko zalogowani użytkownicy.
        Wykorzystaj mechanizm sesji do przeprowadzenia autoryzacji użytkownika.</pre>
    <p>Login: iishkaa, haslo: kotek123</p>
    <form action="loguj.php" method="post">
        <p id="log">Logowanie</p>
        <p class="fo">Nazwa użytkownika:</p>
        <input type="text" name="nazwa" size="25"><br>
        <p class="fo">Hasło:</p>
        <input type="password" name="haslo" size="25">
        <input type="submit" value="Zaloguj się">
    </form>
</div>
</body>
</html>
