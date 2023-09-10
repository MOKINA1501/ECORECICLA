<?php
/* Smarty version 4.2.0, created on 2023-03-10 14:29:47
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\frequent_questions\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640b933bd2ff85_68053078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fade32ae13124f98d40429a9227a7aa0597d5847' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\frequent_questions\\frequent_questions.tpl',
      1 => 1678480182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640b933bd2ff85_68053078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1317703664640b933bd21a60_18438213', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_688055312640b933bd231a2_00964558', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1677919678640b933bd2d114_39491742', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1226675352640b933bd2f276_20731244', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_1317703664640b933bd21a60_18438213 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1317703664640b933bd21a60_18438213',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_671065131640b933bd2a6c7_45040165 extends Smarty_Internal_Block
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
class Block_688055312640b933bd231a2_00964558 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_688055312640b933bd231a2_00964558',
  ),
  'container' => 
  array (
    0 => 'Block_671065131640b933bd2a6c7_45040165',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671065131640b933bd2a6c7_45040165', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1677919678640b933bd2d114_39491742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1677919678640b933bd2d114_39491742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1226675352640b933bd2f276_20731244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1226675352640b933bd2f276_20731244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
