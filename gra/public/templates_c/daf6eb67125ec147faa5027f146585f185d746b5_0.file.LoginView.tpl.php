<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 12:35:28
  from 'C:\xampp\htdocs\gra\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee9f1f092aea4_04704570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf6eb67125ec147faa5027f146585f185d746b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\LoginView.tpl',
      1 => 1592390127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee9f1f092aea4_04704570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10830921545ee9f1f091b4d1_88998204', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10830921545ee9f1f091b4d1_88998204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10830921545ee9f1f091b4d1_88998204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 <div style="margin: 25px 87%">
       <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rankingload" class="button primary">Ranking</a>
       </div>   

<div style="margin: 120px 43%">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post"  class="pure-form pure-form-aligned bottom-margin">
	
	<fieldset>
			<label>login: </label>
			<input id="login" type="text" name="login"/>
			<label>hasło: </label>
			<input id="password" type="password" name="password" />
	</fieldset>
        <div style="margin: 20px">
        <input type="submit" value="login" class="pure-button pure-button-primary"/>
         </div>
</form>
<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
        <div class="messages bottom-margin">
                <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
                <li class="msg <?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
        </div>
<?php }?>  
       
</div>
 <div style="margin: 25px 38%">
     
     <h2>Nie masz konta?</h2>
 </div>
 <div style="margin: 25px 38%">
     
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
registershow" class="button primary">Zarejestruj się!</a>
 </div>


    
<?php
}
}
/* {/block 'content'} */
}
