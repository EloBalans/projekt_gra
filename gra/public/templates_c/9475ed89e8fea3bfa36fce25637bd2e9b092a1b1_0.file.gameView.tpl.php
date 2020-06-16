<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-14 23:21:41
  from 'C:\xampp\htdocs\gra\app\views\gameView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee694e56000b8_25249890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9475ed89e8fea3bfa36fce25637bd2e9b092a1b1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\gameView.tpl',
      1 => 1592168348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee694e56000b8_25249890 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10512116735ee694e54de4a9_85141015', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_10512116735ee694e54de4a9_85141015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10512116735ee694e54de4a9_85141015',
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
rankingload" class="button primary">Ranking</a>
       </div>   
    
    <header>
        <ul class="actions fit">
										
	</ul>
<div class="table-wrapper">      
<table class="alt">  
    
	<tbody>	
            <tr>
     <td>
        <p><div class="image left"><img src="images/pic02.jpg"  alt="" /></div> 
        <h1><?php echo $_smarty_tpl->tpl_vars['player']->value["nick"];?>
</h1> 
        Poziom: <?php echo $_smarty_tpl->tpl_vars['player']->value["lvl"];?>
 <br/> 
        Doświadczenie:  <?php echo $_smarty_tpl->tpl_vars['player']->value["exp"];?>
<br/> 
        Złoto: <?php echo $_smarty_tpl->tpl_vars['player']->value["gold"];?>
<br/> 
        Punkty życia: <?php echo $_smarty_tpl->tpl_vars['player']->value["hp"];?>
<br/>
        Punkty ataku: <?php echo $_smarty_tpl->tpl_vars['player']->value["attack"];?>
 <br/> </p>
   </td>
    
   	</tr>
</tbody>
</table>
</div>   
      
            
    
        
       

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
 
                    
     <div style="margin: 25px 87%">
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
    
<?php
}
}
/* {/block 'content'} */
}
