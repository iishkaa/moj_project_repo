<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Projektowanie butów</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<section><h2>P58 - zaprojektuj własne trampki</h2>
    <p>Autor: Michalina Wolna 3p_2</p></section>
<pre>PHP pobieranie danych za pomocą formularza


Zapoznaj się z rozdziałem podręcznika.
    Opracuj własny formularz i skrypt pobierający dane.
    Do wykonania zadania użyj różne komponenty formularzy.
    Przykładowy wygląd formularza pokazany jest na załączonej grafice.</pre>
<h1>Formularz konkursu „Podrasuj swoje buty!”</h1>
<p>Twoje stare buty Ci się już znudziły? Zaprojektuj nowe!</p>

<form name="shoeForm">
    <fieldset>
        <legend>Podstawowe dane</legend>
        <label>Imię i nazwisko: <input type="text" name="imie" required></label><br>
        <label>E-mail: <input type="email" name="email" required></label><br>
        <label>Telefon: <input type="tel" name="phone"></label><br>
        <label>Moje buty są TAKIE stare:<br>
            <textarea name="story" rows="4" maxlength="300"></textarea>
        </label>
    </fieldset>
    <fieldset>
        <legend>Własny projekt butów</legend>
        <label>Kolor:
            <input type="radio" name="color" value="czerwony">:czerwony
            <input type="radio" name="color" value="niebieski" checked>:niebieski
            <input type="radio" name="color" value="czarny">:czarny
            <input type="radio" name="color" value="srebrny">srebrny
        </label>
        <br>
        <label>Opcje dodatkowe:<br>
            <input type="checkbox" name="adds[]" value="sznurowki"> Błyszczące sznurówki <br>
            <input type="checkbox" name="adds[]" value="logo"> Metalowe logo <br>
            <input type="checkbox" name="adds[]" value="podeszwy"> Świecące podeszwy <br>
            <input type="checkbox" name="adds[]" value="MP3"> Odtwarzanie MP3
        </label>
        <br>
        <label>Rozmiar:
            <select id="size">
                <option>37</option><option>38</option><option>39</option>
                <option>40</option><option>41</option><option>42</option>
                <option>43</option><option>44</option><option>45</option>
            </select>
        </label>
    </fieldset>
    <input type="submit">Podrasuj swoje buty!</input>
</form>

<div name="result" class="hidden">
    <h2>Twoje dane:</h2>
    <p name="output"></p>
</div>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST['imie'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $story = $_POST['story'];
        $color = $_POST['color'];
        $adds = $_POST['adds'];
        $size = $_POST['size'];

        echo "twoje dane:";
        echo "imie: $imie";
        echo "email: $email";
        echo "phone: $phone";
        echo "story: $story";
        echo "color: $color";
        foreach ($adds as $add) {
            echo "$add<br>";
        }
        echo "$size<br>";
    }
?>

</body>
</html>