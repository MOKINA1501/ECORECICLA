<?php
/* Smarty version 4.2.0, created on 2023-03-16 11:57:27
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_64134a77e9cf60_32378709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e243f268879fad03f8c9da1cf98f4a53b8c01b78' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\change_password.tpl',
      1 => 1678827877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64134a77e9cf60_32378709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135532301664134a77e9a684_33087090', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66861588464134a77e9ad46_69715296', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1584603664134a77e9c7d5_94920809', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66590872064134a77e9cbf7_31257742', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../admin/head.tpl');
}
/* {block 'styles'} */
class Block_135532301664134a77e9a684_33087090 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_135532301664134a77e9a684_33087090',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_19201312264134a77e9bfe0_40593905 extends Smarty_Internal_Block
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
class Block_66861588464134a77e9ad46_69715296 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_66861588464134a77e9ad46_69715296',
  ),
  'container' => 
  array (
    0 => 'Block_19201312264134a77e9bfe0_40593905',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19201312264134a77e9bfe0_40593905', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1584603664134a77e9c7d5_94920809 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1584603664134a77e9c7d5_94920809',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_66590872064134a77e9cbf7_31257742 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_66590872064134a77e9cbf7_31257742',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'scripts'} */
}
