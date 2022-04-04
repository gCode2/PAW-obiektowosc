<?php
/* Smarty version 4.1.0, created on 2022-04-04 13:41:52
  from 'C:\xampp\htdocs\PAW\calc_obj\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624ad980480573_19616049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5746317f12d273e56d337bf098244e3cbe6960a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\CalcView.tpl',
      1 => 1649072374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624ad980480573_19616049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172722933624ad9804764a1_56051440', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_795328607624ad980476d41_74606749', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_172722933624ad9804764a1_56051440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_172722933624ad9804764a1_56051440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Copyright &copy 2022, gCode dev. All rights reserved.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_795328607624ad980476d41_74606749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_795328607624ad980476d41_74606749',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
    <h2><?php echo $_smarty_tpl->tpl_vars['p_title']->value;?>
</h2>
    <input type="text" name="amount" placeholder="Amount" required>
    <input type="range" name="duration" min="2" max="36" value="18">
    <select name="currency" class="currency">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencyMap']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value->mid;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->currency;?>
</option>;
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input type="submit" value="Przelicz!" name="submitted">
</form>
<div>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
    <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

    <?php }?>

</div>
<div class="errorContainer">
    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['err']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<div class="infoContainer">
    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isInfo()) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['inf']->value;?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
