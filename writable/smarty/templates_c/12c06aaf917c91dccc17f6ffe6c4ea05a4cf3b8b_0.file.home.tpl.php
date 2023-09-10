<?php
/* Smarty version 4.2.0, created on 2023-04-11 10:23:15
  from 'C:\xampp\htdocs\datamax_gestor\app\Views\admin\dashboard\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64357b633a0dc2_84593281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c06aaf917c91dccc17f6ffe6c4ea05a4cf3b8b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_gestor\\app\\Views\\admin\\dashboard\\home.tpl',
      1 => 1681226453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64357b633a0dc2_84593281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3100004764357b6339b183_50091272', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49143428164357b6339b884_80804392', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91779169064357b6339e0d2_38042924', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141421865964357b6339e497_81292757', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../head.tpl');
}
/* {block 'styles'} */
class Block_3100004764357b6339b183_50091272 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_3100004764357b6339b183_50091272',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_125196304364357b6339d449_28291379 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="hv-main">
            <span class="hv-txt">Usuarios</span>
            <div class="hv-content">xddd</div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_49143428164357b6339b884_80804392 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_49143428164357b6339b884_80804392',
  ),
  'container' => 
  array (
    0 => 'Block_125196304364357b6339d449_28291379',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125196304364357b6339d449_28291379', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_91779169064357b6339e0d2_38042924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_91779169064357b6339e0d2_38042924',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_141421865964357b6339e497_81292757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_141421865964357b6339e497_81292757',
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
