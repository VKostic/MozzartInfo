<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 11:49:53
         compiled from "templates\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3665544b97c1205ac9-58552733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e81349627b460a10873ff2a43a42342f6946e91' => 
    array (
      0 => 'templates\\list.tpl',
      1 => 1416221356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3665544b97c1205ac9-58552733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544b97c12c8fc9_32761698',
  'variables' => 
  array (
    'data' => 0,
    'entry' => 0,
    'SCRIPT_NAME' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544b97c12c8fc9_32761698')) {function content_544b97c12c8fc9_32761698($_smarty_tpl) {?><!DOCTYPE html>
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
            <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
                <tr>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['ID'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Grad'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Adresa'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Drzava'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Koordinate'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Menadzer'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Asistent'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Telefon'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['RadnoVreme'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Rulet'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Simfonija'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Galerija'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['MozzartKafic'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=delete&amp;del=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
"
                           onclick='if(!confirm("Da li ste sigurni?")) return false;'>Izbriši</a>
                    </td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=edit&amp;edt=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['RedniBroj'], ENT_QUOTES, 'UTF-8', true);?>
">Izmeni</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html><?php }} ?>
