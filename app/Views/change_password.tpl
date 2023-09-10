{extends file='../admin/head.tpl'}
{block name='styles'}

{/block}
{block name='body'}
    {block name="container"}
        <div class="main-password">
            <div class="elements"></div>
            <div class="element-pass">
                <div class="adm-cont-icon"></div>
                <div class="change-password">
                    <h5 class="mt-4 mb-3">Cambia tu contraseña</h5>
                    <p class="mt-4 mb-5 text-changes">Por favor crea una contraseña segura con letras mayúsculas y minúsculas, números y caracteres especiales.</p>
                    <form class="mt-2" method="post" action="{$path_pass_change}" id="form_change_pass">
                     <span id="countdown" hidden></span>
                        <div class="hash">
                            {$csrf_field}
                        </div> 
                        <div class="mb-4">
                            <input type="text" id="pass-user">
                            <p class="text-password mb-4">Contraseña actual</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="password" id="password" autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility">visibility_off</span>
                                <label class="label label-inp" for="password">Tu contraseña</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="text-password mb-4">Contraseña nueva</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="newpassword" id="new-password"
                                    autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility2">visibility_off</span>
                                <label class="label label-inp" for="new-password">Nueva contraseña</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <p class="text-password mb-4">Confirmar contraseña</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="conpassword" id="con-password"
                                    autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility3">visibility_off</span>
                                <label class="label label-inp" for="conpassword">Confirmar contraseña</label>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <div class="col-md-12" id="content-chpass">
                            <button id="btn_change_password" class="btn-adm">Cambiar contraseña</button>
                        </div>
                    </div>
                </div>
            </div>
    {/block}
{/block}

{block name="modals"}
    <div id="change_password" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Cambiar contraseña</h5>
                        </div>

                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas cambiar tu contraseña?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_change" class="btn-close">Cancelar</button>
                    <button id="btn_change" class="btn-add">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
{/block}

{block name='scripts'}
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script type="text/javascript">
    
        var  $path_pass_change                                                  =   '{$path_pass_change}';
        var  $path_validate_password                                            =   '{$path_validate_password}';
        var  $path_logout                                                       =   '{$path_logout}';        
    </script>   

{/block}