<?php
/* Smarty version 4.2.0, created on 2023-02-25 10:24:58
  from 'C:\xampp\htdocs\landing_datamax\app\Views\pages\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63fa365a0c1be1_42113052',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3979f15ea113fe9adbc14a1504cee7cb49b53780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\pages\\frequent_questions.tpl',
      1 => 1677342294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63fa365a0c1be1_42113052 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144627367663fa365a0b86b6_60994849', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177910999763fa365a0b8f93_00610340', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185138473863fa365a0c1335_01025831', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82231216063fa365a0c1884_52686230', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_144627367663fa365a0b86b6_60994849 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_144627367663fa365a0b86b6_60994849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_70309293863fa365a0bbd59_66109621 extends Smarty_Internal_Block
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
class Block_177910999763fa365a0b8f93_00610340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_177910999763fa365a0b8f93_00610340',
  ),
  'container' => 
  array (
    0 => 'Block_70309293863fa365a0bbd59_66109621',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70309293863fa365a0bbd59_66109621', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_185138473863fa365a0c1335_01025831 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_185138473863fa365a0c1335_01025831',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_82231216063fa365a0c1884_52686230 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_82231216063fa365a0c1884_52686230',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
