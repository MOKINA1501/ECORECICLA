<?php
/* Smarty version 4.2.0, created on 2023-04-05 11:55:37
  from 'C:\xampp\htdocs\datamax\app\Views\pages\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642da80929b308_47770355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b8d52e7f21079afa6abde780beaa60ae6dfc62c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\pages\\layout.tpl',
      1 => 1680712785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642da80929b308_47770355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34622258642da809292677_92235736', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1904109054642da809292fa4_74927396', 'styles');
?>

</head>

<body>
    <div id="overlay" class="overlay none"></div>
    <header class="main-header" id="navbar_header">
        <div class="nav-header">
            <figure class="nav-img">
                <div class="ctn-close-menu">
                    <span class="btn-open-menu"><span class="material-icons-outlined">menu</span></span>
                </div>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/logo-head.svg">
            </figure>
            <nav id="menu">
                <span class="btn-close-menu"><span class="material-icons-outlined none">menu</span>Datamax</span>
                <ul class="nav-menu">
                    <li id="home" class="<?php if ((isset($_smarty_tpl->tpl_vars['home']->value))) {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
" class="item-menu">
                            <span class="ic-mn material-icons-round">home</span>Inicio
                        </a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
" class="item-menu">
                                <span class="ic-mn material-icons-round">subscriptions</span>Tutoriales
                            </a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                        <li class="<?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>active<?php }?>">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
" class="item-menu">
                                <span class="ic-mn material-icons-round">help</span>Preguntas Frecuentes
                            </a>
                        </li>
                    <?php }?>
                    <li id="con_link">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
#contact" class="item-menu">
                            <span class="ic-mn material-icons-round">support_agent</span>Escríbenos
                        </a>
                    </li>
                    <li class="<?php if ((isset($_smarty_tpl->tpl_vars['technical_support']->value))) {?>active<?php }?>">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_technical_support']->value;?>
"class="item-menu">
                            <span class="ic-mn material-icons-round">build</span>Soporte técnico
                        </a>
                    </li>
                    <li class="li-btn"><a href="<?php echo $_smarty_tpl->tpl_vars['path_admin']->value;?>
"><button class="btn-nav"><span class="material-icons-outlined">login</span>Iniciar sesión</button></a></li>
                </ul>
            </nav>
            <div class="ctn-btn-nav">
                <a href="<?php echo $_smarty_tpl->tpl_vars['path_admin']->value;?>
"><button class="btn-nav"><span class="material-icons-outlined">login</span>Iniciar sesión</button></a>
            </div>
        </div>
    </header>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_558442859642da809297979_32338057', 'body');
?>

    </main>

    <div class="support" id="btn-support">
        <span class="material-icons-round icon-sup">headset_mic</span>
        <div class="txt-support none">
            <span>¿Necesitas ayuda?</span>
        </div>
    </div>
    <div class="none" id="ctn_form_chat">
            
        <p>PQR</p>
            
        <form id="pqrs_chat_form" class="form_chat" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
            <div class="hash">
                <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            </div>
            <input type="text" class="chat-done chat-input chat-user-pqr" name="name" id="name_chat" data-user="nombre completo">
            <input type="text" class="chat-done chat-input chat-user-pqr" name="phone_number" id="phone_number_chat" data-user="número de celular">
            <input type="text" class="chat-done chat-input chat-user-pqr" name="email" id="email_chat" data-user="correo electrónico">
            <input type="text" class="chat-done chat-input select-chat-pqr" name="enterprise" id="enterprise_chat" data-user="empresa">
            <input type="text" class="chat-done chat-user-pqr" name="name_enterprise" id="name_enterprise_chat" data-user="empresa">
            <input type="text" class="chat-done chat-input select-chat-pqr" name="area" id="area_chat" data-user="área">
            <input type="text" class="chat-done chat-user-pqr" name="name_area" id="name_area_chat" data-user="área">
            <input type="text" class="chat-done chat-input select-chat-pqr" name="type" id="type_chat" data-user="tipo de solicitud">
            <input type="text" class="chat-done chat-user-pqr" name="name_type" id="name_type_chat" data-user="tipo de solicitud">
            <input type="text" class="chat-done flag-terms-legacy" name="flag_legacy" id="flag_legacy_chat">
            <input type="text" class="chat-done flag-terms-mail" name="flag_mail" id="flag_mail_chat">
            <input type="text" class="chat-done chat-input chat-user-pqr" name="message" id="message_chat" data-user="mensaje"></input>
            <input type="text" class="chat-done chat-input chat-terms" name="flag_terms" id="flag_terms_chat">
        </form>

        <p>Soporte</p>

        <form id="support_chat_form" class="form_chat" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_support']->value;?>
">
            <div class="hash">
                <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            </div>
            <input type="text" class="chat-done sup-input chat-user" name="name" id="name_chat_sup" data-user="nombre completo">
            <input type="text" class="chat-done sup-input chat-user" name="phone_number" id="phone_number_chat_sup" data-user="número de celular">
            <input type="text" class="chat-done sup-input chat-user" name="email" id="email_chat_sup" data-user="correo electrónico">
            <input type="text" class="chat-done sup-input select-chat-pqr" name="module" id="module_chat" data-user="módulo">
            <input type="text" class="chat-done chat-user" name="name_module" id="name_module_chat" data-user="módulo">
            <input type="text" class="chat-done" name="module_id" id="id_module_chat" data-user="módulo">
            <input type="text" class="chat-done sup-input select-chat-pqr" name="submodule" id="submodule_chat" data-user="submódulo">
            <input type="text" class="chat-done chat-user" name="name_submodule" id="name_submodule_chat" data-user="submódulo">
            <input type="text" class="chat-done flag-terms-legacy" name="flag_legacy" id="flag_legacy_chat_sup">
            <input type="text" class="chat-done flag-terms-mail" name="flag_mail" id="flag_mail_chat_sup">
            <input type="text" class="chat-done sup-input chat-user" name="message" id="message_chat_sup" data-user="mensaje"></input>
            <input type="text" class="chat-done sup-input chat-terms" name="flag_terms" id="flag_terms_chat_sup">
        </form>
    </div>

    <section class="chat none" id="chat">
        <div class="chat-loader none" id="chat_loader">
            <div>
                <p>Asistente virtual</p>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/chat-loader.svg">
            </div>
        </div>
        <div class="chat-header">
            <div class="chat-inf">
                <span class="main-icon material-icons-round icon-sup">headset_mic</span>
                <span class="tit-chat">Asistente Virtual</span>
            </div>
            <div class="d-flex">
                <div class="chat-close">
                    <span id="close-chat" class="icon-chat material-icons-outlined">remove</span>
                </div>
                <div class="chat-close">
                
                    <span id="close-chat-session" class="icon-chat material-icons-outlined">close</span>
                </div>
            </div>
        </div>
        <div class="chat-body">
        </div>
        <div class="chat-ctn-inp">
            <input class="inp-chat dis" name="q-chat" id="response_user" autocomplete="off"
                onkeypress="handleKeyPress(event)" placeholder="Escribe tu respuesta" disabled autofocus="true">
            <button id="btn_chat_user" class="btn-chat dis" disabled><span class="material-icons-round">send</span></button>
        </div>
        <div class="session-chat none" id="session_chat">
            <div class="session-content"><span>¿Seguro deseas cerrar esta conversación?</span></div>
            <div class="session-des d-flex justify-content-end align-items-center">
                <button class="des-chat-op session-no" id="btn_close_session">Si</button>
                <button class="des-chat-op session-yeah" id="btn_can_close_session">No</button>
            </div>
        </div>
    </section>

    <footer>
        <section class="foot-1">
            <div class="f1-cont">
                <figure class="footer-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/logo-footer.svg">
                </figure>
                <div class="footer-li">
                    <ul>
                        <li><a href=" https://admin.datamax.co">Iniciar sesión</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
">Tutoriales</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
">Preguntas Frecuentes</a></li>
                        <?php }?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_technical_support']->value;?>
">Soporte técnico</a></li>
                        <li><a>Términos y condiciones</a></li>
                        <li><a>Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="foot-2">
            <div class="conect">
                <span>Este es un producto creado por</span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/con-footer.svg">
            </div>
        </section>
    </footer>

    <div id="modal_terms" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="d-flex justify-content-center align-items-center mb-4 mt-4 ps-3 pe-3 text-center">
                        <h3 class="title-modal">Conoce nuestro tratamiento de datos y nuestros términos y condiciones</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <div class="mb-2">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <input class="con-input-esp me-1 cursor-pointer ck-form"
                                            type="checkbox" name="no_aut" id="no_aut">
                                    </div>
                                    <div class="container-fluid break-word">
                                        <p class="text-justify">No autorizo el tratamiento de mis datos personales
                                            (No será posible enviar solicitud).</p>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <input class="con-input-esp me-1 cursor-pointer ck-form"
                                            type="checkbox" name="flag_legacy_2" id="flag_legacy_2">
                                    </div>
                                    <div class="container-fluid break-word">
                                        <p class="text-justify">Autorizo de manera previa, libre y
                                            expresa a la plataforma de gestión DATAMAX, para que realice tratamiento de
                                            mis
                                            datos personales conforme a las siguientes finalidades: <b>a)</b> solicitar
                                            la
                                            aclaración,
                                            complementación o corrección de la solicitud presentada cuando sea
                                            necesario;
                                            <b>b)</b> dar
                                            respuesta completa y oportuna a la petición; <b>c)</b> constatar la
                                            veracidad de la
                                            información; <b>d)</b> gestionar los trámites a que haya lugar; <b>e)</b>
                                            ofrecer la
                                            atención y
                                            ayuda requerida por el peticionario; y <b>f)</b> verificar el grado de
                                            conformidad
                                            frente a
                                            las posibles soluciones, medidas de mejoramiento o novedades de servicios
                                            adoptadas
                                            frente a su solicitud.<br>
                                            Así mismo reconozco que el tratamiento de mis datos personales se realizará
                                            conforme
                                            a la Política de tratamiento de la información personal de Holding MAX y
                                            nuestros
                                            términos de uso, disponibles en <a
                                                href="https://datamax.co/public/files/tratamiento.pdf"
                                                target="blank">https://datamax.co/public/files/tratamiento.pdf</a>
                                            y
                                            <a href="https://datamax.co/public/files/terminos.pdf"
                                                target="blank">https://datamax.co/public/files/terminos.pdf</a>.</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex align-items-start">
                                    <div>
                                        <input class="con-input-esp me-1 cursor-pointer ck-form"
                                            type="checkbox" name="flag_mail_2" id="flag_mail_2">
                                    </div>
                                    <div class="container-fluid break-word">
                                        <p
                                         class="text-justify">Certifico que el correo electrónico ingresado en mis datos personales se encuentra vigente, de igual manera autorizo a la plataforma de gestión DATAMAX, para el envío de la respuesta a mi solicitud por este medio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="container-fluid mt-1 mb-4 col-lg-4 mx-auto d-flex justify-content-center align-items-center">
                    <button id="btn_close_terms" class="btn-lan">Ocultar</button>
                </div>
            </div>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2056107270642da809299651_50207126', 'modals');
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
 type="text/javascript">
        var path_list_areas                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_list_areas']->value;?>
';
        var path_list_enterprises                                               =   '<?php echo $_smarty_tpl->tpl_vars['path_list_enterprises']->value;?>
';
        var path_verify_support                                                 =   '<?php echo $_smarty_tpl->tpl_vars['path_verify_support']->value;?>
';
        var path_modules                                                        =   'https://dev.datamax.co/getmodules';
        var resources                                                           =   '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
        var path_list_slides                                                  =   '<?php echo $_smarty_tpl->tpl_vars['path_list_slides']->value;?>
';
    <?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_402324187642da80929aa22_89021125', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_34622258642da809292677_92235736 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_34622258642da809292677_92235736',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_1904109054642da809292fa4_74927396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1904109054642da809292fa4_74927396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_558442859642da809297979_32338057 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_558442859642da809297979_32338057',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_2056107270642da809299651_50207126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_2056107270642da809299651_50207126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_402324187642da80929aa22_89021125 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_402324187642da80929aa22_89021125',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'scripts'} */
}
