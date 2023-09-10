<?php
/* Smarty version 4.2.0, created on 2023-03-10 14:18:15
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640b908741f5e6_51650334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25ad5bacbd422a0a54dfbc33dd88e0ab84624f86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\frequent_questions.tpl',
      1 => 1678479493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b908741f5e6_51650334 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2015648846640b9087419fb0_23500808', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1298475384640b908741ae99_71549867', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1646055972640b908741e916_42071178', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_366933127640b908741eff4_74301437', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_2015648846640b9087419fb0_23500808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2015648846640b9087419fb0_23500808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_332526553640b908741dae5_94457243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element">
                <div class="adm-cont-icon">
                    <div>
                        <i class="icon-mod fa-solid fa-question"></i>
                    </div>
                    <div>
                        <span class="leg-mod">Preguntas frecuentes</span>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1298475384640b908741ae99_71549867 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1298475384640b908741ae99_71549867',
  ),
  'container' => 
  array (
    0 => 'Block_332526553640b908741dae5_94457243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_332526553640b908741dae5_94457243', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1646055972640b908741e916_42071178 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1646055972640b908741e916_42071178',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_366933127640b908741eff4_74301437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_366933127640b908741eff4_74301437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
