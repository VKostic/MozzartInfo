<!DOCTYPE html>
<html>
    <head>
        <title>Spisak svih uplatnih mesta</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/list.css">
    </head>
    <body>
        <a href=index.php><img src="style/triangle-256.png" alt=""
                               class="textmiddle">Nazad na pretragu</a><br/><br/>
        <table>
            <tr>
                <th>Redni broj</th>
                <th>ID</th>
                <th>Naziv</th>
                <th>Grad</th>
                <th>Adresa</th>
                <th>Država</th>
                <th>Koordinate</th>
                <th>Menadžer</th>
                <th>Asistent</th>
                <th>Telefon</th>
                <th>Radno vreme</th>
                <th>Rulet</th>
                <th>Simfonija</th>
                <th>Galerija</th>
                <th>Mozzart kafić</th>
                <th colspan="2">Opcije</th>
            </tr>
            {foreach $data as $entry}
                <tr>
                    <td>{$entry.RedniBroj|escape}</td>
                    <td>{$entry.ID|escape}</td>
                    <td>{$entry.Naziv|escape}</td>
                    <td>{$entry.Grad|escape}</td>
                    <td>{$entry.Adresa|escape}</td>
                    <td>{$entry.Drzava|escape}</td>
                    <td>{$entry.Koordinate|escape}</td>
                    <td>{$entry.Menadzer|escape}</td>
                    <td>{$entry.Asistent|escape}</td>
                    <td>{$entry.Telefon|escape}</td>
                    <td>{$entry.RadnoVreme|escape}</td>
                    <td>{$entry.Rulet|escape}</td>
                    <td>{$entry.Simfonija|escape}</td>
                    <td>{$entry.Galerija|escape}</td>
                    <td>{$entry.MozzartKafic|escape}</td>
                    <td>
                        <a href="{$SCRIPT_NAME}?action=delete&amp;del={$entry.RedniBroj|escape}"
                           onclick='if(!confirm("Da li ste sigurni?")) return false;'>Izbriši</a>
                    </td>
                    <td>
                        <a href="{$SCRIPT_NAME}?action=edit&amp;edt={$entry.RedniBroj|escape}">Izmeni</a>
                    </td>
                </tr>
            {/foreach}
        </table>
    </body>
</html>