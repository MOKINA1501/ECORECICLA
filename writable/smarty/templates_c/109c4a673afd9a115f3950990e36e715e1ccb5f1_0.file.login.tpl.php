<?php
/* Smarty version 4.2.0, created on 2022-09-06 15:33:02
  from 'C:\xampp8\htdocs\skribo\app\Views\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6317ae7e4a9d18_64912513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '109c4a673afd9a115f3950990e36e715e1ccb5f1' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\skribo\\app\\Views\\login.tpl',
      1 => 1662496053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6317ae7e4a9d18_64912513 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
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
    <div class="d-header-home">
        <?php if ($_smarty_tpl->tpl_vars['mobile']->value) {?>
        <img src="<?php echo RESOURCES;?>
img/skribo-header-mobile.svg" class="header-home-mobile">
        <?php } else { ?>
        <img src="<?php echo RESOURCES;?>
img/skribo-header.svg" class="header-home">
        <?php }?>
    </div>
    <div class="container-home <?php if (!'mobile') {?>mCustomScrollbar<?php }?>">
        <div class="container">
            <div class="div-home text-center">
                <img src="<?php echo RESOURCES;?>
img/logo-skribo.png" class="logo-home">
            </div>
            <img src="<?php echo RESOURCES;?>
img/skribo-home.svg" class="img-home">
            <div class="div-home">
                <form id="form_home" action="<?php echo $_smarty_tpl->tpl_vars['path_login']->value;?>
" method="post">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    <div class="my-5 text-start">
                      <label class="form-label mt-3">Confirma tu número de documento*</label>
                      <input type="text" class="form-control" name="doc_number" autocomplete="off" maxlength="12">
                    </div>
                    <button type="submit" class="btn btn-light-green btn-home">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer-login">
        <h1>Este es un producto creado por <img src="<?php echo RESOURCES;?>
img/logo-conectera.png"></h1>
        <?php if (!$_smarty_tpl->tpl_vars['mobile']->value) {?>
        <img src="<?php echo RESOURCES;?>
img/skribo-footer.png" class="footer-home">
        <?php }?>
    </footer>
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
        let login_state                                                         =   '<?php echo $_smarty_tpl->tpl_vars['login_state']->value;?>
';
        let login_message                                                       =   '<?php echo $_smarty_tpl->tpl_vars['login_message']->value;?>
';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
js/login.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
