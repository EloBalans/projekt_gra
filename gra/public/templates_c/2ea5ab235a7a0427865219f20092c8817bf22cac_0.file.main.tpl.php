<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-12 00:11:39
  from 'C:\xampp\htdocs\gra\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee2ac1be28333_89397133',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ea5ab235a7a0427865219f20092c8817bf22cac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\gra\\app\\views\\templates\\main.tpl',
      1 => 1591909155,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2ac1be28333_89397133 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
	<head>
		<title>Prosta gra - Mateusz Zatoń</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

                           


				<!-- Main -->
					<div id="main">
						<div class="inner">
							<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9308228985ee2ac1be26220_36561136', 'content');
?>

						</div>
					</div>
                         

                                        

                                       

                                             

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								
								<ul class="icons">  
									<li><a href="https://github.com/EloBalans" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
									<li><a href="" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'content'} */
class Block_9308228985ee2ac1be26220_36561136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9308228985ee2ac1be26220_36561136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
