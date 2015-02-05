<!DOCTYPE html>
<html>
    <head>
        <title>Pogrešni podaci</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>Dodajte novo uplatno mesto</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="{$SCRIPT_NAME}?action=insertData">
            <ul>
                <li><label>RedniBroj:</label><input type="text" name="rednibroj"
                                                    value="{$record.rednibroj|escape}"
                                                    class="error" required></li>
                <li><label>ID:</label><input type="text" name="id" value="{$record.id|escape}" required></li>
                <li><label>Naziv:</label><input type="text" name="naziv"
                                                value="{$record.naziv|escape}" required></li>
                <li><label>Grad:</label><input type="text" name="grad"
                                               value="{$record.grad|escape}"></li>
                <li><label>Adresa:</label><input type="text" name="adresa"
                                                 value="{$record.adresa|escape}"></li>
                <li><label>Država:</label><input type="text" name="drzava"
                                                 value="{$record.drzava|escape}"></li>
                <li><label>Koordinate:</label><input type="text" name="koordinate"
                                                     value="{$record.koordinate|escape}"></li>
                <li><label>Menadžer:</label><input type="text" name="menadzer"
                                                   value="{$record.menadzer|escape}"></li>
                <li><label>Asistent:</label><input type="text" name="asistent"
                                                   value="{$record.asistent|escape}"></li>
                <li><label>Telefon:</label><input type="text" name="telefon"
                                                  value="{$record.telefon|escape}"></li>
                <li><label>Radno vreme:</label><input type="text" name="radnovreme"
                                                      value="{$record.radnovreme|escape}"></li>
                <li><label>Rulet:</label><input type="text" name="rulet" value="{$record.rulet|escape}"></li>
                <li><label>Simfonija:</label><input type="text" name="simfonija"
                                                    value="{$record.simfonija|escape}"></li>
                <li><label>Galerija:</label><input type="text" name="galerija"
                                                   value="{$record.galerija|escape}"></li>
                <li><label>Mozzart kafić:</label><input type="text" name="mozzartkafic"
                                                        value="{$record.mozzartkafic|escape}"></li>
                <li><button type="submit" value="submit">Pošalji</button></li>
            </ul>
            <a href=index.php>Nazad na pretragu</a>
        </form>
    </body>
</html>