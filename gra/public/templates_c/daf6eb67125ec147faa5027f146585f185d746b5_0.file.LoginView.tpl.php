<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 17:07:22
  from 'C:\xampp\htdocs\gra\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee0f72a8797f2_70098963',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf6eb67125ec147faa5027f146585f185d746b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\LoginView.tpl',
      1 => 1591657766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee0f72a8797f2_70098963 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14486222635ee0f72a6ef524_32078447', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14486222635ee0f72a6ef524_32078447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14486222635ee0f72a6ef524_32078447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div style="margin: 40px 45%">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	<legend>Zaloguj się</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">hasło: </label>
			<input id="id_pass" type="password" name="pass" /><br />
	</fieldset>
        <input type="submit" value="login" class="pure-button pure-button-primary"/>
</form>	
<div class="messages">
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Errors occured: </h4>
	<ol id="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
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
	<h4>Info: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
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

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Result</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

    
<?php
}
}
/* {/block 'content'} */
}
