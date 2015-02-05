<!DOCTYPE html>
<html>
    <head>
        <title>Izmena</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>{$result.Naziv|escape}</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="{$SCRIPT_NAME}?action=editRecord">
            <ul>
                <li><label>RedniBroj:</label><input type="text" name="rednibroj"
                                                    value="{$result.RedniBroj|escape}" required></li>
                <li><label>ID:</label><input type="text" name="id" value="{$result.ID|escape}" required></li>
                <li><label>Naziv:</label><input type="text" name="naziv"
                                                value="{$result.Naziv|escape}" required></li>
                <li><label>Grad:</label><input type="text" name="grad"
                                               value="{$result.Grad|escape}"></li>
                <li><label>Adresa:</label><input type="text" name="adresa"
                                                 value="{$result.Adresa|escape}"></li>
                <li><label>Država:</label><input type="text" name="drzava"
                                                 value="{$result.Drzava|escape}"></li>
                <li><label>Koordinate:</label><input type="text" name="koordinate"
                                                     value="{$result.Koordinate|escape}"></li>
                <li><label>Menadžer:</label><input type="text" name="menadzer"
                                                   value="{$result.Menadzer|escape}"></li>
                <li><label>Asistent:</label><input type="text" name="asistent"
                                                   value="{$result.Asistent|escape}"></li>
                <li><label>Telefon:</label><input type="text" name="telefon"
                                                  value="{$result.Telefon|escape}"></li>
                <li><label>Radno vreme:</label><input type="text" name="radnovreme"
                                                      value="{$result.RadnoVreme|escape}"></li>
                <li><label>Rulet:</label><input type="text" name="rulet" value="{$result.Rulet|escape}"></li>
                <li><label>Simfonija:</label><input type="text" name="simfonija"
                                                    value="{$result.Simfonija|escape}"></li>
                <li><label>Galerija:</label><input type="text" name="galerija"
                                                   value="{$result.Galerija|escape}"></li>
                <li><label>Mozzart kafić:</label><input type="text" name="mozzartkafic"
                                                        value="{$result.MozzartKafic|escape}"></li>
                <li><button type="submit" value="submit">Izmenite podatke</button></li>
            </ul>
        </form>
    </body>
</html>