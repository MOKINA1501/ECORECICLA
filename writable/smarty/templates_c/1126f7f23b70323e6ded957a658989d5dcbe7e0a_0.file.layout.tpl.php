<?php
/* Smarty version 4.2.0, created on 2023-03-13 08:56:26
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640f2b8a9bfde6_87061659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1126f7f23b70323e6ded957a658989d5dcbe7e0a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\layout.tpl',
      1 => 1678715776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640f2b8a9bfde6_87061659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_226009009640f2b8a9a8839_59936309', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2134613071640f2b8a9ab2a5_63078706', 'styles');
?>

</head>

<body>
    <header class="adm-header">
        <nav class="adm-nav-bar">
            <figure class="adm-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2904.png">
            </figure>
            <ul class="adm-menu">
                <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['users']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-user"></i>
                            <p class="adm-menu-leg">Usuarios</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['slides']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_slides']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-image"></i>
                            <p class="adm-menu-leg">Slide principal</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['functionalities']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_functionalities']->value;?>
">
                        <span class="adm-item-cont"><i class="icon-menu fa-solid fa-wand-magic-sparkles"></i>
                            <p class="adm-menu-leg">Funcionalidades</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['enterprises']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_enterprises']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-building"></i>
                            <p class="adm-menu-leg">Empresas</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-film"></i>
                            <p class="adm-menu-leg">tutoriales</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['pqr']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_pqr']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-handshake-angle"></i>
                            <p class="adm-menu-leg">PQR</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['support']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_support']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-wrench"></i>
                            <p class="adm-menu-leg">Soporte</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-question"></i>
                            <p class="adm-menu-leg">Preguntas frecuentes</p>
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="adm-user-op" id="adm_user_op">
            <figure>
                <img class="img-user" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['session']->value->data['photo'];?>
">
            </figure>
            <i class="icon-chev-op fa-solid fa-chevron-down"></i>
        </div>
        <div class="user-options " id="user_options">
            <div class="op">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path_change_password']->value;?>
">  
                    <i class="fa-solid fa-key"></i>
                    <div>
                        <span>Cambiar contraseña</span>
                    </div>
                </a>
            </div>
            <div class="op">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
">  
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <div>
                        <span>Cerrar sesión</span>
                    </div>
                </a>
            </div>
        </div>
    </header>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_218900792640f2b8a9babc1_69123408', 'body');
?>

    </main>

    <footer class="adm-footer">
        <div class="adm-foot-inf">
            <span>Este es un producto creado por</span>
            <figure>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 658-2.png">
            </figure>
        </div>
    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1654619874640f2b8a9bb839_15892164', 'modals');
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/additional-methods.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/localization/messages_es.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/fontawesome/js/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/slick/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/iziToast/js/iziToast.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/select2/js/select2.full.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/datamax.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/admin.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">

    <?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1393060396640f2b8a9be913_76797281', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_226009009640f2b8a9a8839_59936309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_226009009640f2b8a9a8839_59936309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_2134613071640f2b8a9ab2a5_63078706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2134613071640f2b8a9ab2a5_63078706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_218900792640f2b8a9babc1_69123408 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_218900792640f2b8a9babc1_69123408',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_1654619874640f2b8a9bb839_15892164 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1654619874640f2b8a9bb839_15892164',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_1393060396640f2b8a9be913_76797281 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1393060396640f2b8a9be913_76797281',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
