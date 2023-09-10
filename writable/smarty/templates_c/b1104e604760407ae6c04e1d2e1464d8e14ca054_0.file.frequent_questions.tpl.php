<?php
/* Smarty version 4.2.0, created on 2023-03-13 09:23:51
  from 'C:\xampp\htdocs\datamax\app\Views\pages\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640f31f7917b28_72197417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1104e604760407ae6c04e1d2e1464d8e14ca054' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\pages\\frequent_questions.tpl',
      1 => 1677773303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f31f7917b28_72197417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_641509410640f31f7909002_24060622', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_286646159640f31f7909ee3_24884413', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_718498254640f31f7916a45_09255632', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1901097409640f31f7917347_91263054', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_641509410640f31f7909002_24060622 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_641509410640f31f7909002_24060622',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1407997568640f31f790cb97_34748085 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="header-fq mt-nav">
            <img class="img-header-fq" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/Grupo 2982.png">
            <div class="text-fq none">
                <h3>¿Tienes una duda?</h3>
                <h1>Nosotros te ayudamos</h1>
                <p>Queremos hacértelo más fácil, encuentra las respuestas que necesitas.</p>
            </div>
        </div>

        <section class="frequent-questions">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
 
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_286646159640f31f7909ee3_24884413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_286646159640f31f7909ee3_24884413',
  ),
  'container' => 
  array (
    0 => 'Block_1407997568640f31f790cb97_34748085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407997568640f31f790cb97_34748085', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_718498254640f31f7916a45_09255632 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_718498254640f31f7916a45_09255632',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1901097409640f31f7917347_91263054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1901097409640f31f7917347_91263054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
