<?php
/* Smarty version 4.2.1, created on 2022-11-11 15:37:27
  from 'C:\xampp\htdocs\php_06_(a_b)\app\views\CalcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_636e5e27d4e6a2_24553725',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7993f166018f226f90c79a82eddda0a2b850bbe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_(a_b)\\app\\views\\CalcView.tpl',
      1 => 1668160750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636e5e27d4e6a2_24553725 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_871677540636e5e27cfbdc5_71366525', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_590909580636e5e27cfd425_91119750', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_871677540636e5e27cfbdc5_71366525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_871677540636e5e27cfbdc5_71366525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_590909580636e5e27cfd425_91119750 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_590909580636e5e27cfd425_91119750',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator kredytowy</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<fieldset>
		<label for="x">Kwota:</label>
		<input id="x" type="text" placeholder="wartość x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">

		<label for="y">Okres kredytowania (w latach):</label>
		<input id="y" type="text" placeholder="wartość y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">

		<label for="z">Oprocentowanie:</label>
		<input id="z" type="text" placeholder="wartość z" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
