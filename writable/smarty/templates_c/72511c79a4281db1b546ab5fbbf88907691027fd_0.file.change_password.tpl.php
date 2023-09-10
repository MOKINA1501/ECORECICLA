<?php
/* Smarty version 4.2.0, created on 2023-04-15 08:40:05
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\change_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643aa935275157_38317857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72511c79a4281db1b546ab5fbbf88907691027fd' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\change_password.tpl',
      1 => 1680547668,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643aa935275157_38317857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1545362723643aa93525c396_33653160', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_432706663643aa93525f145_09477666', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_40309846643aa9352719b6_44728016', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1712614672643aa935272d52_73753451', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../admin/head.tpl');
}
/* {block 'styles'} */
class Block_1545362723643aa93525c396_33653160 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1545362723643aa93525c396_33653160',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_72068019643aa935266dc0_00905208 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-password">
            <div class="elements"></div>
            <div class="element-pass">
                <div class="adm-cont-icon"></div>
                <div class="change-password">
                    <h5 class="mt-4 mb-3">Cambia tu contraseña</h5>
                    <p class="mt-4 mb-5 text-changes">Por favor crea una contraseña segura con letras mayúsculas y minúsculas, números y caracteres especiales.</p>
                    <form class="mt-2" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_pass_change']->value;?>
" id="form_change_pass">
                     <span id="countdown" hidden></span>
                        <div class="hash">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        </div> 
                        <div class="mb-4">
                            <input type="text" id="pass-user">
                            <p class="text-password mb-4">Contraseña actual</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="password" id="password" autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility">visibility_off</span>
                                <label class="label label-inp" for="password">Tu contraseña</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <p class="text-password mb-4">Contraseña nueva</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="newpassword" id="new-password"
                                    autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility2">visibility_off</span>
                                <label class="label label-inp" for="new-password">Nueva contraseña</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <p class="text-password mb-4">Confirmar contraseña</p>
                            <div class="col-12 ctn-input">
                                <input class="con-input" type="password" name="conpassword" id="con-password"
                                    autocomplete="off">
                                <span class="material-icons-round password-icon show-password" id="visibility3">visibility_off</span>
                                <label class="label label-inp" for="conpassword">Confirmar contraseña</label>
                            </div>
                        </div>
                    </form>
                    <div class="row justify-content-center">
                        <div class="col-md-12" id="content-chpass">
                            <button id="btn_change_password" class="btn-adm">Cambiar contraseña</button>
                        </div>
                    </div>
                </div>
            </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_432706663643aa93525f145_09477666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_432706663643aa93525f145_09477666',
  ),
  'container' => 
  array (
    0 => 'Block_72068019643aa935266dc0_00905208',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72068019643aa935266dc0_00905208', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_40309846643aa9352719b6_44728016 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_40309846643aa9352719b6_44728016',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="change_password" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Cambiar contraseña</h5>
                        </div>

                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas cambiar tu contraseña?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_change" class="btn-close">Cancelar</button>
                    <button id="btn_change" class="btn-add">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1712614672643aa935272d52_73753451 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1712614672643aa935272d52_73753451',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
    
        var  $path_pass_change                                                  =   '<?php echo $_smarty_tpl->tpl_vars['path_pass_change']->value;?>
';
        var  $path_validate_password                                            =   '<?php echo $_smarty_tpl->tpl_vars['path_validate_password']->value;?>
';
        var  $path_logout                                                       =   '<?php echo $_smarty_tpl->tpl_vars['path_logout']->value;?>
';        
    <?php echo '</script'; ?>
>   

<?php
}
}
/* {/block 'scripts'} */
}
