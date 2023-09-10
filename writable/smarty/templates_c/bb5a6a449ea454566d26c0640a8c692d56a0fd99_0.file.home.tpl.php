<?php
/* Smarty version 4.2.0, created on 2022-10-14 09:31:35
  from 'C:\xampp\htdocs\skribo\app\Views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634972c7a1aca8_70447870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb5a6a449ea454566d26c0640a8c692d56a0fd99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\skribo\\app\\Views\\home.tpl',
      1 => 1665756601,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634972c7a1aca8_70447870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('session', session());?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <span class="nav-link active" aria-current="page"><?php echo $_smarty_tpl->tpl_vars['session']->value->get('data.name');?>
</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
">Salir</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1>estas en el inicio</h1>

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
</body>

</html><?php }
}
