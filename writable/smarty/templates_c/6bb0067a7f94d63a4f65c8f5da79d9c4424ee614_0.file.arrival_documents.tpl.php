<?php
/* Smarty version 4.2.0, created on 2023-04-15 10:11:05
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\admin\arrival_documents\arrival_documents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643abe89bbc556_57713989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb0067a7f94d63a4f65c8f5da79d9c4424ee614' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\admin\\arrival_documents\\arrival_documents.tpl',
      1 => 1681571459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643abe89bbc556_57713989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_396432040643abe89ba67f1_46581263', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_260888414643abe89bb13b6_25468191', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_383593500643abe89bb9db1_44853704', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_749437520643abe89bbaf66_01612882', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../head.tpl');
}
/* {block 'styles'} */
class Block_396432040643abe89ba67f1_46581263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_396432040643abe89ba67f1_46581263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/home.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/admin.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_925870590643abe89bb7a26_39656747 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="hv-main">
			<span class="hv-txt">Usuarios</span>
			<div class="hv-content">dfrweasdasda</div>
		</div>
	<?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_260888414643abe89bb13b6_25468191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_260888414643abe89bb13b6_25468191',
  ),
  'container' => 
  array (
    0 => 'Block_925870590643abe89bb7a26_39656747',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_925870590643abe89bb7a26_39656747', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_383593500643abe89bb9db1_44853704 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_383593500643abe89bb9db1_44853704',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_749437520643abe89bbaf66_01612882 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_749437520643abe89bbaf66_01612882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
>
		var $resources                                                          =   '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
