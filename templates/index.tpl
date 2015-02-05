<!DOCTYPE html>
<html>
    <head>
        <title>Pretraga</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
    <body>
        <h3>Mozzart uplatna mesta - pretraga</h3>
        <form method="post" action="{$SCRIPT_NAME}?action=search">
            Unesite željeni sadržaj za pretragu:
            <input type="text" name="search">
            <select name="field">
                <option value="id">ID</option>
                <option value="naziv">Naziv</option>
                <option value="grad">Grad</option>
                <option value="adresa">Adresa</option>
                <option value="drzava">Država</option>
                <option value="koordinate">Koordinate</option>
                <option value="menadzer">Menadžer</option>
                <option value="asistent">Asistent</option>
                <option value="telefon">Telefon</option>
                <option value="radnovreme">Radno vreme</option>
                <option value="rulet">Rulet</option>
                <option value="simfonija">Simfonija</option>
                <option value="galerija">Galerija</option>
                <option value="mozzartkafic">Mozzart Kafić</option>
            </select>
            <button type="submit" value="submit">Pretraži</button>
        </form><br/>
        <a href="{$SCRIPT_NAME}?action=insert">
            <img src="style/triangle-256.png" alt=""
                 class="textmiddle">Dodajte novo uplatno mesto u bazu</a><br/>
        <a href="{$SCRIPT_NAME}?action=list">
            <img src="style/triangle-256.png" alt=""
                 class="textmiddle">Pregledajte sva uplatna mesta</a>
    </body>
</html>