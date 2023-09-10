<?php
/* Smarty version 4.2.0, created on 2023-03-16 14:02:18
  from 'C:\xampp\htdocs\datamax_copia\app\Views\pages\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_641367ba028ea4_25414127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70b9155d3b500f1bac31157e99146c85006655ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\pages\\frequent_questions.tpl',
      1 => 1678993334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641367ba028ea4_25414127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2014905788641367ba0190d7_33165657', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1961712517641367ba019c35_55477133', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1176351360641367ba027c54_42125450', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1281704726641367ba0286c2_61253799', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_2014905788641367ba0190d7_33165657 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2014905788641367ba0190d7_33165657',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_2020259231641367ba01bcd8_39146681 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="header-fq mt-nav">
            <img class="img-header-fq" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/fq-image.png">
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
class Block_1961712517641367ba019c35_55477133 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1961712517641367ba019c35_55477133',
  ),
  'container' => 
  array (
    0 => 'Block_2020259231641367ba01bcd8_39146681',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2020259231641367ba01bcd8_39146681', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1176351360641367ba027c54_42125450 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1176351360641367ba027c54_42125450',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1281704726641367ba0286c2_61253799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1281704726641367ba0286c2_61253799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
