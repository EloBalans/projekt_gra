<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 21:21:54
  from 'C:\xampp\htdocs\gra\app\views\rankView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee132d28273d1_91159623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aad027efc4f3122c2283b6a54e9d4b71f7d11abf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\rankView.tpl',
      1 => 1591812499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee132d28273d1_91159623 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2892181075ee132d2822704_13573901', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2892181075ee132d2822704_13573901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2892181075ee132d2822704_13573901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div style="margin: 25px 90%">
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameView" class="button primary">Back</a>
    </div>

<h3>Ranking</h3>
    <div class="table-wrapper">
            <table class="alt">
                    <thead>
                            <tr>
                                    <th>Nazwa</th>
                                    <th>Id</th>
                                    <th>Poziom</th>
                                    
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                    <td>Gracz1</td>
                                    <td>id_gracz</td>
                                    <td>lvl</td>
                                    <td>usun</td>
                            </tr>
                            <tr>
                                    <td>Gracz2</td>
                                    <td>id_gracz</td>
                                    <td>lvl</td>
                                    <td>usun</td>
                            </tr>
                            <tr>
                                    <td>Gracz3</td>
                                    <td>id_gracz</td>
                                    <td>lvl</td>
                                    <td>usun</td>
                            </tr>
                            <tr>
                                    <td>Gracz4</td>
                                    <td>id_gracz</td>
                                    <td>lvl</td>
                                    <td>usun</td>
                            </tr>
                            <tr>
                                    <td>Gracz5</td>
                                    <td>id_gracz</td>
                                    <td>lvl</td>
                                    <td>usun</td>
                            </tr>
                    </tbody>
            </table>
    </div>

    
<?php
}
}
/* {/block 'content'} */
}
