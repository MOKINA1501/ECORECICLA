{extends file='../pages/head.tpl'}
{block name='styles'}

{/block}
{block name='body'}
    {block name="container"}
        <section class="support-tec">
            <figure class="img-sup">
                <img src="{$RESOURCES}img/landing/support-image.png">
            </figure>
            <div class="support-inf">
                <h1>Soporte técnico</h1>
                <p>Escríbenos si algo dentro de la plataforma no funciona correctamente o tienes alguna sugerencia de mejora
                    para
                    nosotros.</p>
            </div>
            <div class="sup-tec-cont" class="form-lan">
                <form id="form_add_support" class="form-datamax" method="post" action="{$path_add_support}">
                    <div class="hash">
                        {$csrf_field}
                    </div>
                    <div class="row mb-4">
                        <div class="position-relative col-12 p-0">
                            <div class="ctn-input">
                                <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                                <label class="label label-inp" for="name">Nombre completo</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="position-relative col-xl-6 col-esp p-0">
                            <div class="ctn-input">
                                <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off">
                                <label class="label label-inp" for="phone_number">Número de celular</label>
                            </div>
                        </div>
                        <div class="position-relative col-xl-6 p-0">
                            <div class="ctn-input">
                                <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                                <label class="label label-inp" for="email">Correo electrónico</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="position-relative col-xl-6 col-esp p-0">
                            <div class="ctn-input" id="module-select-parent">
                                <select class="con-input sel-input" name="module" id="module">
                                    <option selected hidden></option>
                                </select>
                                <label class="label label-inp lab-sel" for="module">Módulo</label>
                                <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                            </div>
                        </div>
                        <div class="position-relative col-xl-6 p-0">
                            <div class="ctn-input" id="submodule-select-parent">
                                <select class="con-input sel-input" name="submodule" id="submodule" disabled>
                                    <option selected hidden></option>
                                </select>
                                <label class="label label-inp lab-sel" for="submodule">Submódulo</label>
                                <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="position-relative col-12 p-0">
                            <div class="ctn-input">
                                <textarea class="con-input" name="message" id="message" rows="4"></textarea>
                                <label class="label label-inp-mes" for="message">Escribe tu mensaje</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 terms">
                        <div class="position-relative p-0">
                            <div class="d-flex align-items-center">
                                <input class="con-input-esp me-2 cursor-pointer ck-form" type="checkbox" name="flag_terms"
                                    id="flag_terms">
                                <label class="label label-esp cursor-pointer" for="flag_terms">Acepto términos y
                                    condiciones</label>
                            </div>
                        </div>
                    </div>
                    <input name="flag_legacy" class="flag-terms-legacy v-hidden">
                    <input name="flag_mail" class="flag-terms-mail v-hidden">
                </form>
                <div class="row mt-2 mb-4">
                    <button id="btn_add_support" class="btn-lan btn-form btn-disabled" disabled>Enviar</button>
                    <button id="btn_code" class="btn-lan btn-form mt-2 mb-2 none">Code</button>
                </div>
            </div>
        </section>
    {/block}
{/block}



{block name="modals"}
    <div id="modal_code" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-3">
                    <div class="d-flex align-items-center mb-2 mt-2 text-center">
                        <span class="material-icons-round me-2">
                            mark_email_read
                        </span>
                        <h3 class="title">Soporte técnico enviado</h3>
                    </div>
                    <div class="container-fluid p-0">
                        <div class="mb-2">
                            <h1 id="verify_code" class="code"></h1>
                        </div>
                        <div class="mb-2">
                            <p class="message">Este es el número de tu ticket, puedes hacerle seguimiento a través de nuestro chatbot.</p>
                        </div>
                    </div>
                    <div class="container-fluid p-0 mt-1 mb-2 d-flex justify-content-end align-items-center">
                        <div class="col-3">
                            <button id="btn_close_code" class="btn-lan">Aceptar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name='scripts'}
{/block}