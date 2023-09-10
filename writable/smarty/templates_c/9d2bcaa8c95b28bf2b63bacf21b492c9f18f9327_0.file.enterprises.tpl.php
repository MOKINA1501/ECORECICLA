<?php
/* Smarty version 4.2.0, created on 2023-04-04 15:07:32
  from 'C:\xampp\htdocs\datamax\app\Views\admin\enterprises\enterprises.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642c8384c89d75_58355248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d2bcaa8c95b28bf2b63bacf21b492c9f18f9327' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\enterprises\\enterprises.tpl',
      1 => 1680613972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c8384c89d75_58355248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639087988642c8384c804e9_23130489', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1245779237642c8384c824c9_83303248', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_448152825642c8384c88253_22753391', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1188505670642c8384c88673_09431749', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_1639087988642c8384c804e9_23130489 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1639087988642c8384c804e9_23130489',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/enterprises.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_648396386642c8384c83a33_24924994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-enterprises">
            <div class="elements"></div>
            <div class="element-enterprises">
                <div class="d-flex justify-content-between">
                    <span class="txt-enterprises">Empresas</span>
                    <div class="container-mode-view">
                        <div class="tooltip-h">
                            <div id="display_list_grid_cards" class="container-icon-mode-grid <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 0) {?>icon-visualization-list-selected<?php }?>">
                                <span class="material-icons-outlined <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 0) {?>d-none<?php }?>">grid_view</span>
                                <span class="material-icons-round <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 1) {?>d-none<?php }?>">grid_view</span>
                            </div>
                            <div class="tooltip-content">Vista en cuadrícula</div>
                        </div>
                        <div class="tooltip-h">
                            <div id="display_list_cards" class="container-icon-mode-list <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 1) {?>icon-visualization-list-selected<?php }?>">
                                <span class="material-icons-outlined <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 1) {?>d-none<?php }?>">view_list</span>
                                <span class="material-icons-round <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 0) {?>d-none<?php }?>">view_list</span>
                            </div>
                            <div class="tooltip-content">Vista en lista</div>
                        </div>
                    </div>
                </div>
                <div class="enterprises-content">
                    <div class="content-search">
                        <input class="search_list_enterprises search-enterprises" type="text" placeholder="Buscar en empresas...">
                        <span class="material-icons-round btn-search">search</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_add_enterprise']->value;?>
" class="btn-enterprise-add d-flex align-items-center justify-content-center">
                            <span class="material-icons-round btn-icon">add</span>
                        </a> 
                    </div>
                    <div class="container-fluid d-flex justify-content-between mt-40 ml-15">
                        <p class="total-enterprises">Tienes <span id="num">0</span> empresas en total</p>
                    </div>
                    <div id="container_list_of_enterprises_grid">
                        <section id="list_of_enterprises_grid" class="container-grid-enterprises <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 1) {?>d-none<?php }?>"></section>
                    </div>
                    <section id="list_of_enterprises_list" class="container-list-cards-h <?php if ($_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'] == 0) {?>d-none<?php }?>"></section>
                    <div class="container-fluid d-flex pagination justify-content-end align-items-center pl-25">
                        <div class="d-flex align-items-end see-elem pagination_web">
                            <span class="item-pag">Ítems por página</span>
                            <select class="select-pag" id="page_size">
                                <option selected value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <p class="separate"><span class="start-index">0</span> -
                                <span class="end-index">0</span>de <span class="total-items">0</span>
                            </p>
                        </div>
                        <div class="d-flex card_pagination pagination-web"></div>
                    </div>
                    <div class="pagination_movil" id="movil_tablet_pagination">
                        <div class="text-view-elements-movil">
                            <p class="text-view-elements-movil">Mostrando <span class="start-index">0</span> al <span
                                    class="end-index">0</span>
                                de <span class="total-items">0</span>
                                elementos</p>
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
class Block_1245779237642c8384c824c9_83303248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1245779237642c8384c824c9_83303248',
  ),
  'container' => 
  array (
    0 => 'Block_648396386642c8384c83a33_24924994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_648396386642c8384c83a33_24924994', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_448152825642c8384c88253_22753391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_448152825642c8384c88253_22753391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <input id="id_enterprise_udrop" type="hidden" value="0">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Eliminar empresa</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas eliminar esta empresa?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_modal_delete" class="btn-close">Cancelar</button>
                    <button id="btn_udrop" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'vars_page'} */
class Block_1020080144642c8384c896b1_74941688 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'vars_page'} */
/* {block 'scripts'} */
class Block_1188505670642c8384c88673_09431749 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1188505670642c8384c88673_09431749',
  ),
  'vars_page' => 
  array (
    0 => 'Block_1020080144642c8384c896b1_74941688',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var $path_list_enterprises                                              =   '<?php echo $_smarty_tpl->tpl_vars['path_list_enterprises']->value;?>
'
        var $path_mode_display_enterprises                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_mode_display_enterprises']->value;?>
'
        var $path_display_enterprises                                           =   '<?php echo $_smarty_tpl->tpl_vars['path_display_enterprises']->value;?>
'
        var $path_udrop_enterprises                                             =   '<?php echo $_smarty_tpl->tpl_vars['path_udrop_enterprises']->value;?>
'
        var $path_udrop_areas                                                   =   '<?php echo $_smarty_tpl->tpl_vars['path_udrop_areas']->value;?>
'
        var $path_view_enterprises_detail                                       =   '<?php echo $_smarty_tpl->tpl_vars['path_view_enterprises_detail']->value;?>
'
        var $path_view_enterprises_edit                                         =   '<?php echo $_smarty_tpl->tpl_vars['path_view_enterprises_edit']->value;?>
'
        var $path_list_areas                                                    =   '<?php echo $_smarty_tpl->tpl_vars['path_list_areas']->value;?>
'
        var $path_add                                                           =   '<?php echo $_smarty_tpl->tpl_vars['path_add']->value;?>
'
        var $path_edit                                                          =   '<?php echo $_smarty_tpl->tpl_vars['path_edit']->value;?>
'
        var $path_enterprises                                                   =   '<?php echo $_smarty_tpl->tpl_vars['path_enterprises']->value;?>
'
        var $mode_display_enterprises                                           =   '<?php echo $_smarty_tpl->tpl_vars['session_data']->value['flag_enterprise'];?>
'
        var $list_areas_forms                                                   =   []
    <?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1020080144642c8384c896b1_74941688', 'vars_page', $this->tplIndex);
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/enterprises.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
