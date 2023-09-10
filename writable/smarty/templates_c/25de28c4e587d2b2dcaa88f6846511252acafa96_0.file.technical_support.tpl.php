<?php
/* Smarty version 4.2.0, created on 2023-03-16 13:56:45
  from 'C:\xampp\htdocs\datamax_copia\app\Views\pages\technical_support.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6413666d627605_64832813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25de28c4e587d2b2dcaa88f6846511252acafa96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\pages\\technical_support.tpl',
      1 => 1678992998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6413666d627605_64832813 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20862212556413666d614757_92709573', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18484025566413666d615687_03995198', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8327026266413666d626643_18224171', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21461435866413666d626ef3_72181298', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_20862212556413666d614757_92709573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_20862212556413666d614757_92709573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_4940360296413666d618638_16916150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <section class="support-tec">
            <h1>Soporte técnico</h1>
            <p>Escríbenos si algo dentro de la plataforma no funciona correctamente o tienes alguna sugerencia de mejora para
                nosotros.</p>
            <div class="support-tec-content">
                <figure class="img-cont img-sup">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
img/landing/support-image.png">
                </figure>
                <div class="sup-tec-cont">
                    <form id="form_add_pqrs" class="form-datamax" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_pqrs']->value;?>
">
                        <input type="hidden" name="type-form" value="2">
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
                                    <input class="con-input con-input-esp me-1 cursor-pointer ck-form" type="checkbox"
                                        name="flag_terms" id="flag_terms">
                                </div>
                                <div>
                                    <label class="label label-esp cursor-pointer" for="flag_terms">Acepto términos y
                                        condiciones</label>
                                </div>
                            </div>
                        </div>
                        <input name="flag_legacy" class="flag-terms-legacy v-hidden">
                        <input name="flag_mail" class="flag-terms-mail v-hidden">
                    </form>
                    <div class="row mb-4 justify-content-end">
                        <div class="col-md-4 ">
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
class Block_18484025566413666d615687_03995198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18484025566413666d615687_03995198',
  ),
  'container' => 
  array (
    0 => 'Block_4940360296413666d618638_16916150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4940360296413666d618638_16916150', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_8327026266413666d626643_18224171 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_8327026266413666d626643_18224171',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_21461435866413666d626ef3_72181298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_21461435866413666d626ef3_72181298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
