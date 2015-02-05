<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 14:11:53
         compiled from "templates\returnInsert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83654588f36ce63b3-35992349%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac9a616e11c79e8a1fea25d0877a778b3b8005c7' => 
    array (
      0 => 'templates\\returnInsert.tpl',
      1 => 1416224571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83654588f36ce63b3-35992349',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54588f36d2c8c4_70248830',
  'variables' => 
  array (
    'SCRIPT_NAME' => 0,
    'record' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54588f36d2c8c4_70248830')) {function content_54588f36d2c8c4_70248830($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Pogrešni podaci</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3>Dodajte novo uplatno mesto</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=insertData">
            <ul>
                <li><label>RedniBroj:</label><input type="text" name="rednibroj"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['rednibroj'], ENT_QUOTES, 'UTF-8', true);?>
"
                                                    class="error" required></li>
                <li><label>ID:</label><input type="text" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>Naziv:</label><input type="text" name="naziv"
                                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['naziv'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>Grad:</label><input type="text" name="grad"
                                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['grad'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Adresa:</label><input type="text" name="adresa"
                                                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['adresa'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Država:</label><input type="text" name="drzava"
                                                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['drzava'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Koordinate:</label><input type="text" name="koordinate"
                                                     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['koordinate'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Menadžer:</label><input type="text" name="menadzer"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['menadzer'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Asistent:</label><input type="text" name="asistent"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['asistent'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Telefon:</label><input type="text" name="telefon"
                                                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['telefon'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>Radno vreme:</label><input type="text" name="radnovreme"
                                                      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['radnovreme'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Rulet:</label><input type="text" name="rulet" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['rulet'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Simfonija:</label><input type="text" name="simfonija"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['simfonija'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Galerija:</label><input type="text" name="galerija"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['galerija'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Mozzart kafić:</label><input type="text" name="mozzartkafic"
                                                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['record']->value['mozzartkafic'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><button type="submit" value="submit">Pošalji</button></li>
            </ul>
            <a href=index.php>Nazad na pretragu</a>
        </form>
    </body>
</html><?php }} ?>
