<?php
/* Smarty version 4.2.0, created on 2022-09-20 07:34:40
  from 'C:\xampp8\htdocs\skribo\app\Views\details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6329b36019ff03_79190962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5985d7d7b0e749888afbb5f14e1f6a1aa61c04a6' => 
    array (
      0 => 'C:\\xampp8\\htdocs\\skribo\\app\\Views\\details.tpl',
      1 => 1663677277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6329b36019ff03_79190962 (Smarty_Internal_Template $_smarty_tpl) {
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
            <div class="col-12 text-start">
                <h4 class="text-middle-gray fs-6 ps-3"><img src="<?php echo RESOURCES;?>
img/logo-skribo.png" style="max-height: 50px;width: auto;"> La empresa HOLDING MAX, te ha enviado 2 documentos para fimrar electrónicamente.</h4>
            </div>
            <div class="row pt-5">
                <div class="col col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3 form-check text-middle-gray text-start">
                                <input type="checkbox" class="form-check-input" id="select_all">
                                <label class="form-check-label">Seleccionar todos</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 card-doc">
                                    <div class="row">
                                     <!--    <div class="doc-div-check con-vert-align">
                                            <input type="checkbox" class="form-check-input align-middle mt-0" id=select_doc">
                                        </div>
                                        <div class="doc-div-num">
                                            <div class="bg-dark-green text-white text-center con-vert-align">1</div>
                                        </div> -->
                                        <div class="doc-div-num con-vert-align ps-0">
                                            <div class="text-center con-vert-align" style="float: left;">
                                                <input type="checkbox" class="form-check-input align-middle mt-0" id=select_doc">
                                            </div>
                                            <div class="bg-dark-green text-white text-center con-vert-align" style="float: left;">1</div>
                                        </div>
                                        <div class="doc-div-name" style="width: 60%">
                                            <h5 class="text-middle-gray fs-6 text-start mb-0"><i class="fa-solid fa-file-lines"></i> CONTRATO_EMPRESARIAL </h5>
                                        </div>
                                        <div class="doc-div-btn con-vert-align">
                                            <button class="btn btn-white py-0 px-4 float-end">Ver</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-5 mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="conditions">
                                <label class="form-check-label text-start">He leído y acepto la <a class="text-middle-green text-decoration-none">política de tratamiento de datos personales</a> y el <a class="text-middle-green text-decoration-none">acuerdo sobre el uso de la firma electronica</a></label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light-green float-start px-4 px-lg-5">Firmar documento</button>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn-white float-end dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    Otras opciones
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Rechazar documento</a></li>
                                    <li><a class="dropdown-item" href="#">Volver más tarde</a></li>
                                    <li><a class="dropdown-item" href="#">Preguntas frecuentes</a></li>
                                </ul>
                            </div>
                        </div>
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
