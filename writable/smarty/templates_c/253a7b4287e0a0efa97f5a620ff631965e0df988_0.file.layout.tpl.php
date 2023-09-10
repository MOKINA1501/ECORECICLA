<?php
/* Smarty version 4.2.0, created on 2023-03-10 15:35:45
  from 'C:\xampp\htdocs\landing_datamax\app\Views\pages\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640ba2b1790077_96777108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '253a7b4287e0a0efa97f5a620ff631965e0df988' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\pages\\layout.tpl',
      1 => 1678484143,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640ba2b1790077_96777108 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1708573256640ba2b1769cd7_18869095', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2081890554640ba2b176cee1_69891257', 'styles');
?>

</head>

<body>
    <div class="overlay none"></div>
    <header class="main-header">
        <div class="nav-header">
            <figure class="nav-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 703.png">
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2079132717640ba2b1783576_11236723', 'body');
?>

    </main>

    <div class="support" id="btn-support">
        <img class="support-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 572.png">
        <div class="txt-support none">
            <span>¿Necesitas ayuda?</span>
        </div>
    </div>

    <form class="none" id="form_chat" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
        <input type="text" name="type-form" id="type_form_chat">
        <div class="hash">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

        </div>
        <input class="chat-input chat-user" type="text" name="name" id="name_chat" data-user="nombre completo">
        <input class="chat-input chat-user" type="text" name="phone_number" id="phone_number_chat"
            data-user="número de celular">
        <input class="chat-input chat-user" type="text" name="email" id="email_chat" data-user="correo electrónico">
        <input class="chat-input select-chat-pqr" type="text" name="enterprise" id="enterprise_chat"
            data-user="empresa">
        <input class="chat-user" type="text" name="name_enterprise" id="name_enterprise_chat" data-user="empresa">
        <input class="chat-input select-chat-pqr" type="text" name="area" id="area_chat" data-user="área">
        <input class="chat-user" type="text" name="name_area" id="name_area_chat" data-user="área">
        <input class="chat-input select-chat-pqr" type="text" name="type" id="type_chat" data-user="tipo de solicitud">
        <input class="chat-user" type="text" name="name_type" id="name_type_chat" data-user="tipo de solicitud">
        <input type="text" name="flag_legacy" id="flag_legacy" value="1">
        <input type="text" name="flag_mail" id="flag_mail" value="1">
        <textarea class="chat-input chat-user" name="message" id="message_chat" rows="4" data-user="mensaje"></textarea>
        <input class="chat-input chat-terms" type="text" name="flag_terms" id="flag_terms_chat">
    </form>

    <section class="chat none" id="chat">
        <div class="chat-header">
            <div class="chat-inf">
                <img class="chat-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 572.png">
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
img/Grupo 2904.png">
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
img/Grupo 658.png">
            </div>
        </section>
    </footer>

    <div id="modal_terms" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="d-flex justify-content-center align-items-center mg-b-20 mg-t-45 mb-4 mt-4">
                        <h3 class="title-modal">Términos y condiciones de uso</h3>
                    </div>
                    <div class="container-fluid">
                        <div class="container-fluid mb-2" id="legacy_aut">
                            <div class="mb-2">
                                <p class="text-justify" for="flag_legacy">Si no autoriza el tratamiento de
                                    datos personales (No será posible enviar solicitud).</p>
                            </div>
                            <div>
                                <p class="text-justify" for="flag_legacy">Autorizo de manera previa, libre y
                                    expresa a la plataforma de gestión DATAMAX, para que realice tratamiento de mis
                                    datos personales conforme a las siguientes finalidades: <b>a)</b> solicitar la
                                    aclaración,
                                    complementación o corrección de la solicitud presentada cuando sea necesario;
                                    <b>b)</b> dar
                                    respuesta completa y oportuna a la petición; <b>c)</b> constatar la veracidad de la
                                    información; <b>d)</b> gestionar los trámites a que haya lugar; <b>e)</b> ofrecer la
                                    atención y
                                    ayuda requerida por el peticionario; y <b>f)</b> verificar el grado de conformidad
                                    frente a
                                    las posibles soluciones, medidas de mejoramiento o novedades de servicios adoptadas
                                    frente a su solicitud.
                                    Así mismo reconozco que el tratamiento de mis datos personales se realizará conforme
                                    a la Política de tratamiento de la información personal de Holding MAX y nuestros
                                    términos de uso, disponibles en <a
                                        href="https://datamax.co/public/files/tratamiento.pdf">https://datamax.co/public/files/tratamiento.pdf</a>
                                    y
                                    <a
                                        href="https://datamax.co/public/files/terminos.pdf">https://datamax.co/public/files/terminos.pdf</a>.
                                </p>
                            </div>
                        </div>

                        <div class="container-fluid mb-2" id="mail_aut">
                            <p class="text-justify" for="flag_mail">Certifico que el correo electrónico
                                ingresado en mis datos personales se encuentra vigente, de igual manera autorizo a
                                la plataforma de gestión DATAMAX, para el envío de la respuesta a mi solicitud por
                                este medio.</p>
                        </div>
                    </div>
                </div>
                <div
                    class="container-fluid mt-4 mb-4 col-lg-4 mx-auto d-flex justify-content-center align-items-center">
                    <button id="btn_close_terms" class="con-btn">Ocultar</button>
                </div>
            </div>
        </div>
    </div>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130760341640ba2b178a3a4_67168970', 'modals');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1225428397640ba2b178e503_53215222', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_1708573256640ba2b1769cd7_18869095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_1708573256640ba2b1769cd7_18869095',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_2081890554640ba2b176cee1_69891257 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2081890554640ba2b176cee1_69891257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_2079132717640ba2b1783576_11236723 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_2079132717640ba2b1783576_11236723',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_130760341640ba2b178a3a4_67168970 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_130760341640ba2b178a3a4_67168970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_1225428397640ba2b178e503_53215222 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1225428397640ba2b178e503_53215222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
