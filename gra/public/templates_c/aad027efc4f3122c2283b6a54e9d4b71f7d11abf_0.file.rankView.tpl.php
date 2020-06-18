<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 18:33:57
  from 'C:\xampp\htdocs\gra\app\views\rankView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eea45f5cdfac7_85830837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aad027efc4f3122c2283b6a54e9d4b71f7d11abf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\rankView.tpl',
      1 => 1592411635,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eea45f5cdfac7_85830837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3239171465eea45f5c6d839_78806025', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_3239171465eea45f5c6d839_78806025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3239171465eea45f5c6d839_78806025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>





<div style="margin: 25px 90%">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameView" class="button primary">Back</a>
    </div>


    
    
<div class="bottom-margin">
    
<h3>Ranking</h3>

</div>
    
    
    
<div class="bottom-margin">
    
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rankingload">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="nick" name="nick" value="<?php echo $_smarty_tpl->tpl_vars['searchnickForm']->value->nick;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Szukaj gracza</button>
	</fieldset>
    </form>
</div>	  
   
    

    <div class="table-wrapper" >
            <table class="alt">
                    <thead>
                            <tr>
                                    <th>Nazwa</th>
                                    <th>Id</th>
                                    <th>Poziom</th>
                                    
                            </tr>
                    </thead>
                    <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
                                <tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["nick"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["iduser"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["lvl"];?>
</td></tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
            </table>
    </div>
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
    
<?php
}
}
/* {/block 'content'} */
}
