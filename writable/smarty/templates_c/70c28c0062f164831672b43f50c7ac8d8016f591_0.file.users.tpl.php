<?php
/* Smarty version 4.2.0, created on 2023-04-11 10:21:18
  from 'C:\xampp\htdocs\datamax_gestor\app\Views\admin\dashboard\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64357aeea5e086_08645599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70c28c0062f164831672b43f50c7ac8d8016f591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_gestor\\app\\Views\\admin\\dashboard\\users.tpl',
      1 => 1681226453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64357aeea5e086_08645599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179702906964357aeea58795_65182203', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_141912919764357aeea58eb0_25311322', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62220241564357aeea5b634_77570571', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195836905664357aeea5b9e4_22203119', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../head.tpl');
}
/* {block 'styles'} */
class Block_179702906964357aeea58795_65182203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_179702906964357aeea58795_65182203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_166466556364357aeea5a965_85761449 extends Smarty_Internal_Block
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
class Block_141912919764357aeea58eb0_25311322 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_141912919764357aeea58eb0_25311322',
  ),
  'container' => 
  array (
    0 => 'Block_166466556364357aeea5a965_85761449',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166466556364357aeea5a965_85761449', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_62220241564357aeea5b634_77570571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_62220241564357aeea5b634_77570571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_195836905664357aeea5b9e4_22203119 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_195836905664357aeea5b9e4_22203119',
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
