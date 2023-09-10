<?php
/* Smarty version 4.2.0, created on 2023-04-05 06:30:28
  from 'C:\xampp\htdocs\datamax\app\Views\admin\tutorials\tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642d5bd4cb1a93_94098838',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13863c1270d042eb349cb22cffc5745421074d6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\tutorials\\tutorials.tpl',
      1 => 1680694225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d5bd4cb1a93_94098838 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1906410561642d5bd4c98520_70476523', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1536693406642d5bd4c9f519_54910557', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300726501642d5bd4caccf5_09558715', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_315863772642d5bd4cadb28_81086921', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_1906410561642d5bd4c98520_70476523 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1906410561642d5bd4c98520_70476523',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/tutorials.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1459753956642d5bd4ca3dd1_97770192 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-users">
            <div class="elements"></div>
            <div class="element-users">
                <div class="content-title">
                    <span class="txt-users">Tutoriales</span>
                    <div class="content-title-rigth">
                        <span class="tooltip_tutorials">
                            <a href="javascript:void(0)" id="flag_tutorials_card">
                                <i class="ico_header_1 fa-solid fa-grip <?php if ($_smarty_tpl->tpl_vars['flag_tutorial']->value == 0) {?>ico_header_active<?php } else { ?>gray<?php }?>"></i>
                            </a>
                            <span id="" class="tooltip_tutorials-text">Vista cuadricula</span>
                        </span>

                        <span class="tooltip_tutorials">
                            <a href="javascript:void(0)" id="flag_tutorials_list">
                                <i class="ico_header_2 fa-solid fa-list  <?php if ($_smarty_tpl->tpl_vars['flag_tutorial']->value == 0) {?>gray<?php } else { ?>ico_header_active<?php }?> "></i>
                            </a>
                            <span id="" class="tooltip_tutorials-text tooltip_left">Vista listar</span>
                        </span>
                    </div>
                </div>
                <div class="users-content">
                    <div class="content-search">
                        <input class="search_list search-users" type="text" placeholder="Buscar en tutoriales...">
                        <span class="material-icons-round btn-search">search</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_add']->value;?>
" class="btn-user-add d-flex align-items-center justify-content-center">
                            <span class="material-icons-round btn-icon">add</span>
                        </a>
                    </div>
                    <div class="container-fluid d-flex justify-content-between mt-40 ml-15 over-x">
                        <p class="total-users">Tienes <span id="num"></span> tutoriales en total</p>
                    </div>
                    <section class="card-list <?php if ($_smarty_tpl->tpl_vars['flag_tutorial']->value == 0) {?>format-grid<?php } else { ?>format-list<?php }?> container-fluid pl-25">
                    </section>
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

        </div>




    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1536693406642d5bd4c9f519_54910557 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1536693406642d5bd4c9f519_54910557',
  ),
  'container' => 
  array (
    0 => 'Block_1459753956642d5bd4ca3dd1_97770192',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1459753956642d5bd4ca3dd1_97770192', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_300726501642d5bd4caccf5_09558715 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_300726501642d5bd4caccf5_09558715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_add" class="modal fade" tabindex="-1">
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
                    <button id="btn_close_add" class="btn-close">Cancelar</button>
                    <button id="btn-add" class="btn-edit">Aceptar</button>
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
                            <p class="modal-msg">¿Deseas guardar los cambios realizados en este tutorial?</p>
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

    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Eliminar tutorial</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas este eliminar tutorial?</p>
                        </div>
                    </div>
                </div>
                <input type="hidden" class="d-none" id="user_drop">
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_drop" class="btn-close">Cancelar</button>
                    <button id="btn_udrop" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_315863772642d5bd4cadb28_81086921 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_315863772642d5bd4cadb28_81086921',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="https://www.youtube.com/player_api"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/tutorials.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        <?php if ((isset($_smarty_tpl->tpl_vars['path_list']->value))) {?>
            var $path_list                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_list']->value;?>
';
            var $path_users                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_users']->value;?>
';
            var $path_tutorials                                                 =   '<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
';
            var $path_flag_tutorials                                            =   '<?php echo $_smarty_tpl->tpl_vars['path_flag_tutorials']->value;?>
';
            var $path_display                                                   =   '<?php echo $_smarty_tpl->tpl_vars['path_display']->value;?>
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
