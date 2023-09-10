<?php
/* Smarty version 4.2.0, created on 2023-04-15 10:27:19
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643ac257a4e433_49008973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28dddd3f70d1539fd0a6c823d3a6051faa1afa97' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\layout.tpl',
      1 => 1681572435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ac257a4e433_49008973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\ThirdParty\\Smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_809004598643ac257a2f7d1_40159474', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48784302643ac257a311f9_50333318', 'styles');
?>

</head>

<body>
    <header class="adm-header">
        <div class="hv-ctn-container">
            <div class="d-flex">
                <span class="material-symbols-rounded" id="open-close">menu</span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/admin/logogestor.svg" class="logo-gestor">
            </div>
            <div class="adm-user-op d-flex" id="adm_user_op">
                <div class="hv-ctn-search" id="hv-ctn-search">
                    <input type="search" class="hv-search-all" id="hv-search-all" placeholder="Buscar en Datamax...">
                    <span class="material-icons hv-icon-search" id="hv-icon-search">search</span>
                </div>

                <div class="dropdown hv-noti-drop dropdown-menu-right">
                    <a class="dropdown-toggle hv-notification" href="#" id="dropdownMenuClickable" role="button"
                        data-bs-toggle="dropdown" data-bs-auto-close="false" aria-expanded="false">
                        <span class="material-icons">notifications_active</span>
                    </a>

                    <div class="dropdown-menu hv-drop-noti" id="hv-drop-menu" aria-labelledby="dropdownMenuClickable">
                        <div class="hv-ctn-mobile">
                            <h2 class="title1 p-0 hv-drop-title d-flex align-items-center"><button
                                    class="hv-icon-drop me-2 align-items-center" id="hv-btn-close-drop"><span
                                        class="material-icons">arrow_back</span></button> Notificaciones</h2>
                            <div class="hv-pd">
                                <h5 class="subtitle hv-drop-subtitle">Nuevas</h5>
                                <ul class="p-0 hv-drop-list">
                                    <li class="hv-list position-relative">
                                        <a href="#" class="text-decoration-none">
                                            <p class="body hv-drop-text">Tienes soportes pendientes por cargar, completa
                                                tu proceso ahora</p>
                                            <span class="hv-drop-span">08:00 am</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hv-pd">
                                <h5 class="subtitle hv-drop-subtitle">Anteriores</h5>
                                <ul class="p-0">
                                    <li class="hv-list hv-back-list position-relative">
                                        <p class="body hv-drop-text">Mejora tu perfil subiendo los soportes que
                                            acompañan tu hoja de vida</p>
                                        <span class="hv-drop-span">Ayer</span>
                                    </li>
                                    <li class="hv-list hv-back-list position-relative">
                                        <p class="body hv-drop-text">Tu hoja de vida ha sido revisada</p>
                                        <span class="hv-drop-span">22/03/23</span>
                                    </li>
                                    <li class="hv-list hv-back-list position-relative">
                                        <p class="body hv-drop-text">Completa tu hoja de vida y continua con tu proceso.
                                        </p>
                                        <span class="hv-drop-span">21/03/23</span>
                                    </li>
                                    <li class="hv-list hv-back-list position-relative">
                                        <p class="body hv-drop-text">Te damos la bienvenida a Datamax</p>
                                        <span class="hv-drop-span">20/03/23</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown hv-drop-logout">
                    <a class="dropdown-toggle logout" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <span class="material-icons">person</span>
                    </a>

                    <ul class="dropdown-menu p-0">
                        <li class="hv-br position-relative">
                            <a class="dropdown-item d-flex align-items-center hv-pd-16" href="#">
                                <img src="#" class="hv-img-user">
                                <div>
                                    <p class="hv-name-user">José Iván Pérez Peréz</p>
                                    <p class="hv-view-text">Ver tu hoja de vida</p>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-item hv-pd-16 py-0 item-pass">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_change_password']->value;?>
"
                                class="d-flex align-items-center text-decoration-none adm-item-menu">
                                <span class="material-icons icon-menu"> manage_accounts</span>
                                <p class="adm-menu-leg">Configuración de cuenta</p>
                            </a>
                        </li>
                        <li class="dropdown-item hv-pd-16 py-0 pt-0">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
"
                                class="d-flex align-items-center text-decoration-none adm-item-menu">
                                <span class="material-icons icon-menu">logout</span>
                                <p class="adm-menu-leg">Cerrar sesión</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <header class="adm-form">
        <a href="#" class="icon-form" id="icn-frm"><span class="material-symbols-rounded">arrow_back</span></a>
        <p class="adm-form-txt"></p>
    </header>

    <main class="hv_main">
        <span class="hv-time"></span>
        <aside id="aside" class="three">
            <div class="bg-content-aside" id="hv-list-menu">
                <div class="container-svg">
                    <div class="title-menu d-flex align-items-center justify-content-between">
                        <p class="txt-title" id="title-menu">DATAMAX</p>
                        <div class="hv-ctn-search hv-ctn-search-mobile" id="hv-ctn-search-mobile">
                            <input type="search" class="hv-search-all" id="hv-search-all-mobile"
                                placeholder="Buscar en Datamax...">
                            <span class="material-icons hv-icon-search" id="hv-icon-search-mobile">search</span>
                        </div>
                    </div>
                    <ul class="adm-menu">

                        <?php ob_start();
echo ($_smarty_tpl->tpl_vars['submodule_active']->value).(" nav-link");
$_prefixVariable1 = ob_get_clean();
ob_start();
echo ($_smarty_tpl->tpl_vars['module_active']->value).(" br-menu-link");
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('find_left', array($_prefixVariable1,$_prefixVariable2));?>
                        <?php $_smarty_tpl->_assignInScope('repl_left', array(' nav-link active','"br-menu-link active'));?>
                        <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['menu_left']->value,$_smarty_tpl->tpl_vars['find_left']->value,$_smarty_tpl->tpl_vars['repl_left']->value);?>

                                            </ul>
                </div>

                <div class="container-system">
                    <ul class="adm-menu">
                        <li class="item-pass">
                            <a href="#" class="hv_link_menu adm-item-menu">
                                <span class="material-symbols-rounded icon-menu">shield_lock</span>
                                <p class="adm-menu-leg">superadmin</p>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
" class="hv_link_menu adm-item-menu">
                                <span class="material-icons icon-menu">logout</span>
                                <p class="adm-menu-leg">Cerrar sesión</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1957944124643ac257a46826_11843210', 'body');
?>

    </main>

    
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1883216750643ac257a479a7_45245545', 'modals');
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
lib/moment/moment.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/moment/moment-locales.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/switchbutton/js/switchButton.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/malihu-scrollbar/js/jquery.mCustomScrollbar.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/cropper/cropper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/datamax.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/arrivalDocuments.js"><?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2123429434643ac257a4cb21_88355409', 'scripts');
?>

</body>

</html><?php }
/* {block 'head'} */
class Block_809004598643ac257a2f7d1_40159474 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_809004598643ac257a2f7d1_40159474',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_48784302643ac257a311f9_50333318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_48784302643ac257a311f9_50333318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_1957944124643ac257a46826_11843210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1957944124643ac257a46826_11843210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_1883216750643ac257a479a7_45245545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1883216750643ac257a479a7_45245545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_2123429434643ac257a4cb21_88355409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2123429434643ac257a4cb21_88355409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'scripts'} */
}
