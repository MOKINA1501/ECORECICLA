{extends file='../pages/head.tpl'}
{block name='styles'}

{/block}
{block name='body'}
    {block name="container"}
        <div id="main-slider" class="carousel slide position-relative main-slider" data-bs-ride="carousel">
            <div class="carousel-inner" id="carousel-slides">
                {$cont = true}
                {foreach from=$list_slides item=item}
                    <div class="carousel-item {if $cont}active{/if}" data-bs-interval="3000">
                        <img class="d-block w-100" src="{$RESOURCES}files/slides/{$item['photo']}">
                    </div>
                    {$cont = false}
                {/foreach}
            </div>
            <div class="ctn-header-inf">
                <div class="header-inf">
                    <h1 class="title-1">Estamos para</h1>
                    <h1 class="title-2">darte una mano</h1>
                    <p class="txt-inf">Somos tu plataforma amiga para ayudarte en los procesos administrativos de <span
                            class="hol-max">HOLDING MAX</span>
                    </p>
                    <a href="https://dev.datamax.co/" class="btn-lan btn-inf">Empieza ya</a>
                </div>
            </div>
        </div>
        
        <section class="uses">
            <h1>¿Para qué sirve Datamax?</h1>
            <div class="carousel-uses">
                {foreach from=$list['functionalities'] item=item}
                    <div class="ctn-uses">
                        <div class="card-uses">
                            <figure class="card-img">
                                <img src="{$RESOURCES}files/functionalities/{$item['photo']}">
                            </figure>
                            <div class="card-text">
                                <span>{$item['name']}</span>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
        </section>

        {if $exist_records['count_tutorials'] > 0}
            <section class="tutorials">
                <div class="tutorials-content">
                    <figure class="img-tut">
                        <img src="{$RESOURCES}img/landing/tutorials-image.png">
                    </figure>
                    <div class="d-flex align-items-center inf-tut">
                        <div>
                            <h1>Tutoriales</h1>
                            <h6>¿No sabes como funciona?</h6>
                            <p>No te preocupes hemos pensado en ti y hacerte más fácil utilizar nuestra plataforma, por esto
                                tienes a tu disposición varios tutoriales que explican el funcionamiento de las herramientas</p>
                            <a class="btn-lan btn-tut" href="{$path_tutorials}">Ver más tutoriales</a>
                        </div>
                    </div>
                </div>
            </section>
        {/if}

        <section class="enterprises">
            <h1>Nuestras empresas</h1>
            <div class="carousel-enterprises">
                {foreach from=$list['enterprises'] item=item}
                    <figure class="card-enterprise">
                        <a href="">
                            <img src="{$RESOURCES}files/enterprises/{$item['logo']}">
                        </a>
                    </figure>
                {/foreach}
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-content">
                <figure class="img-cont">
                    <img src="{$RESOURCES}img/landing/contact-image.png">
                </figure>
                <div class="inf-cont" class="form-lan">
                    <div class="row mb-4 d-flex align-items-center justify-content-center">
                        <div class="icon-contact">
                            <span class="material-symbols-outlined">
                                communication
                            </span>
                        </div>
                        <h1>¿En qué podemos ayudarte?</h1>
                    </div>
                    <form id="form_add_pqrs" class="form-datamax pt-4" method="post" action="{$path_add_pqrs}">
                        <input type="hidden" name="type-form" value="1">
                        <div class="hash">
                            {$csrf_field}
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-xl-6 col-esp p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                                    <label class="label label-inp" for="name">Nombre completo</label>
                                </div>
                            </div>
                            <div class="position-relative col-xl-6 p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="number" name="phone_number" id="phone_number"
                                        autocomplete="off">
                                    <label class="label label-inp" for="phone_number">Número de celular</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-12 p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                                    <label class="label label-inp" for="email">Correo electrónico</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-xl-6 col-esp p-0">
                                <div class="ctn-input" id="enterprise-select-parent">
                                    <select class="con-input sel-input" name="enterprise" id="enterprise">
                                        <option selected hidden></option>
                                        {foreach from=$list['enterprises'] item=item}
                                            <option value="{$item['id']}">{$item['name']}</option>
                                        {/foreach}
                                    </select>
                                    <label class="label label-inp lab-sel" for="enterprise">Empresa</label>
                                    <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                                </div>
                            </div>
                            <div class="position-relative col-xl-6 p-0">
                                <div class="ctn-input" id="area-select-parent">
                                    <select class="con-input sel-input" name="area" id="area" disabled>
                                        <option selected hidden></option>
                                        <option>Seleccione una empresa</option>
                                    </select>
                                    <label class="label label-inp lab-sel" for="area">Área</label>
                                    <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-12 p-0">
                                <div class="ctn-input" id="type-select-parent">
                                    <select class="con-input sel-input" name="type" id="type">
                                        <option selected hidden></option>
                                        <option class="mb-4" value="1">Petición</option>
                                        <option value="2">Queja o reclamo</option>
                                        <option value="3">Felicitaciones y agradecimientos</option>
                                    </select>
                                    <label class="label label-inp lab-sel" for="type">Tipo de solicitud</label>
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
                        <button id="btn_add_pqrs" class="btn-lan btn-form btn-disabled" disabled>Enviar</button>
                    </div>
                </div>
            </div>
        </section>
    {/block}
{/block}

{block name="modals"}

{/block}

{block name='scripts'}

{/block}