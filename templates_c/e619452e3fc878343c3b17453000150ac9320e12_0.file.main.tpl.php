<?php
/* Smarty version 4.1.0, created on 2022-04-04 18:35:11
  from 'C:\xampp\htdocs\PAW\calc_obj\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624b1e3fa000b7_51529024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e619452e3fc878343c3b17453000150ac9320e12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\views\\templates\\main.tpl',
      1 => 1649076232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b1e3fa000b7_51529024 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2069153376624b1e3f9ff000_58128417', 'content');
?>

    </div>
    
    <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1699877146624b1e3f9ff703_99717167', 'footer');
?>

    </div>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/js/main.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'content'} */
class Block_2069153376624b1e3f9ff000_58128417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2069153376624b1e3f9ff000_58128417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content loaded<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1699877146624b1e3f9ff703_99717167 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1699877146624b1e3f9ff703_99717167',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 No footer loaded! <?php
}
}
/* {/block 'footer'} */
}
