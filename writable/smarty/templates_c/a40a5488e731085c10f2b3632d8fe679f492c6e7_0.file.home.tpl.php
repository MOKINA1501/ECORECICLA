<?php
/* Smarty version 4.2.0, created on 2023-04-05 11:55:37
  from 'C:\xampp\htdocs\datamax\app\Views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642da8090be9c0_46079330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40a5488e731085c10f2b3632d8fe679f492c6e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\pages\\home.tpl',
      1 => 1680712562,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642da8090be9c0_46079330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1367797216642da808e7cb79_07199256', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1210606186642da808e7d9e6_53465009', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_908916674642da8090bdfe0_08092079', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_245130840642da8090be435_04971597', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_1367797216642da808e7cb79_07199256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1367797216642da808e7cb79_07199256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_694298819642da808ec53f1_55727464 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="main-slider" class="carousel slide position-relative main-slider" data-bs-ride="carousel">
            <div class="carousel-inner" id="carousel-slides">
                <?php $_smarty_tpl->_assignInScope('cont', true);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list_slides']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="carousel-item <?php if ($_smarty_tpl->tpl_vars['cont']->value) {?>active<?php }?>" data-bs-interval="3000">
                        <img class="d-block w-100" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/slides/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
">
                    </div>
                    <?php $_smarty_tpl->_assignInScope('cont', false);?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="ctn-header-inf">
                <div class="header-inf">
                    <h1 class="title-1">Estamos para</h1>
                    <h1 class="title-2">darte una mano</h1>
                    <p class="txt-inf">Somos tu plataforma amiga para ayudarte en los procesos administrativos de <span
                            class="hol-max">HOLDING MAX</span>
                    </p>
                    <a href="https://dev.datamax.co/" class="btn-lan btn-inf">Empieza ya</a>
                </div>
            </div>
        </div>
        
        <section class="uses">
            <h1>¿Para qué sirve Datamax?</h1>
            <div class="carousel-uses">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['functionalities'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="ctn-uses">
                        <div class="card-uses">
                            <figure class="card-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/functionalities/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
">
                            </figure>
                            <div class="card-text">
                                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</span>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>

        <?php if ($_smarty_tpl->tpl_vars['exist_records']->value['count_tutorials'] > 0) {?>
            <section class="tutorials">
                <div class="tutorials-content">
                    <figure class="img-tut">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/tutorials-image.png">
                    </figure>
                    <div class="d-flex align-items-center inf-tut">
                        <div>
                            <h1>Tutoriales</h1>
                            <h6>¿No sabes como funciona?</h6>
                            <p>No te preocupes hemos pensado en ti y hacerte más fácil utilizar nuestra plataforma, por esto
                                tienes a tu disposición varios tutoriales que explican el funcionamiento de las herramientas</p>
                            <a class="btn-lan btn-tut" href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
">Ver más tutoriales</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php }?>

        <section class="enterprises">
            <h1>Nuestras empresas</h1>
            <div class="carousel-enterprises">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['enterprises'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <figure class="card-enterprise">
                        <a href="">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/enterprises/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
">
                        </a>
                    </figure>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-content">
                <figure class="img-cont">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/contact-image.png">
                </figure>
                <div class="inf-cont" class="form-lan">
                    <div class="row mb-4 d-flex align-items-center justify-content-center">
                        <div class="icon-contact">
                            <span class="material-symbols-outlined">
                                communication
                            </span>
                        </div>
                        <h1>¿En qué podemos ayudarte?</h1>
                    </div>
                    <form id="form_add_pqrs" class="form-datamax pt-4" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
                        <input type="hidden" name="type-form" value="1">
                        <div class="hash">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-xl-6 col-esp p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                                    <label class="label label-inp" for="name">Nombre completo</label>
                                </div>
                            </div>
                            <div class="position-relative col-xl-6 p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="number" name="phone_number" id="phone_number"
                                        autocomplete="off">
                                    <label class="label label-inp" for="phone_number">Número de celular</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-12 p-0">
                                <div class="ctn-input">
                                    <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                                    <label class="label label-inp" for="email">Correo electrónico</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-xl-6 col-esp p-0">
                                <div class="ctn-input" id="enterprise-select-parent">
                                    <select class="con-input sel-input" name="enterprise" id="enterprise">
                                        <option selected hidden></option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['enterprises'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                    <label class="label label-inp lab-sel" for="enterprise">Empresa</label>
                                    <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                                </div>
                            </div>
                            <div class="position-relative col-xl-6 p-0">
                                <div class="ctn-input" id="area-select-parent">
                                    <select class="con-input sel-input" name="area" id="area" disabled>
                                        <option selected hidden></option>
                                        <option>Seleccione una empresa</option>
                                    </select>
                                    <label class="label label-inp lab-sel" for="area">Área</label>
                                    <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="position-relative col-12 p-0">
                                <div class="ctn-input" id="type-select-parent">
                                    <select class="con-input sel-input" name="type" id="type">
                                        <option selected hidden></option>
                                        <option class="mb-4" value="1">Petición</option>
                                        <option value="2">Queja o reclamo</option>
                                        <option value="3">Felicitaciones y agradecimientos</option>
                                    </select>
                                    <label class="label label-inp lab-sel" for="type">Tipo de solicitud</label>
                                    <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="position-relative col-12 p-0">
                                <div class="ctn-input">
                                    <textarea class="con-input" name="message" id="message" rows="4"></textarea>
                                    <label class="label label-inp-mes" for="message">Escribe tu mensaje</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-4 terms">
                            <div class="position-relative p-0">
                                <div class="d-flex align-items-center">
                                    <input class="con-input-esp me-2 cursor-pointer ck-form" type="checkbox" name="flag_terms"
                                        id="flag_terms">
                                    <label class="label label-esp cursor-pointer" for="flag_terms">Acepto términos y
                                        condiciones</label>
                                </div>
                            </div>
                        </div>
                        <input name="flag_legacy" class="flag-terms-legacy v-hidden">
                        <input name="flag_mail" class="flag-terms-mail v-hidden">
                    </form>
                    <div class="row mt-2 mb-4">
                        <button id="btn_add_pqrs" class="btn-lan btn-form btn-disabled" disabled>Enviar</button>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1210606186642da808e7d9e6_53465009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1210606186642da808e7d9e6_53465009',
  ),
  'container' => 
  array (
    0 => 'Block_694298819642da808ec53f1_55727464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_694298819642da808ec53f1_55727464', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_908916674642da8090bdfe0_08092079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_908916674642da8090bdfe0_08092079',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_245130840642da8090be435_04971597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_245130840642da8090be435_04971597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
