<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-18 13:08:05
  from 'C:\xampp\htdocs\gra\app\views\locationfightView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeb4b1540db26_97038396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '665549d74665be6ed1bca4024a00e49db07443cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\locationfightView.tpl',
      1 => 1592478477,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eeb4b1540db26_97038396 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2185138045eeb4b153c2069_55547019', 'content');
?>
 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_2185138045eeb4b153c2069_55547019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2185138045eeb4b153c2069_55547019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<div style="margin: 25px 90%">
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
gameview" class="button primary">Back</a>
</div>
<div style="margin: 25px 47%">
    <h1><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</h1>
</div>
    
<header>                   
</header>
    
<div class="table-wrapper">    
    <table class="alt"> 
        <tbody>	
            <tr>
                <td>
                    <p><div class="image right  "><img src="images/pic02.jpg" alt="" /></div> 
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


                <td>
                    <p><div class="image right"><img src="images/pic02.jpg" alt="" /></div> 
                    <h1><?php echo $_smarty_tpl->tpl_vars['monster']->value["name"];?>
</h1>
                    Poziom: <?php echo $_smarty_tpl->tpl_vars['monster']->value["lvl"];?>
 <br/> 
                    Punkty życia: <?php echo $_smarty_tpl->tpl_vars['monster']->value["hp"];?>
<br/>
                    Punkty ataku: <?php echo $_smarty_tpl->tpl_vars['monster']->value["attack"];?>
 <br/>
                    Nagroda za zabicie:<br/>
                    Złoto: <?php echo $_smarty_tpl->tpl_vars['monster']->value["gold"];?>
, Doświadczenie: <?php echo $_smarty_tpl->tpl_vars['monster']->value["exp"];?>
<br/> 
                    </p>   
                </td>

            </tr>
        </tbody>
    </table>
</div>  
                    
                    
<div class="table-wrapper">
    <table class="alt">
            
        <tbody>
            <tr>
                <td>HP: <?php echo $_smarty_tpl->tpl_vars['player']->value["hp"];?>
</td>
                <td>AT: <?php echo $_smarty_tpl->tpl_vars['player']->value["attack"];?>
</td>
                <td><center>----------------------------------WALKA----------------------------------</center></td>
                <td>HP: <?php echo $_smarty_tpl->tpl_vars['monster']->value["hp"];?>
</td>
                <td>AT: <?php echo $_smarty_tpl->tpl_vars['monster']->value["attack"];?>
</td>
            </tr>
            
              
                <tr>   
                    <td>HP: <?php echo $_smarty_tpl->tpl_vars['hp_user']->value;?>
</td>
                    <td>AT: <?php echo $_smarty_tpl->tpl_vars['at_user']->value;?>
</td>
                    <td><center> <?php echo $_smarty_tpl->tpl_vars['player']->value["nick"];?>
 [AT<?php echo $_smarty_tpl->tpl_vars['at_user']->value;?>
] -> <?php echo $_smarty_tpl->tpl_vars['monster']->value["name"];?>
 [HP - <?php echo $_smarty_tpl->tpl_vars['at_user']->value;?>
]</center></td>
                    <td>HP: <?php echo $_smarty_tpl->tpl_vars['hp_monster']->value;?>
</td>
                    <td>AT: <?php echo $_smarty_tpl->tpl_vars['at_monster']->value;?>
</td>
                </tr>
           
          
                    
        </body>       
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

<div style="margin: 25px 42%">
    <h1> <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 </h1>
    </div>
<div style="margin: 25px 45%">
    
    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
looplocation" class="button primary">Dalej</a>
</div>
    
<?php
}
}
/* {/block 'content'} */
}
