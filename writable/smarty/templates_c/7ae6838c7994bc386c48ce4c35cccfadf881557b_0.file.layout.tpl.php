<?php
/* Smarty version 4.2.0, created on 2023-04-11 07:10:14
  from 'C:\xampp\htdocs\datamax_gestor\app\Views\admin\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64354e264d66f7_57139215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae6838c7994bc386c48ce4c35cccfadf881557b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_gestor\\app\\Views\\admin\\layout.tpl',
      1 => 1680639090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64354e264d66f7_57139215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21102460964354e264c0f15_11838879', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1787454264354e264c21c3_60247446', 'styles');
?>

</head>

<body>
    <header class="adm-header">
        <div class="adm-user-op" id="adm_user_op">
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
" class="logout">  
                <span class="material-symbols-rounded">logout</span>
            </a>
        </div>
        <span class="material-symbols-rounded" id="open-close">menu</span>
        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/admin/logogestor.svg" class="logo-gestor">
    </header>
    <header class="adm-form">
        <a href="#" class="icon-form" id="icn-frm"><span class="material-symbols-rounded">arrow_back</span></a>
        <p class="adm-form-txt"></p>
    </header>

    <main>
        <aside id="aside" class="three">
            <div class="bg-content-aside">
                <div class="container-svg">

                    <div class="title-menu">
                        <p class="txt-title" id="title-menu">DATAMAX</p>
                    </div>

                    <ul class="adm-menu">
                        <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['users']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
">
                                <span class="adm-item-cont">
                                                                        <span class="material-symbols-rounded icon-menu">person</span>
                                    <p class="adm-menu-leg">Usuarios</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['slides']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_slides']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">art_track</span>
                                    <p class="adm-menu-leg">Slide principal</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['functionalities']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_functionalities']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">interests</span>
                                    <p class="adm-menu-leg">Funcionalidades</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['enterprises']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_enterprises']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">corporate_fare</span>
                                    <p class="adm-menu-leg">Empresas</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu <?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">subscriptions</span>
                                    <p class="adm-menu-leg">Tutoriales</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['pqr']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_pqr']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">support_agent</span>
                                    <p class="adm-menu-leg">PQR</p>
                                </span>
                            </a>
                        </li>
                        <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['support']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_support']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">build</span>
                                    <p class="adm-menu-leg">Soporte</p>
                                </span>
                                
                            </a>
                        </li>
                        <li class="adm-item-menu  <?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>adm-active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
">
                                <span class="adm-item-cont">
                                    <span class="material-symbols-rounded icon-menu">help</span>
                                    <p class="adm-menu-leg">Preguntas frecuentes</p>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="container-system">
                    <ul class="adm-menu">
                            <li class="adm-item-menu item-pass <?php if ((isset($_smarty_tpl->tpl_vars['changepass']->value))) {?>adm-active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path_change_password']->value;?>
">  
                                    <span class="adm-item-cont">
                                        <span class="material-symbols-rounded icon-menu">lock</span>
                                        <p class="adm-menu-leg">Cambiar contraseña</p>
                                    </span>
                                </a>
                            </li>
                            <li class="adm-item-menu">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
">  
                                    <span class="adm-item-cont">
                                        <span class="material-symbols-rounded icon-menu">logout</span>
                                        <p class="adm-menu-leg">Salir</p>
                                    </span>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </aside>            
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100369850364354e264d0890_54270038', 'body');
?>

    </main>


    

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128032527964354e264d1ac6_84338970', 'modals');
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
lib/cropper/cropper.min.js"><?php echo '</script'; ?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122506935064354e264d51c8_97208898', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_21102460964354e264c0f15_11838879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_21102460964354e264c0f15_11838879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_1787454264354e264c21c3_60247446 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1787454264354e264c21c3_60247446',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_100369850364354e264d0890_54270038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_100369850364354e264d0890_54270038',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_128032527964354e264d1ac6_84338970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_128032527964354e264d1ac6_84338970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_122506935064354e264d51c8_97208898 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_122506935064354e264d51c8_97208898',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
