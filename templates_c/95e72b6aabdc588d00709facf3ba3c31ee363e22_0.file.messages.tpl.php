<?php
/* Smarty version 4.1.0, created on 2022-04-11 14:53:00
  from 'C:\xampp\htdocs\PAW\calc_obj\app\views\templates\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_625424acae9f32_98282311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95e72b6aabdc588d00709facf3ba3c31ee363e22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\views\\templates\\messages.tpl',
      1 => 1649681576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_625424acae9f32_98282311 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>

<div class="errorContainer">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['err']->value;?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>

<div class="infoContainer">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
<br>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<?php }?>

<?php }
}
