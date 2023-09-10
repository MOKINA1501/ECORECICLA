<?php
/* Smarty version 4.2.0, created on 2023-03-01 08:05:18
  from 'C:\xampp\htdocs\landing_datamax\app\Views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63ff5b9ece8c75_56834300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfdc412b65a20009d2078760d74bc0d56cc81603' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\layout.tpl',
      1 => 1677679515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63ff5b9ece8c75_56834300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="es" class="html">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41587826063ff5b9ecd0723_26477571', 'head');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123738336963ff5b9ecd2f90_47130497', 'styles');
?>

</head>

<body>
    <div class="overlay none"></div>
    <header>
        <div class="nav-header">
            <figure class="nav-img">
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 703.png">
            </figure>
            <nav id="menu">
                <span class="btn-close-menu"><i class="fa-solid fa-bars"></i></span>
                <ul class="nav-menu">
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['home']->value))) {?>active<?php }?>">Inicio</a></li>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>active<?php }?>">Tutoriales</a></li>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"
                                class="<?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>active<?php }?>">Preguntas Frecuentes</a></li>
                    <?php }?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_home']->value;?>
#contact">Escríbenos</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_technical_support']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['technical_support']->value))) {?>active<?php }?>">Soporte
                            técnico</a></li>
                    <li class="li-btn"><a href=" https://admin.datamax.co"><button class="btn-nav">Iniciar sesión<i
                                    class="fa-solid fa-user ms-2"></i></button></a></li>
                </ul>
            </nav>
            <div class="ctn-close-menu">
                <a href=" https://admin.datamax.co">
                    <div class="icon-user">
                        <i class="fa-solid fa-user"></i>
                    </div>
                </a>
                <span class="btn-open-menu"><i class="fa-solid fa-bars"></i></span>
            </div>
        </div>
    </header>

    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74348980263ff5b9ece07f2_63524647', 'body');
?>

    </main>

    <div class="support" id="btn-support">
        <img class="support-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 572.png">
        <div class="txt-support none">
            <span>¿Necesitas ayuda?</span>
        </div>
    </div>

    <form class="none" id="form_chat" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
        <input type="text" name="type-form" id="type_form_chat">
        <div class="hash">
            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

        </div>
        <input class="chat-input chat-user" type="text" name="name" id="name_chat" data-user="nombre completo">
        <input class="chat-input chat-user" type="text" name="phone_number" id="phone_number_chat" data-user="número de celular">
        <input class="chat-input chat-user" type="text" name="email" id="email_chat" data-user="correo electrónico">
        <input class="chat-input select-chat-pqr" type="text" name="enterprise" id="enterprise_chat" data-user="empresa">
        <input class="chat-user" type="text" name="name_enterprise" id="name_enterprise_chat" data-user="empresa">
        <input class="chat-input select-chat-pqr" type="text" name="area" id="area_chat" data-user="área">
        <input class="chat-user" type="text" name="name_area" id="name_area_chat" data-user="área">
        <input class="chat-input select-chat-pqr" type="text" name="type" id="type_chat" data-user="tipo de solicitud">
        <input class="chat-user" type="text" name="name_type" id="name_type_chat" data-user="tipo de solicitud">
        <textarea class="chat-input chat-user" name="message" id="message_chat" rows="4" data-user="mensaje"></textarea>
                                
        </select>
    </form>

    <section class="chat none" id="chat">
        <div class="chat-header">
            <div class="chat-inf">
                <img class="chat-img" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 572.png">
                <span>Asistente Virtual</span>
            </div>
            <div class="chat-close">
                <i id="close-chat" class="fa-solid fa-minus"></i>
            </div>
        </div>
        <div class="chat-body">

        </div>
        <div class="chat-ctn-inp">
            <input class="inp-chat" name="q-chat" id="response_user" autocomplete="off" placeholder="Escribe tu respuesta">
            <button id="btn_chat_user" class="btn-chat"><i class="fa-solid fa-paper-plane"></i></button>
        </div>
    </section>

    <footer>
        <section class="foot-1">
            <div class="f1-cont">
                <figure class="footer-img">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2904.svg">
                </figure>
                <div class="footer-li">
                    <ul>
                        <li><a href=" https://admin.datamax.co">Iniciar sesión</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['tutorials']->value))) {?>active<?php }?>">Tutoriales</a></li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_questions'] > 0) {?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
" class="<?php if ((isset($_smarty_tpl->tpl_vars['frequent_questions']->value))) {?>active<?php }?>">Preguntas Frecuentes</a></li>
                        <?php }?>
                    </ul>
                </div>
                <div class="footer-li">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_technical_support']->value;?>
">Soporte técnico</a></li>
                        <li><a>Términos y condiciones</a></li>
                        <li><a>Política de privacidad</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="foot-2">
            <div class="conect">
                <span>Este es un producto creado por</span>
                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 658.png">
            </div>
        </section>
    </footer>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_152289638263ff5b9ece51b5_93188463', 'modals');
?>


    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-ui/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/jquery.validate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/additional-methods.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/jquery-validation/localization/messages_es.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/fontawesome/js/all.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/slick/slick.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/iziToast/js/iziToast.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
lib/selectize/js/selectize.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/datamax.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
        var path_list_areas                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_list_areas']->value;?>
';
        var path_list_enterprises                                               =   '<?php echo $_smarty_tpl->tpl_vars['path_list_enterprises']->value;?>
';
    <?php echo '</script'; ?>
>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_175430005563ff5b9ece79d6_56793385', 'scripts');
?>


</body>

</html><?php }
/* {block 'head'} */
class Block_41587826063ff5b9ecd0723_26477571 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_41587826063ff5b9ecd0723_26477571',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'styles'} */
class Block_123738336963ff5b9ecd2f90_47130497 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_123738336963ff5b9ecd2f90_47130497',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'styles'} */
/* {block 'body'} */
class Block_74348980263ff5b9ece07f2_63524647 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_74348980263ff5b9ece07f2_63524647',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'modals'} */
class Block_152289638263ff5b9ece51b5_93188463 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_152289638263ff5b9ece51b5_93188463',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'modals'} */
/* {block 'scripts'} */
class Block_175430005563ff5b9ece79d6_56793385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_175430005563ff5b9ece79d6_56793385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <?php
}
}
/* {/block 'scripts'} */
}
