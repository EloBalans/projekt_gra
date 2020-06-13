<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-13 02:06:05
  from 'C:\xampp\htdocs\gra\app\views\locationView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee4186de89517_80671955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9251b303eac0bc4df87bf96532ad4736bf124e12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\locationView.tpl',
      1 => 1591812140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee4186de89517_80671955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14239477085ee4186de85463_85662881', 'content');
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_14239477085ee4186de85463_85662881 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14239477085ee4186de85463_85662881',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin: 25px 90%">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameview" class="button primary">Back</a>
    </div>
    <header>                   
    <header>
       <h1>
           dziala
        </h1>
                                                            
    </header>
   
    
    
<?php
}
}
/* {/block 'content'} */
}
