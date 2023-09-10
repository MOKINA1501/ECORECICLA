<?php
/* Smarty version 4.2.0, created on 2023-03-10 06:27:49
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640b22459a16f7_38411010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '064b993e4ae7416b238e60001432fec158df8cfc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\enterprises.tpl',
      1 => 1678391497,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b22459a16f7_38411010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_746838882640b224599e006_95432019', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50484646640b224599e967_98259988', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1416106003640b22459a0d29_53947823', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1094046319640b22459a1282_79713014', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_746838882640b224599e006_95432019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_746838882640b224599e006_95432019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_533448311640b22459a02c1_32160072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_50484646640b224599e967_98259988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_50484646640b224599e967_98259988',
  ),
  'container' => 
  array (
    0 => 'Block_533448311640b22459a02c1_32160072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533448311640b22459a02c1_32160072', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1416106003640b22459a0d29_53947823 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1416106003640b22459a0d29_53947823',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1094046319640b22459a1282_79713014 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1094046319640b22459a1282_79713014',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
