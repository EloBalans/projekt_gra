<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 22:53:58
  from 'C:\xampp\htdocs\gra\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee14866af7583_55083607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '673a701f32c88f5603762b14af6b1d6623c884a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\loginView.tpl',
      1 => 1591822330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee14866af7583_55083607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10754508215ee14866ad1be0_88740696', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10754508215ee14866ad1be0_88740696 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10754508215ee14866ad1be0_88740696',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div style="margin: 120px 43%">
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
       
</div>
 <div style="margin: 25px 38%">
     
     <h2>Nie masz konta?
 </div>
 <div style="margin: 25px 38%">
     
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register" class="button primary">Zarejestruj się!</a>
 </div>
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


    
<?php
}
}
/* {/block 'content'} */
}
