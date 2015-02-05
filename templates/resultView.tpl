<!DOCTYPE html>
<html>
    <head>
        <title>Detaljni podaci</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>{$result.Naziv|escape}</h3>
        <ul>
            <li>Redni broj: {$result.RedniBroj|escape}</li>
            <li>ID: {$result.ID|escape}</li>
            <li>Naziv: {$result.Naziv|escape}</li>
            <li>Grad: {$result.Grad|escape}</li>
            <li>Adresa: {$result.Adresa|escape}</li>
            <li>Država: {$result.Drzava|escape}</li>
            <li>Koordinate: {$result.Koordinate|escape}</li>
            <li>Menadžer: {$result.Menadzer|escape}</li>
            <li>Asistent: {$result.Asistent|escape}</li>
            <li>Telefon: {$result.Telefon|escape}</li>
            <li>Radno vreme: {$result.RadnoVreme|escape}</li>
            <li>Rulet: {$result.Rulet|escape}</li>
            <li>Simfonija: {$result.Simfonija|escape}</li>
            <li>Galerija: {$result.Galerija|escape}</li>
            <li>Mozzart kafić: {$result.MozzartKafic|escape}</li>
            <li><a href="{$SCRIPT_NAME}?action=delete&amp;del={$result.RedniBroj|escape}"
                   onclick='if(!confirm("Da li ste sigurni?")) return false;'>
                    <img src="style/triangle-256.png" class="textmiddle" alt="">Izbriši</a>
                <a href="{$SCRIPT_NAME}?action=edit&amp;edt={$result.RedniBroj|escape}">
                    <img src="style/triangle-256.png" class="textmiddle" alt="">Izmeni</a></li>
        </ul>
        <a href=index.php>Nazad na pretragu</a>
    </body>
</html>