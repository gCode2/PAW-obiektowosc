<?php
/* Smarty version 4.1.0, created on 2022-04-11 15:34:37
  from 'C:\xampp\htdocs\PAW\calc_obj\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62542e6dd7b466_61253849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127faf4d410cc0559814b4f4c1d887f422fb82d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PAW\\calc_obj\\app\\views\\CalcView.tpl',
      1 => 1649684076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62542e6dd7b466_61253849 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103616264862542e6dd6ef14_88459300', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25582629162542e6dd6f759_30051180', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_103616264862542e6dd6ef14_88459300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_103616264862542e6dd6ef14_88459300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Copyright &copy 2022, gCode dev. All rights reserved.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_25582629162542e6dd6f759_30051180 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_25582629162542e6dd6f759_30051180',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="position:relative;display:flex;flex-direction:row;align-items:center;margin:0px auto 10px auto;width:17em;">
<div style="flex:1">
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="btn"">Log out</a>
</div>
<div style="flex:1">
<span><strong>User: </strong></span><?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
 <br>
<span><strong>Role: </strong></span><?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>

</div>
</div>
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
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
