<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-12 12:34:28
  from 'C:\xampp\htdocs\gra\app\views\registerView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee35a34592c25_86321433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f910b32a4ad3edeb17f031059638b44852cb366' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\registerView.tpl',
      1 => 1591958060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee35a34592c25_86321433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3533236505ee35a345812f8_31902467', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_3533236505ee35a345812f8_31902467 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3533236505ee35a345812f8_31902467',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
  
   <div style="margin: 80px 40%">         
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register"  class="pure-form pure-form-aligned bottom-margin">
            
            <fieldset>
                            <label>Adres email </label>
                            <input type="text" id="email" name="email"  />
                            
                            <label>Nick </label>
                            <input type="text" id="nick" name="nick"  />
                            
                            <label>Login </label>
                            <input type="text" id="login" name="login" />
                            
                            <label>Hasło </label>
                            <input type="password" id="password"  name="password"  />
                          
            </fieldset>
            <div style="margin: 20px 17%">
            <input type="submit" value="register" class="pure-button pure-button-primary"/>
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
   

<div style="margin: 10px 41%">
     
     <h2>Masz konto?</h2>
 </div>
        
 <div style="margin: 5px 41%">
     
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loginview" class="button primary">Zaloguj się!</a>
 </div>
        
<?php
}
}
/* {/block 'content'} */
}
