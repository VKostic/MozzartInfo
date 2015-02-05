<!DOCTYPE html>
<html>
    <head>
        <title>Rezultati pretrage</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
    <body>
        <h3>"{$search}"</h3>
        {foreach $rows as $entry}
            <ul>
                <li><a class="a-a" href="{$SCRIPT_NAME}?action=view&amp;id={$entry.ID|escape}">
                        <img src="style/triangle-257.png" alt=""
                             class="textmiddle">{$entry.Naziv|escape}</a></li>
            </ul>
        {/foreach}
        <a href=index.php>Nazad na pretragu</a>
    </body>
</html>