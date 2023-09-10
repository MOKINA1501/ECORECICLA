<?php
/* Smarty version 4.2.0, created on 2023-04-04 15:52:15
  from 'C:\xampp\htdocs\datamax\app\Views\admin\slides\slides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642c8dff548ea2_46973553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e982b6f91e94593574d3bd469d2fc77a941e1e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\slides\\slides.tpl',
      1 => 1680641531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c8dff548ea2_46973553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2085822011642c8dff53f0f4_48227840', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94536217642c8dff5419b6_94686768', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1564021797642c8dff547116_85522091', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1169330578642c8dff548267_79018002', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_2085822011642c8dff53f0f4_48227840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_2085822011642c8dff53f0f4_48227840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/slides.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_1472027770642c8dff544089_73751197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container-slides">
            <div class="content-slides">
                <div class="header-slides">
                    <div class="header-slides-title">
                        <span>Slide principal</span>
                        <div class="buttons-type-view"> 
                            <div class="icon-view-type <?php if ($_smarty_tpl->tpl_vars['flag_slides']->value == 0) {?> selected <?php }?>" id="btn_view_type_grid">
                                <span class="<?php if ($_smarty_tpl->tpl_vars['flag_slides']->value == 0) {?> material-symbols-rounded <?php } else { ?> material-symbols-outlined <?php }?> icon-span">grid_view</span>
                                <div class="tooltip-icon-view-type">Miniatura</div>
                            </div>
                            <div class="icon-view-type <?php if ($_smarty_tpl->tpl_vars['flag_slides']->value == 1) {?> selected <?php }?>" id="btn_view_type_list" >
                                <span class="<?php if ($_smarty_tpl->tpl_vars['flag_slides']->value == 1) {?> material-symbols-rounded <?php } else { ?> material-symbols-outlined <?php }?> icon-span">view_list</span>
                                <div class="tooltip-icon-view-type">Lista</div>
                            </div>
                        </div>
                    </div>
                    <div class="background-slides-header"> 
                        <div class="header-slides-info"> Puedes crear hasta un máximo de 4 imágenes para tu slide principal </div>
                        <div class="content-view-device-container">
                            <div class="content-view-device selected" id="btn_view_desktop">
                                <div>Web / Tablet</div>
                                <div class="content-view-device-hr"></div>
                            </div>
                            <div class="content-view-device" id="btn_view_mobile">
                                <div>Mobile</div>
                                <div class="content-view-device-hr"></div>
                            </div>
                        </div>
                        <div class="total-cards"></div>
                    </div>
                </div>
                <div class="main-content-cards">

                    <div class="main-content-grid-desktop" id="main_content_grid_desktop" style="display: none;"> 
                        <form action="" class="form-input-grid-desktop" id="form_input_grid_desktop">
                            <input type="file" name="input_hidden_btn_add_grid_desktop" id="input_hidden_btn_add_grid_desktop" hidden accept="image/jpeg,image/jpg,image/png">
                            <label for="input_hidden_btn_add_grid_desktop" class="btn-add-grid-desktop" data-num-img="">
                                <span class="material-icons">cloud_upload</span>
                                <p>Cargar Imagen</p>
                            </label>
                        </form>
                        <div class="info-max-weight">Tamaño máximo permitido 500KB*</div>
                        <div class="container-grid-desktop-cards cube" id="container_cards_grid_desktop">
                        </div>
                    </div>

                    <div class="main-content-list-desktop" id="main_content_list_desktop" style="display: none;"> 
                        <form action="" class="form-input-grid-desktop" id="form_input_list_desktop">
                            <input type="file" name="input_hidden_btn_add_list_desktop" id="input_hidden_btn_add_list_desktop" hidden accept="image/jpeg,image/jpg,image/png">
                            <label for="input_hidden_btn_add_list_desktop" class="btn-add-grid-desktop">
                                <span class="material-icons">cloud_upload</span>
                                <p>Cargar Imagen</p>
                            </label>
                        </form>
                        <div class="info-max-weight">Tamaño máximo permitido 500KB*</div>
                        <div class="container-list-desktop-cards cube" id="container_cards_list_desktop">
                        </div>
                    </div>

                    <div class="main-content-grid-mobile" id="main_content_grid_mobile" style="display: none;"> 
                        <form action="" class="form-input-grid-desktop" id="form_input_grid_mobile">
                            <input type="file" name="input_hidden_btn_add_grid_mobile" id="input_hidden_btn_add_grid_mobile" hidden accept="image/jpeg,image/jpg,image/png">
                            <label for="input_hidden_btn_add_grid_mobile" class="btn-add-grid-desktop">
                                <span class="material-icons">cloud_upload</span>
                                <p>Cargar Imagen</p>
                            </label>
                        </form>
                        <div class="info-max-weight">Tamaño máximo permitido 500KB*</div>
                        <div class="container-grid-mobile-cards cube" id="container_cards_grid_mobile">
                        </div>
                    </div>

                    <div class="main-content-list-desktop" id="main_content_list_mobile" style="display: none;">  
                        <form action="" class="form-input-grid-desktop" id="form_input_list_mobile">
                            <input type="file" name="input_hidden_btn_add_list_mobile" id="input_hidden_btn_add_list_mobile" hidden accept="image/jpeg,image/jpg,image/png">
                            <label for="input_hidden_btn_add_list_mobile" class="btn-add-grid-desktop">
                                <span class="material-icons">cloud_upload</span>
                                <p>Cargar Imagen</p>
                            </label>
                        </form>
                        <div class="info-max-weight">Tamaño máximo permitido 500KB*</div>
                        <div class="container-list-desktop-cards cube" id="container_cards_list_mobile">
                        </div>
                    </div>
                </div>
            </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_94536217642c8dff5419b6_94686768 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_94536217642c8dff5419b6_94686768',
  ),
  'container' => 
  array (
    0 => 'Block_1472027770642c8dff544089_73751197',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1472027770642c8dff544089_73751197', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1564021797642c8dff547116_85522091 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1564021797642c8dff547116_85522091',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container-modal" id="container_modal_add_desktop" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info"> 
                <div class="modal-info">Proporción 16:9</div>
                <div class="modal-btn-close" id="modal_btn_close_desktop">X</div>
            </div>
            <div class="container-img"> 
                <img src="" id="preview_img_modal_desktop" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer">
            <div class="modal-checkbox-desktop">
                <input type="checkbox" name="checkbox_modal_add_slide_desktop" id="checkbox_modal_add_slide_desktop">
                <label for="checkbox_modal_add_slide_desktop">Usar también en la vista móvil</label>
            </div>
            <form class="modal-buttons-desktop" id="form_modal_desktop" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <input type="file" name="input_modal_hidden_file_desktop" id="input_modal_hidden_file_desktop" hidden accept="image/jpeg,image/jpg,image/png">
                <label for="input_modal_hidden_file_desktop" class="btn-input-file-desktop">Examinar</label>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_desktop">Guardar</button>
            </form>
        </div>
    </div>

    <div class="container-modal" id="container_modal_add_desktop_mobile" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info"> 
                <div class="modal-info">Proporción 9:16</div>
                <div class="modal-btn-close" id="modal_btn_close_desktop_mobile">X</div>
            </div>
            <div class="container-img"> 
                <img src="" id="preview_img_modal_desktop_mobile" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer">
            <div class="modal-footer-info">Ajusta la medida para la versión móvil</div>
            <form class="modal-buttons-desktop" id="form_modal_desktop" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <button type="button" class="btn-return-photo-desktop" id="btn_return_photo_desktop">Volver</button>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_desktop_mobile">Guardar</button>
            </form>
        </div>
    </div>

    <div class="container-modal" id="container_modal_add_mobile" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info"> 
                <div class="modal-info">Proporción 9:16</div>
                <div class="modal-btn-close" id="modal_btn_close_mobile">X</div>
            </div>
            <div class="container-img"> 
                <img src="" id="preview_img_modal_mobile" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer">
            <div class="modal-checkbox-desktop">
                <input type="checkbox" name="checkbox_modal_add_slide_mobile" id="checkbox_modal_add_slide_mobile">
                <label for="checkbox_modal_add_slide_mobile">Usar también en la vista web</label>
            </div>
            <form class="modal-buttons-desktop" id="form_modal_mobile" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <input type="file" name="input_modal_hidden_file_mobile" id="input_modal_hidden_file_mobile" hidden accept="image/jpeg,image/jpg,image/png">
                <label for="input_modal_hidden_file_mobile" class="btn-input-file-desktop">Examinar</label>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_mobile">Guardar</button>
            </form>
        </div>
    </div>
    
    <div class="container-modal" id="container_modal_add_mobile_desktop" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info">
                <div class="modal-info">Proporción 16:9</div>
                <div class="modal-btn-close" id="modal_btn_close_mobile_desktop">X</div>
            </div>
            <div class="container-img">
                <img src="" id="preview_img_modal_mobile_desktop" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer">
            <div class="modal-footer-info">Ajusta la medida para la versión web</div>
            <form class="modal-buttons-desktop" id="form_modal_desktop" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <button type="button" class="btn-return-photo-desktop" id="btn_return_photo_mobile">Volver</button>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_mobile_desktop">Guardar</button>
            </form>
        </div>
    </div>
    
    <div class="container-modal-deletes" id="container_modal_delete" style="display: none">
        <div class="modal-delete">
            <div class="modal-delete-title">Eliminar imagen</div>
            <div class="modal-delete-description">¿Deseas eliminar esta imagen?</div>
            <div class="modal-delete-buttons">
                <div class="modal-delete-btn-close" id="modal_delete_btn_close">Cancelar</div>
                <div class="modal-delete-btn-delete" id="modal_delete_btn_delete">Eliminar</div>
            </div>
        </div>
    </div>

    <div class="container-modal-preview" id="container_modal_preview" style="display: none">
        <div class="modal-preview">
            <div class="modal-preview-div-img"> 
                <img src="" id="modal_preview_img">
            </div>
            <div class="modal-preview-buttons">
                <div class="modal-preview-btn" id="modal_preview_btn">Cerrar</div>
            </div>
        </div>
    </div>

    <div class="container-modal" id="container_modal_edit_desktop" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info"> 
                <div class="modal-info">Proporción 16:9</div>
                <div class="modal-btn-close" id="modal_btn_close_edit_desktop">X</div>
            </div>
            <div class="container-img"> 
                <img src="" id="preview_img_modal_edit_desktop" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer edit">
            <form class="modal-buttons-desktop" id="form_modal_edit_desktop" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <input type="file" name="input_modal_hidden_file_edit_desktop" id="input_modal_hidden_file_edit_desktop" hidden accept="image/jpeg,image/jpg,image/png">
                <label for="input_modal_hidden_file_edit_desktop" class="btn-input-file-desktop">Examinar</label>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_edit_desktop">Guardar</button>
            </form>
        </div>
    </div>

    <div class="container-modal" id="container_modal_edit_mobile" style="display: none">
        <div class="container-modal-photo">
            <div class="container-modal-info"> 
                <div class="modal-info">Proporción 16:9</div>
                <div class="modal-btn-close" id="modal_btn_close_edit_mobile">X</div>
            </div>
            <div class="container-img"> 
                <img src="" id="preview_img_modal_edit_mobile" alt="img-selected" >
            </div>
        </div>
        <div class="container-modal-footer edit">
            <form class="modal-buttons-desktop" id="form_modal_edit_mobile" method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
">
                <div class="hash">
                    <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                </div>
                <input type="file" name="input_modal_hidden_file_edit_mobile" id="input_modal_hidden_file_edit_mobile" hidden accept="image/jpeg,image/jpg,image/png">
                <label for="input_modal_hidden_file_edit_mobile" class="btn-input-file-desktop">Examinar</label>
                <button type="button" class="btn-save-photo-desktop" id="btn_save_photo_edit_mobile">Guardar</button>
            </form>
        </div>
    </div>

    <div class="container-modal-deletes" id="container_modal_info" style="display: none">
        <div class="modal-delete">
            <div class="modal-delete-title">¡Advertencia!</div>
            <div class="modal-delete-description">Has llegado al límite de imágenes para tu slide principal, si deseas agregar una imagen nueva por favor elimina alguna de las anteriores.</div>
            <div class="modal-delete-buttons">
                <div class="modal-delete-btn-close" id="modal_info_btn_close">Cerrar</div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1169330578642c8dff548267_79018002 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1169330578642c8dff548267_79018002',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 type="text/javascript">
        var $path_list                                                          =   '<?php echo $_smarty_tpl->tpl_vars['path_list']->value;?>
'
        var $path_update_flag_slides                                            =   '<?php echo $_smarty_tpl->tpl_vars['path_update_flag_slides']->value;?>
'
        var $path_display                                                       =   '<?php echo $_smarty_tpl->tpl_vars['path_display']->value;?>
'
        var $path_delete_image                                                  =   '<?php echo $_smarty_tpl->tpl_vars['path_delete_image']->value;?>
'
        var $path_add_image                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_add_image']->value;?>
'
        var $path_edit_image                                                    =   '<?php echo $_smarty_tpl->tpl_vars['path_edit_image']->value;?>
'
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/slides.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
