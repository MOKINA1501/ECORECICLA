<?php
/* Smarty version 4.2.0, created on 2023-02-22 06:21:19
  from 'C:\xampp\htdocs\landing_datamax\app\Views\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63f608bf6ec5f6_10150942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c31b2c1e7d5958d83b1a9df9f925d2004c1fb37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\pages\\index.tpl',
      1 => 1677068473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f608bf6ec5f6_10150942 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159700515263f608bf6dea70_40224625', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168862481063f608bf6dfc15_62039968', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124313750063f608bf6eb506_73329562', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213710283763f608bf6ebc64_57636504', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_159700515263f608bf6dea70_40224625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_159700515263f608bf6dea70_40224625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_199231294763f608bf6e4758_28248280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="header">
            <div class="header-inf">
                <h1 class="title-1">Estamos para</h1>
                <h1 class="title-2">darte una mano</h1>
                <p class="txt-inf">Somos tu plataforma amiga para ayudarte en los procesos administrativos de HOLDING MAX.
                </p>
                <button class="btn-inf"><a>Empieza ya</a></button>
            </div>
        </section>
        <section class="uses">
            <h1>¿Para qué sirve Datamax?</h1>
            <div class="carousel-uses">
                <div class="card-uses position-relative">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2843.svg">
                    </figure>
                    <div class="card-text">
                        <span>Gestión de contrataciones</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2845.svg">
                    </figure>
                    <div class="card-text">
                        <span>Gestión de compras</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2847.svg">
                    </figure>
                    <div class="card-text">
                        <span>Inventarios</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2850.svg">
                    </figure>
                    <div class="card-text">
                        <span>Presupeuestos</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2852.svg">
                    </figure>
                    <div class="card-text">
                        <span>Cumplimiento de metas</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2855.svg">
                    </figure>
                    <div class="card-text">
                        <span>Agendas y reuniones</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2857.svg">
                    </figure>
                    <div class="card-text">
                        <span>Hojas de vida</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2860.svg">
                    </figure>
                    <div class="card-text">
                        <span>SGC</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2863.svg">
                    </figure>
                    <div class="card-text">
                        <span>Vacantes</span>
                    </div>
                </div>
                <div class="card-uses">
                    <figure class="card-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2866.svg">
                    </figure>
                    <div class="card-text">
                        <span>Actualización de datos</span>
                    </div>
                </div>

            </div>
        </section>

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
                        <button class="btn-tut">Ver más tutoriales</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="enterprises">
            <h1>Nuestras empresas</h1>
            <div class="carousel-enterprises">
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-01.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-03.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-12.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2568.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-01.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-03.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/logos-12.png">
                </figure>
                <figure class="card-enterprise">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Grupo 2568.png">
                </figure>
            </div>
        </section>

        <section class="contact">
            <h1>¿En qué podemos ayudarte?</h1>
            <div class="contact-content">
                <figure class="img-cont">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/Enmascarar grupo 28.png">
                </figure>
                <div class="inf-cont">
                    <form>
                        <div class="row mb-4">
                            <div class="col-md-6 col-esp ctn-input">
                                <input class="con-input" type="text" name="name" id="name" autocomplete="off">
                                <label class="label label-inp" for="name">Nombre completo</label>
                            </div>
                            <div class="col-md-6 ctn-input">
                                <input class="con-input" type="text" name="phone" id="phone" autocomplete="off">
                                <label class="label label-inp" for="phone">Número de celular</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="email" name="phone" id="email" autocomplete="off">
                                <label class="label label-inp" for="email">Correo electrónico</label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6 col-esp ctn-input">
                                <select class="con-input" name="enterprise" id="enterprise">
                                    <option selected hidden>Empresa</option>
                                </select>
                                <label class="label label-inp-sel" for="enterprise"><i
                                        class="fa-solid fa-chevron-down"></i></label>
                            </div>
                            <div class="col-md-6 ctn-input">
                                <select class="con-input" name="area" id="area">
                                    <option selected hidden>Área</option>
                                </select>
                                <label class="label label-inp-sel" for="area"><i class="fa-solid fa-chevron-down"></i></label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 ctn-input">
                                <select class="con-input" name="type" id="type">
                                    <option selected hidden>Tipo de solicitud</option>
                                </select>
                                <label class="label label-inp-sel" for="type"><i class="fa-solid fa-chevron-down"></i></label>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-12 ctn-input">
                                <textarea class="con-input" name="message" id="message" rows="4"></textarea>
                                <label class="label label-inp-mes" for="type">Escribe tu mensaje</label>
                            </div>
                        </div>
                        <div class="row mb-4 justify-content-end">
                            <div class="col-md-4 ">
                                <input class="con-btn" value="Enviar" type="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_168862481063f608bf6dfc15_62039968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_168862481063f608bf6dfc15_62039968',
  ),
  'container' => 
  array (
    0 => 'Block_199231294763f608bf6e4758_28248280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199231294763f608bf6e4758_28248280', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_124313750063f608bf6eb506_73329562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_124313750063f608bf6eb506_73329562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_213710283763f608bf6ebc64_57636504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_213710283763f608bf6ebc64_57636504',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
