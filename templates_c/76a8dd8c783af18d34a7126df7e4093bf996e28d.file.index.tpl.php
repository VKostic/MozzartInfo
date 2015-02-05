<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 13:50:55
         compiled from "templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26090544b90f7ac9993-05321607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a8dd8c783af18d34a7126df7e4093bf996e28d' => 
    array (
      0 => 'templates\\index.tpl',
      1 => 1416228650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26090544b90f7ac9993-05321607',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544b90f7af0a98_00813709',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b90f7af0a98_00813709')) {function content_544b90f7af0a98_00813709($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Pretraga</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
    <body>
        <h3>Mozzart uplatna mesta - pretraga</h3>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=search">
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
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=insert">
            <img src="style/triangle-256.png" alt=""
                 class="textmiddle">Dodajte novo uplatno mesto u bazu</a><br/>
        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=list">
            <img src="style/triangle-256.png" alt=""
                 class="textmiddle">Pregledajte sva uplatna mesta</a>
    </body>
</html><?php }} ?>
