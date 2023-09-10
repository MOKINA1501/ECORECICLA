<?php
/* Smarty version 4.2.0, created on 2023-04-15 08:42:01
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\admin\dashboard\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643aa9a96f5d66_78298821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4076468bdba517a246f117499a38fd9ae6acb23f' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\admin\\dashboard\\home.tpl',
      1 => 1681566120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643aa9a96f5d66_78298821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1203260712643aa9a96e0c39_60459080', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1678768532643aa9a96e2ed5_57467872', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992243107643aa9a96ebeb3_83223168', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1186790343643aa9a96ecbc6_39511617', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../head.tpl');
}
/* {block 'styles'} */
class Block_1203260712643aa9a96e0c39_60459080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1203260712643aa9a96e0c39_60459080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1784303313643aa9a96e9847_12193591 extends Smarty_Internal_Block
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
class Block_1678768532643aa9a96e2ed5_57467872 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1678768532643aa9a96e2ed5_57467872',
  ),
  'container' => 
  array (
    0 => 'Block_1784303313643aa9a96e9847_12193591',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1784303313643aa9a96e9847_12193591', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1992243107643aa9a96ebeb3_83223168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1992243107643aa9a96ebeb3_83223168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1186790343643aa9a96ecbc6_39511617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1186790343643aa9a96ecbc6_39511617',
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
