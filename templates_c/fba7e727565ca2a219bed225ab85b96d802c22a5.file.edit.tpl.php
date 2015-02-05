<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 11:31:45
         compiled from "templates\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11230544e2480ce8cf7-75686521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba7e727565ca2a219bed225ab85b96d802c22a5' => 
    array (
      0 => 'templates\\edit.tpl',
      1 => 1416220301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11230544e2480ce8cf7-75686521',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544e2480d5dff6_68571392',
  'variables' => 
  array (
    'result' => 0,
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e2480d5dff6_68571392')) {function content_544e2480d5dff6_68571392($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Izmena</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <span class="required-field">* obavezna polja</span>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=editRecord">
            <ul>
                <li><label>RedniBroj:</label><input type="text" name="rednibroj"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>ID:</label><input type="text" name="id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['ID'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>Naziv:</label><input type="text" name="naziv"
                                                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
" required></li>
                <li><label>Grad:</label><input type="text" name="grad"
                                               value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Grad'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Adresa:</label><input type="text" name="adresa"
                                                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Adresa'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Država:</label><input type="text" name="drzava"
                                                 value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Drzava'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Koordinate:</label><input type="text" name="koordinate"
                                                     value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Koordinate'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Menadžer:</label><input type="text" name="menadzer"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Menadzer'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Asistent:</label><input type="text" name="asistent"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Asistent'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Telefon:</label><input type="text" name="telefon"
                                                  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Telefon'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Radno vreme:</label><input type="text" name="radnovreme"
                                                      value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RadnoVreme'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Rulet:</label><input type="text" name="rulet" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Rulet'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Simfonija:</label><input type="text" name="simfonija"
                                                    value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Simfonija'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Galerija:</label><input type="text" name="galerija"
                                                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Galerija'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><label>Mozzart kafić:</label><input type="text" name="mozzartkafic"
                                                        value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['MozzartKafic'], ENT_QUOTES, 'UTF-8', true);?>
"></li>
                <li><button type="submit" value="submit">Izmenite podatke</button></li>
            </ul>
        </form>
    </body>
</html><?php }} ?>
