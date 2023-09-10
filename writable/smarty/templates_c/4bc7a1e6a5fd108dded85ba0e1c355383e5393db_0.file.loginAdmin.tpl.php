<?php
/* Smarty version 4.2.0, created on 2022-10-14 09:49:50
  from 'C:\xampp\htdocs\skribo\app\Views\loginAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6349770e531264_79647977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bc7a1e6a5fd108dded85ba0e1c355383e5393db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\skribo\\app\\Views\\loginAdmin.tpl',
      1 => 1665758987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6349770e531264_79647977 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
    <title>Skribo</title>
    <meta name="description" content="Skribo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES;?>
lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES;?>
lib/malihu-scrollbar/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES;?>
lib/fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES;?>
lib/iziToast/css/iziToast.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo RESOURCES;?>
css/own.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <h1 class="mt-4">Login</h1>
          <form action="<?php echo $_smarty_tpl->tpl_vars['path_login']->value;?>
" id="form_login_admin" method="post">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

            <div class="mb-3">
              <label for="user" class="form-label">Correo</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>  
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <input type="submit" class="btn btn-primary">
          </form>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/iziToast/js/iziToast.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
js/skribo.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      var $path_inicio                                                          =   '<?php echo $_smarty_tpl->tpl_vars['path_inicio']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
/js/loginAdmin.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
