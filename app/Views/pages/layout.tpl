<!DOCTYPE html>
<html lang="es" class="html">

<head>
    {block name=head}{/block}
    {block name=styles}{/block}
</head>

<body>
    <div id="overlay" class="overlay none"></div>
    <header class="main-header" id="navbar_header">
        <div class="nav-header">
            <figure class="nav-img">
                <div class="ctn-close-menu">
                    <span class="btn-open-menu"><span class="material-icons-outlined">menu</span></span>
                </div>
                <img src="{$RESOURCES}img/landing/logo-head.svg">
            </figure>
            <nav id="menu">
                <span class="btn-close-menu"><span class="material-icons-outlined none">menu</span>Datamax</span>
                <ul class="nav-menu">
                    <li id="home" class="{if isset($home)}active{/if}">
                        <a href="{$path_home}" class="item-menu">
                            <span class="ic-mn material-icons-round">home</span>Inicio
                        </a>
                    </li>
                    {if $exist_records['count_tutorials'] > 0}
                        <li class="{if isset($tutorials)}active{/if}">
                            <a href="{$path_tutorials}" class="item-menu">
                                <span class="ic-mn material-icons-round">subscriptions</span>Tutoriales
                            </a>
                        </li>
                    {/if}
                    {if $exist_records['count_questions'] > 0}
                        <li class="{if isset($frequent_questions)}active{/if}">
                            <a href="{$path_frequent_questions}" class="item-menu">
                                <span class="ic-mn material-icons-round">help</span>Preguntas Frecuentes
                            </a>
                        </li>
                    {/if}
                    <li id="con_link">
                        <a href="{$path_home}#contact" class="item-menu">
                            <span class="ic-mn material-icons-round">support_agent</span>Escríbenos
                        </a>
                    </li>
                    <li class="{if isset($technical_support)}active{/if}">
                        <a href="{$path_technical_support}"class="item-menu">
                            <span class="ic-mn material-icons-round">build</span>Soporte técnico
                        </a>
                    </li>
                    <li class="li-btn"><a href="{$path_admin}"><button class="btn-nav"><span class="material-icons-outlined">login</span>Iniciar sesión</button></a></li>
                </ul>
            </nav>
            <div class="ctn-btn-nav">
                <a href="{$path_admin}"><button class="btn-nav"><span class="material-icons-outlined">login</span>Iniciar sesión</button></a>
            </div>
        </div>
    </header>

    <main>
        {block name=body}{/block}
    </main>

    <div class="support" id="btn-support">
        <span class="material-icons-round icon-sup">headset_mic</span>
        <div class="txt-support none">
            <span>¿Necesitas ayuda?</span>
        </div>
    </div>
    <div class="none" id="ctn_form_chat">
            
        <p>PQR</p>
            
        <form id="pqrs_chat_form" class="form_chat" method="post" action="{$path_add_pqrs}">
            <div class="hash">
                {$csrf_field}
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

        <form id="support_chat_form" class="form_chat" method="post" action="{$path_add_support}">
            <div class="hash">
                {$csrf_field}
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
                <img src="{$RESOURCES}img/landing/chat-loader.svg">
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
                    <img src="{$RESOURCES}img/landing/logo-footer.svg">
                </figure>
                <div class="footer-li">
                    <ul>
                        <li><a href=" https://admin.datamax.co">Iniciar sesión</a></li>
                        {if $exist_records['count_tutorials'] > 0}
                            <li><a href="{$path_tutorials}">Tutoriales</a></li>
                        {/if}
                        {if $exist_records['count_questions'] > 0}
                            <li><a href="{$path_frequent_questions}">Preguntas Frecuentes</a></li>
                        {/if}
                        <li><a href="{$path_technical_support}">Soporte técnico</a></li>
                        <li><a>Términos y condiciones</a></li>
                        <li><a>Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="foot-2">
            <div class="conect">
                <span>Este es un producto creado por</span>
                <img src="{$RESOURCES}img/landing/con-footer.svg">
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

    {block name=modals}

    {/block}

    <script type="text/javascript" src="{$RESOURCES}lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-form/jquery.form.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/additional-methods.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/localization/messages_es.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/paginationjs/pagination.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/iziToast/js/iziToast.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/select2/js/select2.full.js"></script>
    <script type="text/javascript" src="{$RESOURCES}js/datamax.js"></script>


    <script type="text/javascript">
        var path_list_areas                                                     =   '{$path_list_areas}';
        var path_list_enterprises                                               =   '{$path_list_enterprises}';
        var path_verify_support                                                 =   '{$path_verify_support}';
        var path_modules                                                        =   'https://dev.datamax.co/getmodules';
        var resources                                                           =   '{$RESOURCES}';
        var path_list_slides                                                  =   '{$path_list_slides}';
    </script>

    {block name=scripts}

    {/block}

</body>

</html>