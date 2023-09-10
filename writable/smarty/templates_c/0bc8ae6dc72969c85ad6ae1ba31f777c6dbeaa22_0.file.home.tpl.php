<?php
/* Smarty version 4.2.0, created on 2023-03-09 15:23:10
  from 'C:\xampp\htdocs\landing_datamax\app\Views\pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640a4e3eeb40e6_85202438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc8ae6dc72969c85ad6ae1ba31f777c6dbeaa22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\pages\\home.tpl',
      1 => 1678396987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640a4e3eeb40e6_85202438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1026746717640a4e3ee9cc47_37645538', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1051375143640a4e3ee9e416_69638250', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1072254653640a4e3eeb3197_71031184', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_458364723640a4e3eeb3922_75393525', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_1026746717640a4e3ee9cc47_37645538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1026746717640a4e3ee9cc47_37645538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1385501382640a4e3eea2013_73621229 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="header">
            <div class="overlay-header"></div>
            <div class="header-inf">
                <h1 class="title-1">Estamos para</h1>
                <h1 class="title-2">darte una mano</h1>
                <p class="txt-inf">Somos tu plataforma amiga para ayudarte en los procesos administrativos de <span class="hol-max">HOLDING MAX</span>
                </p>
                <button class="btn-inf"><a>Empieza ya</a></button>
            </div>
        </section>
        <section class="uses">
            <h1>¿Para qué sirve Datamax?</h1>
            <div class="carousel-uses">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value['functionalities'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <div class="card-uses">
                        <div>
                            <figure class="card-img">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['item']->value['photo'];?>
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
                <h1>Tutoriales</h1>
                <div class="tutorials-content">
                    <figure class="img-tut">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/close-up-portrait-of-an-attractive-young-woman-isolated.png">
                    </figure>
                    <div class="d-flex align-items-center inf-tut">
                        <div>
                            <h6>¿No sabes como funciona?</h6>
                            <p>No te preocupes hemos pensado en ti y hacerte más fácil utilizar nuestra plataforma, por esto
                                tienes a tu disposición varios tutoriales que explican el funcionamiento de las herramientas</p>
                                <button class="btn-tut"><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
">Ver más tutoriales</a></button>
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
img/<?php echo $_smarty_tpl->tpl_vars['item']->value['logo'];?>
">
                        </a>
                    </figure>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>

        <section class="contact" id="contact">
            <h1>¿En qué podemos ayudarte?</h1>
            <div class="contact-content">
                <figure class="img-cont">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Enmascarar grupo 28.png">
                </figure>
                <div class="inf-cont">
                    <form id="form_add_pqrs" class="form-datamax" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
                        <input type="hidden" name="type-form" value="1">
                        <div class="hash">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-6 col-esp ctn-input">
                                <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                                <label class="label label-inp" for="name">Nombre completo</label>
                            </div>
                            <div class="col-xl-6 ctn-input">
                                <input class="con-input" type="number" name="phone_number" id="phone_number" autocomplete="off">
                                <label class="label label-inp" for="phone_number">Número de celular</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="email" name="email" id="email" autocomplete="off">
                                <label class="label label-inp" for="email">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-xl-6 col-esp ctn-input" id="enterprise-select-parent">
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
                            <div class="col-xl-6 ctn-input" id="area-select-parent">
                                <select class="con-input sel-input" name="area" id="area">
                                    <option selected hidden></option>
                                    <option>Seleccione una empresa</option>
                                </select>
                                <label class="label label-inp lab-sel" for="area">Área</label>
                                <div class="label label-inp-sel lab-icon"><i class="fa-solid fa-chevron-down"></i></div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 ctn-input" id="type-select-parent">
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
                        <div class="row mb-2">
                            <div class="col-12 ctn-input">
                                <textarea class="con-input" name="message" id="message" rows="4"></textarea>
                                <label class="label label-inp-mes" for="message">Escribe tu mensaje</label>
                            </div>
                        </div>
                        <div class="container-fluid p-0 mb-2 mb-2 terms">
                            <div class="d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <input class="con-input con-input-esp me-1 cursor-pointer ck-form" type="checkbox" name="flag_terms" id="flag_terms">
                                </div>
                                <div>
                                    <label class="label label-esp cursor-pointer" for="flag_terms">Acepto términos y condiciones</label>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="flag_legacy" class="flag-terms">
                        <input type="hidden" name="flag_mail" class="flag-terms">
                    </form>
                    <div class="row mb-4 justify-content-end">
                        <div class="col-md-4">
                            <button id="btn_add_pqrs" class="con-btn">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1051375143640a4e3ee9e416_69638250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1051375143640a4e3ee9e416_69638250',
  ),
  'container' => 
  array (
    0 => 'Block_1385501382640a4e3eea2013_73621229',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1385501382640a4e3eea2013_73621229', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1072254653640a4e3eeb3197_71031184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1072254653640a4e3eeb3197_71031184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_458364723640a4e3eeb3922_75393525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_458364723640a4e3eeb3922_75393525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
