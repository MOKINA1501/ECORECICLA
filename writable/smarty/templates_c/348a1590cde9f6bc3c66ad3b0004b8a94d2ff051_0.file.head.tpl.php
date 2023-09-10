<?php
/* Smarty version 4.2.0, created on 2023-04-15 10:21:55
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643ac113eec107_86466835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '348a1590cde9f6bc3c66ad3b0004b8a94d2ff051' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\head.tpl',
      1 => 1681572105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ac113eec107_86466835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138772728643ac113ee77e5_31033305', "head");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layout.tpl');
}
/* {block "head"} */
class Block_2138772728643ac113ee77e5_31033305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2138772728643ac113ee77e5_31033305',
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
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
lib/paginationjs/pagination.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/cropper/cropper.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/home.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/admin.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/datamax.css">

    <title>DATAMAX</title>
<?php
}
}
/* {/block "head"} */
}
