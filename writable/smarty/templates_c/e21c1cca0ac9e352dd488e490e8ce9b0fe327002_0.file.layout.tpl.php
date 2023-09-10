<?php
/* Smarty version 4.2.0, created on 2023-03-16 13:48:26
  from 'C:\xampp\htdocs\datamax_copia\app\Views\pages\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6413647a2aeaf2_76755631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e21c1cca0ac9e352dd488e490e8ce9b0fe327002' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\pages\\layout.tpl',
      1 => 1678992504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413647a2aeaf2_76755631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2001418956413647a2933f8_01427792', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159374116413647a296f88_49912880', 'styles');
?>

</head>

<body>
    <div class="overlay none"></div>
    <header class="main-header">
        <div class="nav-header">
            <figure class="nav-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/logo-head.svg">
            </figure>
            <nav id="menu">
                <span class="btn-close-menu"><i class="fa-solid fa-bars"></i></span>
                <ul class="nav-menu">
                    <li><a id="home" href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
" class="item-menu <?php if ((isset($_smarty_tpl->tpl_vars['home']->value))) {?>active<?php }?>">Inicio</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
" class="item-menu <?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>active<?php }?>">Tutoriales</a>
                        </li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"
                                class="item-menu <?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>active<?php }?>">Preguntas Frecuentes</a></li>
                    <?php }?>
                    <li><a id="con_link" href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
#contact" class="item-menu">Escríbenos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_technical_support']->value;?>
"
                            class="item-menu <?php if ((isset($_smarty_tpl->tpl_vars['technical_support']->value))) {?>active<?php }?>">Soporte
                            técnico</a></li>
                    <li class="li-btn"><a href=" https://admin.datamax.co"><button class="btn-nav">Iniciar sesión<i
                                    class="fa-solid fa-user ms-2"></i></button></a></li>
                </ul>
            </nav>
            <div class="ctn-close-menu">
                <a href=" https://admin.datamax.co">
                    <div class="icon-user">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
                <span class="btn-open-menu"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
    </header>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_752416966413647a2a8304_30693773', 'body');
?>

    </main>

    <div class="support" id="btn-support">
        <img class="support-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/chat-icon.png">
        <div class="txt-support none">
            <span>¿Necesitas ayuda?</span>
        </div>
    </div>
    <div class="none" id="ctn_form_chat">
            
        <form id="form_chat" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
            <input class="chat-done" type="text" name="type-form" id="type_form_chat">
            <div class="hash">
                <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            </div>
            <input class="chat-done chat-input chat-user" type="text" name="name" id="name_chat" data-user="nombre completo">
            <input class="chat-done chat-input chat-user" type="text" name="phone_number" id="phone_number_chat"
                data-user="número de celular">
            <input class="chat-done chat-input chat-user" type="text" name="email" id="email_chat" data-user="correo electrónico">
            <input class="chat-done chat-input select-chat-pqr" type="text" name="enterprise" id="enterprise_chat"
                data-user="empresa">
            <input class="chat-done chat-user" type="text" name="name_enterprise" id="name_enterprise_chat" data-user="empresa">
            <input class="chat-done chat-input select-chat-pqr" type="text" name="area" id="area_chat" data-user="área">
            <input class="chat-done chat-user" type="text" name="name_area" id="name_area_chat" data-user="área">
            <input class="chat-done chat-input select-chat-pqr" type="text" name="type" id="type_chat" data-user="tipo de solicitud">
            <input class="chat-done chat-user" type="text" name="name_type" id="name_type_chat" data-user="tipo de solicitud">
            <input type="text" class="chat-done flag-terms-legacy" name="flag_legacy" id="flag_legacy_chat">
            <input type="text" class="chat-done flag-terms-mail" name="flag_mail" id="flag_mail_chat">
            <input type="text" class="chat-done chat-input chat-user" name="message" id="message_chat" rows="4" data-user="mensaje"></input>
            <input class="chat-done chat-input chat-terms" type="text" name="flag_terms" id="flag_terms_chat">
        </form>
    </div>

    <section class="chat none" id="chat">
        <div class="chat-header">
            <div class="chat-inf">
                <img class="chat-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/chat-icon.png">
                <span>Asistente Virtual</span>
            </div>
            <div class="d-flex">
                <div class="chat-close">
                    <i id="close-chat" class="fa-solid fa-minus"></i>
                </div>
                <div class="chat-close">
                    <i id="close-chat-session" class="fa-solid fa-xmark"></i>
                </div>
            </div>
        </div>
        <div class="chat-body">
        </div>
        <div class="chat-ctn-inp">
            <input class="inp-chat dis" name="q-chat" id="response_user" autocomplete="off"
                onkeypress="handleKeyPress(event)" placeholder="Escribe tu respuesta" disabled autofocus="true">
            <button id="btn_chat_user" class="btn-chat dis" disabled><i class="fa-solid fa-paper-plane"></i></button>
        </div>
        <div class="session-chat none" id="session_chat">
            <div class="session-content"><span>¿Desea cerrar la sesión?</span></div>
            <div class="session-des d-flex justify-content-around align-items-center">
                <button class="session-yeah" id="btn_close_session">Confirmar</button>
                <button class="session-no" id="btn_can_close_session">Cancelar</button>
            </div>
        </div>
    </section>

    <footer>
        <section class="foot-1">
            <div class="f1-cont">
                <figure class="footer-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/logo-footer.png">
                </figure>
                <div class="footer-li">
                    <ul>
                        <li><a href=" https://admin.datamax.co">Iniciar sesión</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>active<?php }?>">Tutoriales</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"
                                    class="<?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>active<?php }?>">Preguntas Frecuentes</a></li>
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
img/landing/con-footer.png">
            </div>
        </section>
    </footer>

    <div id="modal_terms" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="d-flex justify-content-center align-items-center mg-b-20 mg-t-45 mb-4 mt-4 text-center">
                        <h3 class="title-modal">Términos y condiciones de uso</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <div class="mb-2">
                                <div class="d-flex align-items-start">
                                    <div>
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form"
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
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form"
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
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form"
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
                    <button id="btn_close_terms" class="con-btn">Ocultar</button>
                </div>
            </div>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2298937926413647a2abeb7_83585296', 'modals');
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
 type="text/javascript">
        var path_list_areas                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_list_areas']->value;?>
';
        var path_list_enterprises                                               =   '<?php echo $_smarty_tpl->tpl_vars['path_list_enterprises']->value;?>
';
    <?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2194367386413647a2adf73_40559299', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_2001418956413647a2933f8_01427792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_2001418956413647a2933f8_01427792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_1159374116413647a296f88_49912880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1159374116413647a296f88_49912880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_752416966413647a2a8304_30693773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_752416966413647a2a8304_30693773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_2298937926413647a2abeb7_83585296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_2298937926413647a2abeb7_83585296',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_2194367386413647a2adf73_40559299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2194367386413647a2adf73_40559299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
