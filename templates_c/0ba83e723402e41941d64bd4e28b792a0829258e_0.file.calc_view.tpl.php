<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-30 21:21:37
  from 'C:\xampp3\htdocs\kredyt\app\view\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e8246c1aaf074_45170207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba83e723402e41941d64bd4e28b792a0829258e' => 
    array (
      0 => 'C:\\xampp3\\htdocs\\kredyt\\app\\view\\calc_view.tpl',
      1 => 1585596093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e8246c1aaf074_45170207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16868481525e8246c1973615_42589979', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20970409195e8246c19755b8_31187919', 'body');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4762753385e8246c1975d27_51533483', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/app/view/view.tpl"));
}
/* {block 'title'} */
class Block_16868481525e8246c1973615_42589979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_16868481525e8246c1973615_42589979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Kalkulator kredytowy<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_20970409195e8246c19755b8_31187919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_20970409195e8246c19755b8_31187919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Oblicz ile będą Cię kosztować raty i odsetki<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_4762753385e8246c1975d27_51533483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4762753385e8246c1975d27_51533483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="width:90%; margin: 2em auto;">
<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php?action=process" method="post" class="pure-form pure-form-stacked">
		<label for="id_kwota">Kwota: </label>
		<input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"/><br />
		<label for="id_oprocentowanie">Oprocentowanie (w %): </label>
		<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
"/><br />
		<label for="id_lata">Długość kredytu w latach: </label>
		<input id="id_lata" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"/><br />
		<label for="id_ile_rat">Częstość spłacania raty: </label>
		<select name="ile_rat">
			<option value="miesięczna">miesięczna</option>
			<option value="tygodniowa">tygodniowa</option>
			<option value="kwartalna">kwartalna</option>
			<option value="półroczna">półroczna</option>
		</select><br />
		
	<input type="submit" value="Oblicz" class="pure-button pure-button-primary" />
</form>	
</div>


<?php if ($_smarty_tpl->tpl_vars['messages']->value->isError()) {?>
	<h3>Wystąpiły błędy: </h3>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['result']->value->rata) && isset($_smarty_tpl->tpl_vars['result']->value->suma) && isset($_smarty_tpl->tpl_vars['result']->value->odsetki)) {?>
	<h3> Wynik </h3>
	<p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->rata;?>

    </p>
	
	<p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->suma;?>

    </p>

	<p class="res">
    <?php echo $_smarty_tpl->tpl_vars['result']->value->odsetki;?>

    </p>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
