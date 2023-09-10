<?php
/* Smarty version 4.2.0, created on 2023-04-04 18:01:52
  from 'C:\xampp\htdocs\datamax\app\Views\admin\users\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642cac60f327d9_96189870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97ce62bdddc98ffa76458946e5b4f34067a393fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\users\\users.tpl',
      1 => 1680649261,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642cac60f327d9_96189870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_522052268642cac60f1a6e2_48301287', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_623780902642cac60f1bce7_80475349', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_521352735642cac60f28806_90941683', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_889462307642cac60f29c73_59634894', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_522052268642cac60f1a6e2_48301287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_522052268642cac60f1a6e2_48301287',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1307005526642cac60f1fc30_19473631 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-users">
            <div class="elements"></div>
            <div class="element-users">
                <span class="txt-users">Usuarios</span>
                <div class="users-content">
                    <div class="content-search">
                        <input class="search_list search-users" type="text" placeholder="Buscar en usuarios...">
                        <span class="material-icons-round btn-search">search</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_add']->value;?>
" class="btn-user-add d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="bottom" title="Nuevo usuario">
                            <span class="material-icons-round btn-icon">add</span>
                        </a> 
                    </div>
                    <div class="container-fluid d-flex justify-content-between mt-40 ml-15">
                        <p class="total-users">Tienes <span id="num"></span> usuarios en total</p>
                    </div>
                    <section class="card-list container-fluid pl-25"></section>
                    <div class="container-fluid d-flex pagination pagination_web justify-content-end align-items-center pl-25">
                        <div class="d-flex align-items-end see-elem mr-30">
                            <span class="item-pag">Ítems por página</span>
                            <select class="select-pag" id="page_size">
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <p class="separate"><span class="start-index">0</span>-
                                <span class="end-index">0</span>
                                de <span class="total-items">0</span>
                            </p>
                        </div>
                        <div class="d-flex card_pagination pagination-web">

                        </div>
                    </div>
                    <div class="pagination_movil" id="movil_tablet_pagination">
                        <div class="text-view-elements-movil">
                            <p class="text-view-elements-movil">Mostrando <span class="start-index">0</span> al <span
                                    class="end-index">0</span>
                                de <span class="total-items">0</span>
                                elementos</p>
                        </div>
                        <div class="card_pagination">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_623780902642cac60f1bce7_80475349 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_623780902642cac60f1bce7_80475349',
  ),
  'container' => 
  array (
    0 => 'Block_1307005526642cac60f1fc30_19473631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1307005526642cac60f1fc30_19473631', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_521352735642cac60f28806_90941683 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_521352735642cac60f28806_90941683',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Eliminar usuario</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas eliminar este usuario?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_drop" class="btn-close">Cancelar</button>
                    <button id="btn_udrop" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_add" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Crear usuario</h5>
                        </div>

                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas crear este usuario?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_add" class="btn-close">Cancelar</button>
                    <button id="btn_add" class="btn-add">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Guardar cambios</h5>
                        </div>
                        <input type="hidden" class="d-none" id="user_drop">
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas guardar los cambios realizados en este usuario?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_edit" class="btn-close">Cancelar</button>
                    <button id="btn-edit" class="btn-edit">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_back" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Parece que aún no has terminado</h5>
                        </div>
                        <input type="hidden" class="d-none" id="user_drop">
                        <div class="container-fluid">
                            <p class="modal-msg">¿Estas seguro que deseas salir?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_back" class="btn-close">Cancelar</button>
                    <button id="btn-back" class="btn-edit">Salir</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modal_roles" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body pd-25">
                <div class="container-fluid">
                    <div class="container-fluid mb-2">
                        <h5 class="modal-title">Detalle Rol</h5>
                    </div>
                    <input type="hidden" class="d-none" id="user_drop">
                    <div class="container-fluid m-b-20">
                        <p class="modal-msg">Usuario Super Admin: tiene el manejo completo del gestor de contenidos, teniendo acceso a cambios globales en la página web.</p>
                    </div>
                    <div class="container-fluid">
                        <p class="modal-msg">Usuario Administrador: tiene un manejo restringido donde no podrá crear, eliminar ni editar usuarios.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-end btn-modals">
                <button id="btn_close_roles" class="btn-close">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_889462307642cac60f29c73_59634894 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_889462307642cac60f29c73_59634894',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/users.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        <?php if ((isset($_smarty_tpl->tpl_vars['path_list']->value))) {?>
            var $path_list                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_list']->value;?>
';
            var $path_users                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
';
            var $path_drop                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_drop']->value;?>
';    
        <?php }?>
        var $resources                                                          =   '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
