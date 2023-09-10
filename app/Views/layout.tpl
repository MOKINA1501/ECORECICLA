<!DOCTYPE html>
<html lang="es" class="html">

<head>
    {block name=head}{/block}
    {block name=styles}{/block}
</head>

<body>
    <header class="adm-header">
        <div class="hv-ctn-container">
            <div class="d-flex">
                <span class="material-symbols-rounded" id="open-close">menu</span>
                <img src="{$RESOURCES}img/admin/logogestor.svg" class="logo-gestor">
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
                            <a href="{$path_change_password}"
                                class="d-flex align-items-center text-decoration-none adm-item-menu">
                                <span class="material-icons icon-menu"> manage_accounts</span>
                                <p class="adm-menu-leg">Configuración de cuenta</p>
                            </a>
                        </li>
                        <li class="dropdown-item hv-pd-16 py-0 pt-0">
                            <a href="{$path_logout}"
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

                        {$find_left = [{$submodule_active|cat:" nav-link"}, {$module_active|cat:" br-menu-link"}]}
                        {$repl_left = [' nav-link active', '"br-menu-link active']}
                        {$menu_left|replace:$find_left:$repl_left}
                        {* <li>
                            <a href="#" class="hv_link_menu adm-item-menu adm-active">
                                <span class="material-icons icon-menu">home</span>
                                <p class="adm-menu-leg">Inicio</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hv_link_menu adm-item-menu">
                                <span class="material-icons icon-menu">co_present</span>
                                <p class="adm-menu-leg">Hoja de vida</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="hv_link_menu adm-item-menu">
                                <span class="material-icons icon-menu">folder_copy</span>
                                <p class="adm-menu-leg">Soportes</p>
                            </a>
                        </li> *}
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
                            <a href="{$path_logout}" class="hv_link_menu adm-item-menu">
                                <span class="material-icons icon-menu">logout</span>
                                <p class="adm-menu-leg">Cerrar sesión</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        {block name=body}{/block}
    </main>

    {* <footer class="adm-footer">
        <div class="adm-foot-inf">
            <span>Este es un producto creado por</span>
            <figure>
                <img src="{$RESOURCES}img/admin/Grupo 658.svg">
            </figure>
        </div>
    </footer> *}

    {block name=modals}{/block}

    <script type="text/javascript" src="{$RESOURCES}lib/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-form/jquery.form.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/additional-methods.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/localization/messages_es.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/paginationjs/pagination.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/fontawesome/js/all.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/slick/slick.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/iziToast/js/iziToast.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/select2/js/select2.full.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/moment/moment.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/moment/moment-locales.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/switchbutton/js/switchButton.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/malihu-scrollbar/js/jquery.mCustomScrollbar.js"></script>
    <script type="text/javascript" src="{$RESOURCES}lib/cropper/cropper.min.js"></script>
    <script type="text/javascript" src="{$RESOURCES}js/admin.js"></script>
    <script type="text/javascript" src="{$RESOURCES}js/datamax.js"></script>
    <script type="text/javascript" src="{$RESOURCES}js/arrivalDocuments.js"></script>

    {block name=scripts}{/block}
</body>

</html>