<?php
/* Smarty version 4.1.0, created on 2022-04-04 13:42:05
  from 'C:\xampp\htdocs\PAW\calc_obj\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ad98d4dbc53_07300853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d7e70f1107cb5c9f6c26419726bf9e4753d8792' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\templates\\main.tpl',
      1 => 1649072524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624ad98d4dbc53_07300853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['p_desc']->value ?? null)===null||$tmp==='' ? "Default description" ?? null : $tmp);?>
">


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/index.css">



    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['p_title']->value ?? null)===null||$tmp==='' ? "Default title!" ?? null : $tmp);?>
</title>
</head>
<body>
    <div class="formContainer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_863285849624ad98d4daa65_00026086', 'content');
?>

    </div>
    <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069640425624ad98d4db2b0_09089512', 'footer');
?>

    </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'content'} */
class Block_863285849624ad98d4daa65_00026086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_863285849624ad98d4daa65_00026086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content loaded<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1069640425624ad98d4db2b0_09089512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1069640425624ad98d4db2b0_09089512',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 No footer loaded! <?php
}
}
/* {/block 'footer'} */
}
