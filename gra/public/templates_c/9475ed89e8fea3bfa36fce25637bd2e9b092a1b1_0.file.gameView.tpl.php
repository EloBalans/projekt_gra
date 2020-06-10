<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-10 21:24:45
  from 'C:\xampp\htdocs\gra\app\views\gameView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee1337d02bf31_98584597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9475ed89e8fea3bfa36fce25637bd2e9b092a1b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\gameView.tpl',
      1 => 1591817084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee1337d02bf31_98584597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17617499245ee1337d020f04_17491856', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_17617499245ee1337d020f04_17491856 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17617499245ee1337d020f04_17491856',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div style="margin: 25px 87%">
        
        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout" class="button primary">Wyloguj</a>
    
        
    </div>
        <div style="margin: 25px 87%">
       <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
ranking" class="button primary">Ranking</a>
       </div>   
    
    <header>
        <ul class="actions fit">
										
									</ul>
      
            <div class="table-wrapper">
               
                <table>
                        
                        <tbody>
                                <tr>
                                        <td>Punkty życia</td>
                                        

                                </tr>
                                <tr>
                                        <td>Item Two</td>
                                       
                                </tr>
                                <tr>
                                        <td>Item Three</td>
                                      
                                </tr>
                               
                        </tbody>
                </table>

                
                
            </div>
    
         </ul>
       

    </header>
    
    <section class="tiles">
            <article class="style10">
                    <span class="image">
                            <img src="images/forest.png" alt="" />
                    </span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
location">
                            <h2>Las</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 1 lvl do 5 lvl</p>	
                            </div>
                    </a>
            </article>
            <article class="style10">
                    <span class="image">
                            <img src="images/pustynia.png" alt="" />
                    </span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
location">
                            <h2>Pustynia</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 6 lvl do 10 lvl</p>
                            </div>
                    </a>
            </article>
            <article class="style10">
                    <span class="image">
                            <img src="images/bagno.png" alt="" />
                    </span>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
location">
                            <h2>Bagna</h2>
                            <div class="content">
                                    <p>Tutaj znajdują się potwory od 11 lvl do 15 lvl</p>
                            </div>
                    </a>
            </article>

    </section>

    
<?php
}
}
/* {/block 'content'} */
}
