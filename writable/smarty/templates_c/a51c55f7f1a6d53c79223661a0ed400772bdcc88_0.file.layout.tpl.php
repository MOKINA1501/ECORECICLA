<?php
/* Smarty version 4.2.0, created on 2023-03-16 15:34:26
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64137d52b4b2c9_12474083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51c55f7f1a6d53c79223661a0ed400772bdcc88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\layout.tpl',
      1 => 1678998864,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64137d52b4b2c9_12474083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_51166656764137d52b28049_36199246', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131252465964137d52b2c8b5_48429454', 'styles');
?>

</head>

<body>
    <header class="adm-header">
        <figure class="logo-hide">
            <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/admin/Grupo 2904.png">
        </figure>
        <nav class="adm-nav-bar">
            <figure class="adm-logo">
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/admin/Grupo 2904.png">
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
                <li class="adm-item-menu none <?php if ((isset($_smarty_tpl->tpl_vars['slides']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_slides']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-image"></i>
                            <p class="adm-menu-leg">Slide principal</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu none <?php if ((isset($_smarty_tpl->tpl_vars['functionalities']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_functionalities']->value;?>
">
                        <span class="adm-item-cont"><i class="icon-menu fa-solid fa-wand-magic-sparkles"></i>
                            <p class="adm-menu-leg">Funcionalidades</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu none <?php if ((isset($_smarty_tpl->tpl_vars['enterprises']->value))) {?>adm-active<?php }?>">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['path_enterprises']->value;?>
">
                        <span class="adm-item-cont">
                            <i class="icon-menu fa-solid fa-building"></i>
                            <p class="adm-menu-leg">Empresas</p>
                        </span>
                    </a>
                </li>
                <li class="adm-item-menu none <?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>adm-active<?php }?>">
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
                <?php if (empty($_smarty_tpl->tpl_vars['session']->value->data['photo'])) {?>
                    <img class="img-user" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/default.png">
                <?php } else { ?>
                    <img class="img-user" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/photos/<?php echo $_smarty_tpl->tpl_vars['session']->value->data['photo'];?>
">
                <?php }?>

            </figure>
            <i class="icon-chev-op fa-solid fa-chevron-down"></i>
        </div>
        <div class="user-options none" id="user_options">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158159237064137d52b44419_44612495', 'body');
?>

    </main>

    <footer class="adm-footer">
        <div class="adm-foot-inf">
            <span>Este es un producto creado por</span>
            <figure>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/admin/Grupo 658.svg">
            </figure>
        </div>
    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173986856464137d52b45447_18675289', 'modals');
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
lib/paginationjs/pagination.min.js"><?php echo '</script'; ?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90880741664137d52b489c7_83549575', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_51166656764137d52b28049_36199246 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_51166656764137d52b28049_36199246',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_131252465964137d52b2c8b5_48429454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_131252465964137d52b2c8b5_48429454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_158159237064137d52b44419_44612495 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_158159237064137d52b44419_44612495',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_173986856464137d52b45447_18675289 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_173986856464137d52b45447_18675289',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_90880741664137d52b489c7_83549575 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_90880741664137d52b489c7_83549575',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
