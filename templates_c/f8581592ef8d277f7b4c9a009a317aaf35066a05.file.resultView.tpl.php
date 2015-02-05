<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 12:43:12
         compiled from "templates\resultView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7454544e7a261bc429-14186754%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8581592ef8d277f7b4c9a009a317aaf35066a05' => 
    array (
      0 => 'templates\\resultView.tpl',
      1 => 1416224571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7454544e7a261bc429-14186754',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544e7a26273122_53001059',
  'variables' => 
  array (
    'result' => 0,
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e7a26273122_53001059')) {function content_544e7a26273122_53001059($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Detaljni podaci</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/insert.css">
    </head>
    <body>
        <h3><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
</h3>
        <ul>
            <li>Redni broj: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>ID: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['ID'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Naziv: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Grad: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Grad'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Adresa: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Adresa'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Država: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Drzava'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Koordinate: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Koordinate'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Menadžer: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Menadzer'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Asistent: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Asistent'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Telefon: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Telefon'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Radno vreme: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RadnoVreme'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Rulet: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Rulet'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Simfonija: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Simfonija'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Galerija: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['Galerija'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li>Mozzart kafić: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['MozzartKafic'], ENT_QUOTES, 'UTF-8', true);?>
</li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=delete&amp;del=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
"
                   onclick='if(!confirm("Da li ste sigurni?")) return false;'>
                    <img src="style/triangle-256.png" class="textmiddle" alt="">Izbriši</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=edit&amp;edt=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
">
                    <img src="style/triangle-256.png" class="textmiddle" alt="">Izmeni</a></li>
        </ul>
        <a href=index.php>Nazad na pretragu</a>
    </body>
</html><?php }} ?>
