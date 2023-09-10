<?php
/* Smarty version 4.2.0, created on 2023-03-09 06:55:42
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6409d74edee606_75751793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0532fb657232f5f359f2dee2a1590df5def46b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\login.tpl',
      1 => 1678366540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6409d74edee606_75751793 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
    <meta name="description" content="DATAMAX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/malihu-scrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/iziToast/css/iziToast.min.css">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.typekit.net/axs4esb.css">
    <title>.: DATAMAX :.</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logo.png">
  </head>
  <body>
  <div class="row">
      <div class="col-lg-8  img-login"></div>

      <div class="col-lg-4 box-card-loging">
        <div class="login">
          <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logo-login.png" class="dtm-login pd-30">
          <form action="<?php echo $_smarty_tpl->tpl_vars['path_login']->value;?>
" id="form_login_admin" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            <div class="mb-3 pd-30">
              <input type="email" class="form-control" name="email" id="email-login" placeholder="Correo electrónico">
              <input type="password" class="form-control" name="password" id="password-login" placeholder="Contraseña">
              <span class="fa fa-fw fa-eye password-icon show-password"></span>
              <a class="password-new" href="#">Olvidaste tu contraseña</a>
              <button type="submit" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-user">Ingresar</button>
              <div class="mg-b-2 foot-login "><p class="mg-0">Este es un producto creado por <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/Grupo 658.png" alt="conectera" class="mg-l-4"></p></div>
            </div> 
          </form>
        </div>
      </div> 

      <div class="col-lg-4 passwordout-logging" style="display:none;">
        <div class="passwordout" style="display:none;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logo-login.png" class="dtm-login pd-30">
          <p class="text-password">Recupera tu contraseña fácil y rápido.</p>
          <form action="<?php echo $_smarty_tpl->tpl_vars['path_password_forgotten']->value;?>
" id="form_password_admin" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            <div class="mb-3 pd-30">
              <input type="email" class="form-control" name="email-password" id="email-password" placeholder="Correo electrónico">
              <button type="button" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium" id="btn-next">Siguiente</button>
              <button type="button" class="btn-submit-back  wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-back">Volver</button>
              <div class="mg-b-2 foot-login "><p class="mg-0">Este es un producto creado por <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/conectera.png" alt="conectera" class="mg-l-4"></p></div>
              </div>
          </form>
          </div>
      </div>
    
    <div class="col-lg-4 code-verification-logging" style="display:none;">
      <div class="code-verification" style="display:none;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logo-login.png" class="dtm-login pd-30">
        <form action="<?php echo $_smarty_tpl->tpl_vars['path_code_valid']->value;?>
" id="form_login_code" method="post">
          <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

          <p class="text-password">Ingresa el código de 4 digitos que fue enviado a tu correo electrónico registrado.</p>
          <div class="mb-3 pd-30">
            <div class="grid-container">
              <input class="cuad_num" name="code-verification[]" maxlength="1">
              <input class="cuad_num" name="code-verification[]" maxlength="1">
              <input class="cuad_num" name="code-verification[]" maxlength="1">
              <input class="cuad_num" name="code-verification[]" maxlength="1"> 
            </div>
            <button type="button" class="code-new  tx-mont tx-medium" id="code-new">Enviar nuevamente el código</button>
            <button type="button" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-next2">Siguiente</button>
            <button type="button" class="btn-submit-back  wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-back2">Volver</button>
            <div class="mg-b-2 foot-login-2 "><p class="mg-0">Este es un producto creado por <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/conectera.png" alt="conectera" class="mg-l-4"></p></div>
          </div>
        </form>
        <form action="<?php echo $_smarty_tpl->tpl_vars['path_code_again']->value;?>
" id="form_code_again" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            <input type="email" class="form-control" name="email-password" id="email-code" hidden>
        </form>
      </div>
    </div>

    <div class="col-lg-4 new_password-logging" style="display:none;">
      <div class="new_password" style="display: none;">
        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logo-login.png" class="dtm-login pd-30">
        <p class="text-password">Por tu seguridad es necesario que generes una nueva contraseña.</p>
        <div class="mb-3">
        
          <input type="password" class="form-control" name="password-new" id="password-new" placeholder="Nueva contraseña" onkeyup="checkedValid()">
          <span class="fa fa-fw fa-eye password-icon-2 show-password-2"></span>
          <div class="grid-container_checks">
            <label type="checkbox" id="check">
              <input class="form-check-label pd-l-5 text-center" id="minlength" type="checkbox" disabled>
              <span class="text-validation">Tener como mínimo 8 dígitos.</span>
            </label>
          </div>
          <div class="grid-container_checks">
            <label type="checkbox" id="check">
              <input class="form-check-label pd-l-5 text-center " id="letterUpper" type="checkbox" disabled>
              <span class="text-validation">Contener como mínimo una letra en mayúscula.</span>
            </label>
          </div>
          <div class="grid-container_checks">
            <label type="checkbox" id="check">
              <input class="form-check-label pd-l-5 text-center " id="numbers" type="checkbox" disabled>
              <span class="text-validation">Contener como mínimo un número.</span><br>
            </label>
          </div>
           <form action="<?php echo $_smarty_tpl->tpl_vars['path_password_new']->value;?>
" id="form_password_new" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            <input type="password" class="form-control" name="password-repeat" id="password-login-2" placeholder="Confirmar contraseña">
            <span class="fa fa-fw fa-eye password-icon-2 show-password-3"></span>

            <input type="email" class="form-control" name="email-password" id="email-password-new" hidden>

          </form>

          <button type="button" class="btn-submit-login wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-next3">Siguiente</button>
          <button type="button" class="btn-submit-back  wd-170 btn-submit-form tx-16 pd-y-10 pd-x-20 tx-mont tx-medium " id="btn-back3">Volver</button>
          <div class="mg-b-2 foot-login-3 "><p class="mg-0">Este es un producto creado por <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/img/conectera.png" alt="conectera" class="mg-l-4"></p></div>
        </div>

      </div>
    </div>

  </div>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/iziToast/js/iziToast.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
      var $path_inicio                                                          =   '<?php echo $_smarty_tpl->tpl_vars['path_inicio']->value;?>
';
      var $path_password_forgotten                                              =   '<?php echo $_smarty_tpl->tpl_vars['path_password_forgotten']->value;?>
';
      var $path_code_valid                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_code_valid']->value;?>
';
      var $path_password_new                                                    =   '<?php echo $_smarty_tpl->tpl_vars['path_password_new']->value;?>
';
      var $path_code_again                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_code_again']->value;?>
';

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
/js/admin.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
