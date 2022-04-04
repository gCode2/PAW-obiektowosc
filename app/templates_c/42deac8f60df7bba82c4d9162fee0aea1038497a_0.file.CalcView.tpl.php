<?php
/* Smarty version 4.1.0, created on 2022-04-04 15:06:26
  from 'C:\xampp\htdocs\PAW\calc_obj\app\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624aed52401ed3_59652542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42deac8f60df7bba82c4d9162fee0aea1038497a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\CalcView.tpl',
      1 => 1649077583,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624aed52401ed3_59652542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2141867253624aed523f7647_99339344', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_956269711624aed523f7e40_88368867', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_2141867253624aed523f7647_99339344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2141867253624aed523f7647_99339344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Copyright &copy 2022, gCode dev. All rights reserved.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_956269711624aed523f7e40_88368867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_956269711624aed523f7e40_88368867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
    <h2><?php echo $_smarty_tpl->tpl_vars['p_title']->value;?>
</h2>
    <label for="amount">How much do you need?</label>
    <input type="text" name="amount" placeholder="Amount" id="amount" required>
    <label for="range2">For how many months?</label>
    <input type="range" name="duration" min="2" max="36" value="20" id="range2">
    <label for="currency">In what currency?</label>
    <select name="currency" class="currency" id="currency">
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

   
    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value->result))) {?>
    <div class="resultContainer">
    <h4>Your payment per month is: </h4>
    <?php echo $_smarty_tpl->tpl_vars['result']->value->result;?>
 PLN
    </div>
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
    <div class="errorContainer">
    <h4>Oops.. some errors occured: </h3>
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
    <h4>Additional information: </h4>
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
    <?php }
}
}
/* {/block 'content'} */
}
