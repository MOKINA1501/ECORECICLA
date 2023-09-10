<?php
/* Smarty version 4.2.0, created on 2023-03-10 16:12:19
  from 'C:\xampp\htdocs\landing_datamax\app\Views\admin\change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_640bab432d7488_32164622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc2eeb2cc0df9303fabdbfc71127259d62c905d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\landing_datamax\\app\\Views\\admin\\change_password.tpl',
      1 => 1678486337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640bab432d7488_32164622 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_843112277640bab432d26f3_34218299', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1953378672640bab432d3452_15529095', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_782789465640bab432d6820_97362994', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1904164049640bab432d6ea3_31346233', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../admin/head.tpl');
}
/* {block 'styles'} */
class Block_843112277640bab432d26f3_34218299 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_843112277640bab432d26f3_34218299',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_199706607640bab432d5b59_03703892 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element">
                <div class="adm-cont-icon">
                    <div>
                        <i class="icon-mod fa-solid fa-key"></i>
                    </div>
                    <div>
                        <span class="leg-mod">Cambiar contraseña</span>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="change-password">
                        <h5 class="mt-4 mb-4">Cambia tu contraseña</h5>
                        <form class="mt-2" method="post">
                            <div class="row mb-4">
                                <div class="col-12 ctn-input">
                                    <input class="con-input" type="password" name="password" id="password" autocomplete="off">
                                    <label class="label label-inp" for="password">Tu contraseña</label>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 ctn-input">
                                    <input class="con-input" type="password" name="new-password" id="new-password"
                                        autocomplete="off">
                                    <label class="label label-inp" for="new-password">Nueva contraseña</label>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <ul>
                                    <li>
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form" type="checkbox" disabled>
                                        Tener como mínimo 8 dígitos
                                    </li>
                                    <li>
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form" type="checkbox" disabled>
                                        Contener como mínimo una letra en mayuscula
                                    </li>
                                    <li>
                                        <input class="con-input con-input-esp me-1 cursor-pointer ck-form" type="checkbox" disabled>
                                        Contener como mínimo un número
                                    </li>
                                </ul>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12 ctn-input">
                                    <input class="con-input" type="password" name="con-password" id="con-password"
                                        autocomplete="off">
                                    <label class="label label-inp" for="con-password">Confirmar contraseña</label>
                                </div>
                            </div>
                        </form>
                        <div class="row justify-content-end">
                            <div class="col-md-6">
                                <button id="btn_change_password" class="btn-adm">Cambiar contraseña</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="change_password" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body pd-25">
                        <div class="d-flex justify-content-center align-items-center mg-b-20 mg-t-45 mb-4 mt-4">

                        </div>
                        <div class="container-fluid">
                            <div class="container-fluid mb-2">
                                <h5 class="modal-title">¿Estas seguro/a?</h5>
                            </div>

                            <div class="container-fluid">
                                <p class="modal-msg">Que deseas realizar el cambio de tu contraseña<p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mb-4 col-lg-6 mx-auto d-flex justify-content-center align-items-center">
                        <button id="btn_close_terms" class="btn-adm">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1953378672640bab432d3452_15529095 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1953378672640bab432d3452_15529095',
  ),
  'container' => 
  array (
    0 => 'Block_199706607640bab432d5b59_03703892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199706607640bab432d5b59_03703892', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_782789465640bab432d6820_97362994 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_782789465640bab432d6820_97362994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1904164049640bab432d6ea3_31346233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1904164049640bab432d6ea3_31346233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
