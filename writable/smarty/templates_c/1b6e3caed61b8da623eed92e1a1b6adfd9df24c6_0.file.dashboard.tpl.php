<?php
/* Smarty version 4.2.0, created on 2022-09-07 09:44:29
  from 'C:\xampp8\htdocs\skribo\app\Views\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6318ae4dbc3125_06800107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b6e3caed61b8da623eed92e1a1b6adfd9df24c6' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\skribo\\app\\Views\\dashboard.tpl',
      1 => 1662561362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6318ae4dbc3125_06800107 (Smarty_Internal_Template $_smarty_tpl) {
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
css/own.css">
</head>
<body>
    <div class="menu mCustomScrollbar">
        <img src="<?php echo RESOURCES;?>
img/logo-skribo.png" style="width: 70%;margin: 0 auto">
        <div class="w-100 mt-5">
            <a class="d-block text-black text-decoration-none p-3 selected-option"><i class="fa-solid fa-pen-nib"></i> Firmar</a>
            <a class="d-block text-black text-decoration-none p-3"><i class="fa-solid fa-clock-rotate-left"></i> Histórico</a>
        </div>
    </div>
    <div class="header" style="background-color: #F9F9F9">
        <?php if (!$_smarty_tpl->tpl_vars['mobile']->value) {?>
        <div class="d-none d-lg-inline float-end">
            <p class="text-middle-gray d-inline me-3"> Hola <?php echo $_SESSION['name'];?>
 <?php echo $_SESSION['lastname'];?>
</p>
            <a href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
" class="bg-middle-gray rounded-circle py-1 px-2 text-white btn-logout" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="custom-tooltip" data-bs-title="Salir"><i class="fa-solid fa-power-off"></i></a>
        </div>
        <?php }?>
    </div>
    <div class="content" style="padding-left: 290px;background-color: #F9F9F9;text-align: right;">
        <div class="container">
            <div class="row pt-5">
                <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card-folder">
                        <a class="text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['path_details']->value;?>
/1">
                            <div class="row">
                                <div class="col-3 p-0 text-center">
                                    <img src="<?php echo RESOURCES;?>
img/logo-skribo.png">
                                </div>
                                <div class="col-9 text-start">
                                    <p class="text-middle-gray fs-14">La empresa HOLDING MAX, te ha enviado 2 documentos para firmar electrónicamente.</p>
                                    <p class="text-light-green mb-0 fs-12">Tienes 2 documentos pendientes por firmar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card-folder">
                        <a class="text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['path_details']->value;?>
/2">
                            <div class="row">
                                <div class="col-3 p-0 text-center">
                                    <img src="<?php echo RESOURCES;?>
img/logo-skribo.png">
                                </div>
                                <div class="col-9 text-start">
                                    <p class="text-middle-gray fs-14">La empresa HOLDING MAX, te ha enviado 2 documentos para firmar electrónicamente.</p>
                                    <p class="text-light-green mb-0 fs-12">Tienes 2 documentos pendientes por firmar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-4">
                    <div class="card-folder">
                        <a class="text-decoration-none" href="<?php echo $_smarty_tpl->tpl_vars['path_details']->value;?>
/1">
                            <div class="row">
                                <div class="col-3 p-0 text-center">
                                    <img src="<?php echo RESOURCES;?>
img/logo-skribo.png">
                                </div>
                                <div class="col-9 text-start">
                                    <p class="text-middle-gray fs-14">La empresa HOLDING MAX, te ha enviado 2 documentos para firmar electrónicamente.</p>
                                    <p class="text-light-green mb-0 fs-12">Tienes 2 documentos pendientes por firmar</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="height: 2.5rem;;left: 0">
        <div style="margin-left: 290px;background-color: #619F64;height: 100%;text-align: right;">
            <h1 style="color: #FFFFFF; position: initial;bottom: initial;">Este es un producto creado por <img src="<?php echo RESOURCES;?>
img/logo-conectera.svg"></h1>
        </div>
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
</body>
</html>
<?php }
}
