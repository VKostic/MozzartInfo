<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-11-17 18:11:44
         compiled from "templates\searchResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10218544e4bee46e437-38253260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7753d5340a9d497d013136b29fa537ef9a2b0779' => 
    array (
      0 => 'templates\\searchResult.tpl',
      1 => 1416244181,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10218544e4bee46e437-38253260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_544e4bee643031_63358535',
  'variables' => 
  array (
    'search' => 0,
    'rows' => 0,
    'SCRIPT_NAME' => 0,
    'entry' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544e4bee643031_63358535')) {function content_544e4bee643031_63358535($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Rezultati pretrage</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style/index.css">
    </head>
    <body>
        <h3>"<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
"</h3>
        <?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value) {
$_smarty_tpl->tpl_vars['entry']->_loop = true;
?>
            <ul>
                <li><a class="a-a" href="<?php echo $_smarty_tpl->tpl_vars['SCRIPT_NAME']->value;?>
?action=view&amp;id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['ID'], ENT_QUOTES, 'UTF-8', true);?>
">
                        <img src="style/triangle-257.png" alt=""
                             class="textmiddle"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['entry']->value['Naziv'], ENT_QUOTES, 'UTF-8', true);?>
</a></li>
            </ul>
        <?php } ?>
        <a href=index.php>Nazad na pretragu</a><br/><br/>
    </body>
</html><?php }} ?>
