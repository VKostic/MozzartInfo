<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 12:42:55
         compiled from "templates\insert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22179544e0263bf0f41-42296761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b24ff0584ca2efc41112ea89993906259032aa2' => 
    array (
      0 => 'templates\\insert.tpl',
      1 => 1416224571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22179544e0263bf0f41-42296761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544e0263c3f140_56293776',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e0263c3f140_56293776')) {function content_544e0263c3f140_56293776($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Dodajte zapis</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>Dodajte novo uplatno mesto</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=insertData">
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
                <li><label>Telefon:</label><input type="text" name="telefon" required></li>
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
</html><?php }} ?>
