<!DOCTYPE html>
<html>
    <head>
        <title>Dodajte zapis</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>Dodajte novo uplatno mesto</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="{$SCRIPT_NAME}?action=insertData">
            <ul>
                <li><label>RedniBroj:</label><input type="text" name="rednibroj" required></li>
                <li><label>ID:</label><input type="text" name="id" required></li>
                <li><label>Naziv:</label><input type="text" name="naziv" required></li>
                <li><label>Grad:</label><input type="text" name="grad"></li>
                <li><label>Adresa:</label><input type="text" name="adresa"></li>
                <li><label>Država:</label><input type="text" name="drzava"></li>
                <li><label>Koordinate:</label><input type="text" name="koordinate"></li>
                <li><label>Menadžer:</label><input type="text" name="menadzer"></li>
                <li><label>Asistent:</label><input type="text" name="asistent"></li>
                <li><label>Telefon:</label><input type="text" name="telefon"></li>
                <li><label>Radno vreme:</label><input type="text" name="radnovreme"></li>
                <li><label>Rulet:</label><input type="text" name="rulet"></li>
                <li><label>Simfonija:</label><input type="text" name="simfonija"></li>
                <li><label>Galerija:</label><input type="text" name="galerija"></li>
                <li><label>Mozzart kafić:</label><input type="text" name="mozzartkafic"></li>
                <li><button type="submit" value="submit">Pošalji</button></li>
            </ul>
            <a href=index.php>Nazad na pretragu</a>
        </form>
    </body>
</html>