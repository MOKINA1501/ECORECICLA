<!doctype html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="DATAMAX">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{$RESOURCES}lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{$RESOURCES}lib/malihu-scrollbar/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" type="text/css" href="{$RESOURCES}lib/fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="{$RESOURCES}lib/iziToast/css/iziToast.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,1,0" />
  <link rel="preconnect" href="https://fonts.googleapis.com"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{$RESOURCES}css/login.css" rel="stylesheet">
  <link rel="stylesheet" href="{$RESOURCES}css/datamax.css" rel="stylesheet">

  
  <link rel="stylesheet" href="https://use.typekit.net/axs4esb.css">
  <title>.: DATAMAX :.</title>
  <link rel="shortcut icon" type="image/png" href="{$RESOURCES}img/logo.png">
</head>

<body class="body-login">
  <div class="row-login">
    <div class="col-lg-7" id="md-bg"></div>
    <div class="col-lg-5 box-card-loging" id="md-content">
      <div class="login">
        <div class="titl-log">
          <p class="txt-login">Bienvenido a tu gestor de contenido</p>
          <img src="{$RESOURCES}img/admin/logo-login.png" class="dtm-login">
        </div>
        <div class="content-log">
            <form action="{$path_login}" id="form_login_admin" method="post">
              {$csrf_field}
              <div class="ctn-input">
                <input class="con-input" type="email" name="email" autocomplete="off" value="{if isset($email)}{$email}{/if}">
                <label class="label label-inp {if isset($email)} label-active label-active-bl{/if}" for="email">Correo electrónico</label>
              </div>
              <div class="ctn-input" id="pass">
                <input class="con-input" id="pass1" type="password" name="password" autocomplete="off" value="">
                <label class="label label-inp" for="password">Contraseña</label>
                <span class="material-icons-round show-password" id="shohid">visibility_off</span>
              </div>
                <input class="chk-input" type="checkbox" autocomplete="off" name="remember" {if isset($remember)} checked {/if}>
              <span class="txt-rmb">Recordar mis datos </span>
              <button type="submit" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-user">Ingresar</button>
              <a class="password-new" href="#">¿Olvidaste tu contraseña?</a>
            </form>
        </div>
        <div class="content-footer">
            <p class="mg-0">Este es un producto creado por <img src="{$RESOURCES}/img/admin/Grupo 658.svg" alt="conectera"
            class="mg-l-4"></p>
        </div>
      </div>
    </div>

    <div class="col-lg-5 passwordout-logging" style="display:none;">
      <div class="passwordout" style="display:none;">
        <div class="back-log">
          <span class="material-symbols-rounded btn-back" id="btn-back">arrow_back</span>
        </div>
        <div class="cont-log">
          <p class="txt-login">¿Olvidaste tu contraseña?</p>
          <p class="info-log">Ingresa tu correo electrónico y te enviaremos un código de recuperación para que puedas restablecer tu contraseña.</p>
          <form action="{$path_password_forgotten}" id="form_password_admin" method="post">
            {$csrf_field}
            <div class="ctn-input ctn-lgr">
              <input class="con-input" type="email" name="emailpassword" autocomplete="off" id="email-rec">
              <label class="label label-inp" for="email">Correo electrónico</label>
            </div>
          </form>
          <button type="button"class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium" id="btn-next">Continuar</button>
        </div>
        <div class="content-footer" id="foot-2">
          <p class="mg-0">Este es un producto creado por <img src="{$RESOURCES}/img/admin/Grupo 658.svg" alt="conectera" class="mg-l-4"></p>
        </div>
      </div>
    </div>

    <div class="col-lg-5 code-verification-logging" style="display:none;">
      <div class="code-verification" style="display:none;">
        <div class="back-log">
          <span class="material-symbols-rounded btn-back" id="btn-back2">arrow_back</span>
        </div>
        <div class="cont-log">
          <p class="txt-login" id="txt-incode">Ingresa tu código</p>
          <p class="info-log" id="txt-infcod">Para restablecer tu contraseña, ingresa el código que hemos enviado a</p>
          <span id="countdown" hidden></span>
          <form action="{$path_code_again}" id="form_code_again" method="post">
            <div class="hash1">
              {$csrf_field}
            </div>
            <input type="email" class="email-rmb" name="email-password" readonly id="rmb-email">
          </form>
          <form action="{$path_resset_code}" id="form_code_resset" method="post">
            <div class="hash2">
              {$csrf_field}
            </div>
            <input type="email" class="email-rmb" name="email-password" id="email-reset" hidden>
          </form>

          <span class="material-icons-round show-password" id="edit-email">edit</span>
          <form action="{$path_code_valid}" id="form_login_code" method="post">
            <div class="hash3">
              {$csrf_field}
            </div>
            <div class="grid-container">
              <input class="cuad_num" name="code-verification[]" maxlength="1"  placeholder="0">
              <input class="cuad_num" name="code-verification[]" maxlength="1"  placeholder="0">
              <input class="cuad_num" name="code-verification[]" maxlength="1"  placeholder="0">
              <input class="cuad_num" name="code-verification[]" maxlength="1"  placeholder="0">
            </div>
          </form>
          <span id="code-failed"></span>
          <button type="button" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-next2">Continuar</button>
        </div>
        <div class="content-footer-2">
          <p class="code-text">¿No te ha llegado el código?</p>
          <p class="reen-code" id="code-new">Reenviar código</p>
          <p class="mg-0" id="p-foot3">Este es un producto creado por <img src="{$RESOURCES}/img/admin/Grupo 658.svg" alt="conectera" class="mg-l-4"></p>
        </div>
      </div>
    </div>

    <div class="col-lg-5 new_password-logging" style="display:none;">
      <div class="new_password" style="display: none;">
        <div class="back-log"></div>
        <div class="cont-log" id="cnt-log">
          <p class="txt-login">Elige tu nueva contraseña</p>
          <p class="info-log">Por favor crea una contraseña segura con letras mayúsculas y minúsculas, números y caracteres especiales.</p>
          <form action="{$path_password_new}" id="form_password_new" method="post">
            {$csrf_field}
            <div class="ctn-input" id="pass">
              <input class="con-input" id="passnew" type="password" name="password-new" autocomplete="off">
              <label class="label label-inp" for="password-new">Nueva contraseña</label>
              <span class="material-icons-round show-password new-password" id="passnews">visibility_off</span>
            </div>
            <div class="ctn-input" id="pass">
                <input class="con-input" id="pass-repeat" type="password" name="passwordrepeat" autocomplete="off">
                <label class="label label-inp" for="password-repeat">Confirmar contraseña</label>
                <span class="material-icons-round show-password repeat-pass" id="passrepeat">visibility_off</span>
            </div>
            <input type="email" class="email-rmb" name="email-password" hidden id="#email-password-new">
          </form>
          <button type="button" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-next3">Reestablecer contraseña</button>
          <p class="back-login" id="btn-back3">Volver a Inicio de sesión</p>
        </div>
      </div>
    </div>

  </div>

  <div id="change_pass" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Cambio exitoso</h5>
                        </div>

                        <div class="container-fluid">
                            <p class="modal-msg">Has cambiado tu contraseña de manera exitosa</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btnchange" class="btn-add">Ok</button>
                </div>
            </div>
        </div>
    </div>

  <script type="text/javascript" src="{$RESOURCES}lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="{$RESOURCES}lib/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{$RESOURCES}lib/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script type="text/javascript" src="{$RESOURCES}lib/jquery-validation/jquery.validate.js"></script>
  <script type="text/javascript" src="{$RESOURCES}lib/jquery-form/jquery.form.min.js"></script>
  <script type="text/javascript" src="{$RESOURCES}lib/iziToast/js/iziToast.min.js"></script>

  <script type="text/javascript">
    var $path_inicio                                                            =   '{$path_inicio}';
    var $path_password_forgotten                                                =   '{$path_password_forgotten}';
    var $path_code_valid                                                        =   '{$path_code_valid}';
    var $path_password_new                                                      =   '{$path_password_new}';
    var $path_code_again                                                        =   '{$path_code_again}';
    var $path_resset_code                                                       =   '{$path_resset_code}';
  </script>
  <script type="text/javascript" src="{$RESOURCES}/js/login.js"></script>

</body>

</html>