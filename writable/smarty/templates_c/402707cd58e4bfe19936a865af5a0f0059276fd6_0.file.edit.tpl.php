<?php
/* Smarty version 4.2.0, created on 2023-04-05 07:18:10
  from 'C:\xampp\htdocs\datamax\app\Views\admin\functionalities\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642d670204c656_97684697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402707cd58e4bfe19936a865af5a0f0059276fd6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\functionalities\\edit.tpl',
      1 => 1680697085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d670204c656_97684697 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_300069446642d67020479e2_57019378', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './functionalities.tpl');
}
/* {block "container"} */
class Block_300069446642d67020479e2_57019378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_300069446642d67020479e2_57019378',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-users">
        <div class="elements"></div>
            <div class="element-users">
                <ul class="breadcrumb breadcrumb-functionality">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_functionalities']->value;?>
" class="text-back-ubication">
                            <span class="material-icons-round btn-user">interests</span>
                            Funcionalidades
                        </a>
                    </li>
                    <li>
                        <span class="material-icons-round btn-breadcrumb">chevron_left</span>
                    </li>
                    <li>
                        <a href="" class="text-ubication  active">
                            Editar funcionalidad
                        </a>
                    </li>
                </ul>        
                <div class="main-container-all-add">
                    <div class="container-form-add-functionality">
                        <div class="header-title-add">
                            <span class="txt-add-funcionalities">Editar funcionalidad</span>
                        </div>
                        <form id="form_edit_functionality" class="form-add-functionality"  method="post" action="<?php echo $_smarty_tpl->tpl_vars['path_edit_functionality']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                            <input id="id_functionality" name="id_functionality" value="<?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['id'];?>
"  style="display: none;">
                            <label class="title-of-form-add">Información de la funcionalidad</label>
                            <span class="d-flex" id="screen-f" hidden > </span>
                            <div class="content-inputs-functionality">
                                <div class="input-name-functionality ctn-input">
                                    <input class="con-input" type="text" name="name_functionality_edit" id="name_functionality_edit" value="<?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['name'];?>
" autocomplete="off">
                                    <label class="label label-inp label-active" for="name_functionality_edit">Nombre de funcionalidad</label>
                                </div>
                            </div>
                            <label class="title-of-form-add">Contenido</label>
                            <div id="container_input_image_for_defect" class="container-button-add-image-for-functionality" style="display: none;">
                                <input type="file" id="input_edit_image_of_functionality" style="display: none;">
                                <button class="button-add-image-for-functionality" id="edit_image_of_functionality" type="button">
                                    <div class="text-button-add-functionality">
                                        <span id="icon-download" class="material-icons-round">cloud_upload</span>
                                        <label id="text-download">Cargar Imagen</label>
                                    <div>
                                </button>
                            </div>
                            <div class="container-image-for-functionality" id="container_image_for_functionality">
                                <div class="button-edit-screen" id="button_edit_image_screen"></div>
                                <div class="preview-container-image">
                                    <img id="image_preview_edit" src="<?php echo RESOURCES;?>
files/functionalities//<?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['photo'];?>
">
                                </div>
                            </div>
                            <input type="text" name="name_image" id="input_name_to_send_image_edit" style="visibility: hidden;width:1px"  value="<?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['photo'];?>
" overwrite>
                            <div class="container-img-file-name-edit">
                                <div id="name_file_edit" class="name-file-edit" >
                                    <span id="icon-download" class="material-icons-round">description</span>
                                    <label id="info_file_edit" class="information-of-size-max-img"><?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['photo'];?>
</label>
                                </div>
                                <label id="information_of_size_max_img" class="information-of-size-max-img"  style="display:none;">Tamaño máximo permitido 500kb*</label>
                                <button type="button" class="button-reset-image-file" id="button_reset_file_image_in_edit">
                                    <span class="material-icons-round">cancel</span>
                                </button>
                            </div>
                            <label id="init_change_image" data-name="<?php echo $_smarty_tpl->tpl_vars['functionality_inf']->value['photo'];?>
" data-index="0" style="display: none;"></label>
                            <input type="text" name="image" id="input_image_to_send_edit" style="display: none;" value="" overwrite>
                            <div class="container-button-add-funtionality">
                                <button type="button" id="save_edit_information_of_funcionality" class="button-save-functionality button-add" disabled>Guardar<div class="invisible-element" id="invisible_element_edit" style="display:none"></button>
                            </div>
                        </form>
                    <div>
                </div> 
            </div>   
        </div>
    </div>
<?php
}
}
/* {/block "container"} */
}
