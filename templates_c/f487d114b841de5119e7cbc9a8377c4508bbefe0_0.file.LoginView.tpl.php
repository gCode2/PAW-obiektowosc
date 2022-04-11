<?php
/* Smarty version 4.1.0, created on 2022-04-11 14:57:44
  from 'C:\xampp\htdocs\PAW\calc_obj\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625425c8e48eb0_56148455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f487d114b841de5119e7cbc9a8377c4508bbefe0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\views\\LoginView.tpl',
      1 => 1649681862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_625425c8e48eb0_56148455 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94745369625425c8e44654_28301160', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_94745369625425c8e44654_28301160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_94745369625425c8e44654_28301160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
<h2><?php echo $_smarty_tpl->tpl_vars['p_title']->value;?>
</h2>
<input type="text" placeholder="Login" name="login">
<input type="password" placeholder="Password" name="password">
<input type="submit" value="Log in!">

</form>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
