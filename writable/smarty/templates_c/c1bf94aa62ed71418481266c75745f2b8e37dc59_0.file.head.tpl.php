<?php
/* Smarty version 4.2.0, created on 2023-03-09 07:15:21
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6409dbe90a2291_46433852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1bf94aa62ed71418481266c75745f2b8e37dc59' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\head.tpl',
      1 => 1678367718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6409dbe90a2291_46433852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19011206606409dbe9096ba9_23445804', "head");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../admin/layout.tpl');
}
/* {block "head"} */
class Block_19011206606409dbe9096ba9_23445804 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_19011206606409dbe9096ba9_23445804',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/logo.png">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/axs4esb.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/slick/slick.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/slick/slick-theme.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/iziToast/css/iziToast.min.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/select2/css/select2.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/select2/css/select2-bootstrap4.css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/datamax.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/admin.css">
    <title>DATAMAX</title>
<?php
}
}
/* {/block "head"} */
}
