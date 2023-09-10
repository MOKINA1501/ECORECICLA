<?php
/* Smarty version 4.2.0, created on 2023-03-13 08:58:11
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\slides\slides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640f2bf33dda55_83768126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d55d17e927991590972d0b0bfe76275fc329312' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\slides\\slides.tpl',
      1 => 1678480182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f2bf33dda55_83768126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_723182124640f2bf33d6f05_84229813', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_630533829640f2bf33d7f11_59989157', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1656026383640f2bf33dc8d2_00144759', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_283907037640f2bf33dd145_51685817', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_723182124640f2bf33d6f05_84229813 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_723182124640f2bf33d6f05_84229813',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_961402935640f2bf33db605_84913292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_630533829640f2bf33d7f11_59989157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_630533829640f2bf33d7f11_59989157',
  ),
  'container' => 
  array (
    0 => 'Block_961402935640f2bf33db605_84913292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_961402935640f2bf33db605_84913292', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1656026383640f2bf33dc8d2_00144759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1656026383640f2bf33dc8d2_00144759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_283907037640f2bf33dd145_51685817 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_283907037640f2bf33dd145_51685817',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
