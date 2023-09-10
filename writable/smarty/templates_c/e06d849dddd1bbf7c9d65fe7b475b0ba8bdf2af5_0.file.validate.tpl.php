<?php
/* Smarty version 4.2.0, created on 2022-09-16 11:49:41
  from 'C:\xampp8\htdocs\skribo\app\Views\validate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6324a925496479_87351970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e06d849dddd1bbf7c9d65fe7b475b0ba8bdf2af5' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\skribo\\app\\Views\\validate.tpl',
      1 => 1663346965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6324a925496479_87351970 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div class="header">
        <?php if (!$_smarty_tpl->tpl_vars['mobile']->value) {?>
        <img src="<?php echo RESOURCES;?>
img/logo-skribo.png">
        <div class="d-none d-lg-inline float-end">
            <p class="text-middle-gray d-inline me-3"> Hola <?php echo $_SESSION['name'];?>
 <?php echo $_SESSION['lastname'];?>
</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
" class="bg-middle-gray rounded-circle py-1 px-2 text-white btn-logout" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Salir"><i class="fa-solid fa-power-off"></i></a>
        </div>
        <?php }?>
    </div>
    <div class="content">
        <div class="container con-vert-align h-100 text-center">
            <div class="div-validate">
                <div class="bg-dark-green  text-center p-3">
                    <img src="<?php echo RESOURCES;?>
img/code-skribo.svg">
                </div>
                <div class="p-3">
                    <h5 class="text-center text-dark-gray mt-3">Código de seguridad</h5>
                    <p class="text-middle-gray mb-4 text-start">Hemos enviado un código de 4 dígitos a tu número de celular terminado en </p>
                    <form action="<?php echo $_smarty_tpl->tpl_vars['path_validateCode']->value;?>
" method="post" id="formValidate">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        <div class="row py-3">
                            <div class="col">
                                <div class="row mx-lg-1 mx-xl-4">
                                    <div class="col">
                                        <input type="text" class="form-control codeitem1" onkeyup="return next_item(event,1);" autocomplete="off" name="codeitem[0]" maxlength="1" autofocus="true" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control codeitem2" onkeyup="return next_item(event,2);" autocomplete="off" name="codeitem[1]" maxlength="1" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control codeitem3" onkeyup="return next_item(event,3);" autocomplete="off" name="codeitem[2]" maxlength="1" required>
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control codeitem4" onkeyup="return next_item(event,4);"  autocomplete="off" name="codeitem[3]" maxlength="1" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-center text-middle-gray mt-3 <?php if ($_smarty_tpl->tpl_vars['barvalue']->value > 0) {?>invisible<?php }?>">¿No lo recibiste? <span class="text-dark-green cursor-pointer sendCode">enviar un nuevo código.</span></p>
                        <div class="row div-progress">
                            <div class="col">
                                <p class="text-middle-gray text-end mb-0">0<span class="min-val">0</span>:<span class="sec-val">00</span></p>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-light-green" role="progressbar" aria-valuenow="<?php echo $_smarty_tpl->tpl_vars['barvalue']->value;?>
" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col pb-4">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
" type="button" class="btn btn-white float-start px-4 px-lg-5">Volver</a>
                                <button type="submit" class="btn btn-light-green float-end px-4 px-lg-5">Validar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <h1>Este es un producto creado por <img src="<?php echo RESOURCES;?>
img/logo-conectera.png"></h1>
    </footer>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/popperjs/popper.min.js"><?php echo '</script'; ?>
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
lib/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
lib/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
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
        let validate_state                                                      =   '<?php echo $_smarty_tpl->tpl_vars['validate_state']->value;?>
';
        let validate_message                                                    =   '<?php echo $_smarty_tpl->tpl_vars['validate_message']->value;?>
';
        let path_sendCode                                                       =   '<?php echo $_smarty_tpl->tpl_vars['path_sendCode']->value;?>
';
        let load_progress;
        let progressbar                                                         =   '<?php echo $_smarty_tpl->tpl_vars['barvalue']->value;?>
';
        let b_item;
        let b_key;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo RESOURCES;?>
js/validate.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
