<?php
/* Smarty version 4.2.0, created on 2023-04-04 17:35:14
  from 'C:\xampp\htdocs\datamax\app\Views\admin\functionalities\functionalities.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642ca6229e4766_13836857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd12747352ad011d6cbcce5c65f787e0f2ce9b00f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\functionalities\\functionalities.tpl',
      1 => 1680647707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642ca6229e4766_13836857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2138427087642ca6229d8a62_93754168', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1222620709642ca6229dd5a4_85258851', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1828232551642ca6229e23f9_94690242', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2024195797642ca6229e3071_60864373', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_2138427087642ca6229d8a62_93754168 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2138427087642ca6229d8a62_93754168',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/funcionalities.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_2022382163642ca6229e0de3_22385867 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-users">
            <div class="elements"></div>
            <div class="element-functionality">
                <div class="header-title-and-change-view">
                    <span class="txt-funcionalities">Funcionalidades</span>
                    <div class="container-icon-change-view">
                        <a class="view-change-miniatura slider-tool-icon" id="view_change_miniatura">
                            <span id="icon_grid" class="material-icons-round icon-grid-selected">grid_view</span>
                            <span class="tooltiptext">Vista en cuadricula</span> 
                        </a>
                        <a class="view-change-list slider-tool-icon"  id="view_change_list">
                            <span id="icon_list" class="material-icons-round icon-list-selected">view_list</span>
                            <span class="tooltiptext">Vista en lista</span> 
                        </a>   
                    </div>
                </div>
                <div class="main-container-all">
                    <div class="progress" style="display: block;">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="content-search-functionality">
                        <input class="search_list search-functionality" id="search_functionalities" type="text" placeholder="Buscar en funcionalidad...">
                        <span class="material-icons-round btn-search-funcionality">search</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_view_add']->value;?>
" id="change_view_add_functionality" class="btn-user-functionality slider-tool-icon-add d-flex align-items-center justify-content-center">
                            <span id="icon_add_functionality" class="material-icons-round btn-icon">add</span>
                            <span class="tooltiptext-add">Nueva funcionalidad</span> 
                        </a> 
                    </div>
                    <div class="funcionalities-content">
                        <div class="container-text-warning-size-funcionalities">
                            <p>Puedes crear hasta un máximo de 10 funcionalidades</p>
                        </div>
                        <div class="d-flex justify-content-between text-number-functionality">
                            <p class="total-funcionalities">Tienes <span widht="10px" id="num"></span> Funcionalidades en total</p>
                        </div>
                    </div>  
                    <section id="list_total_miniatura" class="list-total-miniatura">
                        <div id="container_before"></div>
                    </section>
                    <section id="list_total_list" class="list-total-list">
                        <div id="container_before"></div>
                    </section>
                </div>
                
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1222620709642ca6229dd5a4_85258851 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1222620709642ca6229dd5a4_85258851',
  ),
  'container' => 
  array (
    0 => 'Block_2022382163642ca6229e0de3_22385867',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2022382163642ca6229e0de3_22385867', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1828232551642ca6229e23f9_94690242 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1828232551642ca6229e23f9_94690242',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="view_modal_delete" class="view-modal-delete" style="display: none;">
        <div class="modal-general return_display_modal" id="">
        </div>
        <div class="container-modal-delete">
            <input id="input_id_delete" style="display:none">
            <div class="container-data-total-delete">
                <div class="container-text-modal-delete-up">
                    <div class="tittle-modal-delete">
                        <label>Eliminar funcionalidad</label>
                    </div>
                    <div class="description-modal">
                        <label>¿Deseas eliminar esta funcionalidad?</label>
                    </div>
                </div>
                <div class="container-button-modal-delete">
                    <div class="container-item-buttons-delete">
                        <button class="button-modal return_display_modal button-cancel">cancelar</button>
                        <button class="button-modal button-delete" id="button_delete">Aceptar</button>
                    </div>      
                </div>
            </div>
        </div>
    </div> 
    <div id="view_modal_add_functionality" style="display: none;">
        <div class="modal-general-add">    
        </div>
        <div class="main-container-modal-add">
            <div class="header-modal-close">
                <div class="header-modal-item">
                    <div class="header-proportion">
                        <label>Proporción 1:1</label>
                    </div>
                    <div class="header-x-close return_display_modal">
                        <label>X</label>
                    </div>
                </div>
            </div>
            <div class="body-modal-add">
                <img src="" id="img_add_functionality" alt="imagen añadir" > 
            </div>
            <div class="footer-button-modal-add">
                <div class="container-buttons-modal-add">
                    <div class="file-select" id="src-file1" >
                        <input type="file" name="src_file1" aria-label="Archivo"  class="input-file" id="input_add_image_of_functionality_modal" accept="image/jpeg,image/png,image/jpg" overwrite>
                    </div>
                    <div class="container-button-add">
                        <button class="button-save-img" id="preview_image_in_container">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div id="view_modal_edit_functionality" style="display: none;">
        <div class="modal-general-add">    
        </div>
        <div class="main-container-modal-add">
            <div class="header-modal-close">
                <div class="header-modal-item">
                    <div class="header-proportion">
                        <label>Proporción 1:1</label>
                    </div>
                    <div class="header-x-close return_display_modal">
                        <label>X</label>
                    </div>
                </div>
            </div>
            <div class="body-modal-edit">
                <img src="" id="img_edit_functionality" alt="imagen añadir" > 
            </div>
            <div class="footer-button-modal-add">
                <div class="container-buttons-modal-add">
                    <div class="file-select" id="src-file1" >
                        <input type="file" name="src_file1" aria-label="Archivo"  class="input-file" id="input_edit_image_of_functionality_modal" accept="image/jpeg,image/png,image/jpg" overwrite>
                    </div>
                    <div class="container-button-add">
                        <button class="button-save-img" id="preview_image_in_container_edit">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div id="view_modal_confirm_edit" class="view-modal-delete" style="display: none;">
        <div class="modal-general return_display_modal" id="">
        </div>
        <div class="container-modal-delete">
            <input id="input_id_edit" style="display:none">
            <div class="container-data-total-delete">
                <div class="container-text-modal-delete-up">
                    <div class="tittle-modal-delete">
                        <label>Guardar Cambios</label>
                    </div>
                    <div class="description-modal">
                        <label>¿Deseas guardar los cambios realizados en esta funcionalidad?</label>
                    </div>
                </div>
                <div class="container-button-modal-delete">
                    <div class="container-item-buttons-delete">
                        <button class="button-modal return_display_modal button-cancel">cancelar</button>
                        <button class="button-modal button-delete" id="button_edit">Aceptar</button>
                    </div>      
                </div>
            </div>
        </div>
    </div> 
    <div id="view_modal_confirm_exit" class="view-modal-delete" style="display: none;">
        <div class="modal-general">
        </div>
        <div class="container-modal-delete">
            <input id="input_id_edit" style="display:none">
            <div class="container-data-total-delete">
                <div class="container-text-modal-delete-up">
                    <div class="tittle-modal-delete">
                        <label>Parece que aún no has terminado</label>
                    </div>
                    <div class="description-modal">
                        <label>¿Estas seguro que deseas salir?</label>
                    </div>
                </div>
                <div class="container-button-modal-delete">
                    <div class="container-item-buttons-delete">
                        <button class="button-modal button-cancel" id="button_cancel_leave">cancelar</button>
                        <button class="button-modal button-delete" id="button_leave">Aceptar</button>
                    </div>      
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_2024195797642ca6229e3071_60864373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2024195797642ca6229e3071_60864373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/funcionalities.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        $path_functionalities                                                   = '<?php echo $_smarty_tpl->tpl_vars['path_functionalities']->value;?>
';
        $path_list                                                              = '<?php echo $_smarty_tpl->tpl_vars['path_list']->value;?>
';
        $path_view_change                                                       = '<?php echo $_smarty_tpl->tpl_vars['path_view_change']->value;?>
';
        $path_udrop                                                             = '<?php echo $_smarty_tpl->tpl_vars['path_udrop']->value;?>
';
        $path_display                                                           = '<?php echo $_smarty_tpl->tpl_vars['path_display']->value;?>
';

    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'scripts'} */
}
