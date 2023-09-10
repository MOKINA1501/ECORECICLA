<?php
/* Smarty version 4.2.0, created on 2023-04-05 07:06:45
  from 'C:\xampp\htdocs\datamax\app\Views\admin\functionalities\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642d64553b5626_21259142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a5627c16eda5336ce6514bd40c77a31cfddc225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\functionalities\\add.tpl',
      1 => 1680696364,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d64553b5626_21259142 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_919851542642d64553b1012_03746589', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './functionalities.tpl');
}
/* {block "container"} */
class Block_919851542642d64553b1012_03746589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_919851542642d64553b1012_03746589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-users">
        <div class="elements"></div>
            <div class="element-users">
                <ul class="breadcrumb breadcrumb-functionality">
                    <li>
                        <a id="back_to_functionalities" class="text-back-ubication">
                            <span class="material-icons-round btn-user">interests</span>
                            Funcionalidades
                        </a>
                    </li>
                    <li>
                        <span class="material-icons-round btn-breadcrumb">chevron_left</span>
                    </li>
                    <li>
                        <a href="" class="text-ubication  active">
                            Nueva funcionalidad
                        </a>
                    </li>
                </ul>     
                <div class="main-container-all-add">
                    <div class="container-form-add-functionality">
                        <div class="header-title-add">
                            <span class="txt-add-funcionalities">Nueva funcionalidad</span>
                        </div>
                        <form class="form-add-functionality" id="formulario_add_functionality" action="<?php echo $_smarty_tpl->tpl_vars['path_add_functionality']->value;?>
" method="POST">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                            <label class="title-of-form-add">Información de la funcionalidad</label>
                            <span class="d-flex" id="screen-f" hidden > </span>
                            <span class="d-flex" id="add-func" hidden > </span>
                            <div class="content-inputs-functionality">
                                <div class="input-name-functionality ctn-input">
                                    <input id="input_name_functionality_add" class="con-input" type="text" name="name"  autocomplete="off">
                                    <label class="label label-inp" for="input_name_functionality_add">Nombre de funcionalidad</label>
                                </div>
                            </div>
                            <label class="title-of-form-add">Contenido</label>
                            
                            <div class="container-button-add-image-for-functionality" id="container_button_add_image_for_functionality">
                                <input type="file" id="input_add_image_of_functionality" style="display: none;">
                                <button class="button-add-image-for-functionality" id="add_image_of_functionality" type="button">
                                    <div class="text-button-add-functionality">
                                        <span id="icon-download" class="material-icons-round">cloud_upload</span>
                                        <label id="text-download">Cargar Imagen</label>
                                    <div>
                                </button>
                            </div>
                            <div class="container-image-for-functionality" id="view_preview_image_container" style="display: none;">
                                <div class="preview-container-image">
                                    <img src="" alt="imagen-previzualizada" id="imagen_previzualizada">
                                </div>
                            </div>
                            <input type="text" name="name_image" id="input_name_image_add" style="visibility:hidden;width:1px;height: 1px" overwrite>
                            <div class="text-information-size">
                                <label id="information_of_size_max_img" class="information-of-size-max-img">Tamaño máximo permitido 500kb*</label>
                                <div class="reset-input-image-add" id="container_info_image" style="display: none;">
                                    <label class="name-info-file" id="info_file_add"></label>
                                    <button type="button" id="button_reset_all_add" class="button-reset-image-file" >
                                        <span class="material-icons-round">cancel</span>
                                    </button>
                                </div>  
                            </div>
                            <input type="text" name="image" id="input_image_to_send" style="display:none;" overwrite>
                            <div class="container-button-add-funtionality">
                                <button type="button" id="save_information_functionality" class="button-save-functionality button-add" disabled>Crear funcionalidad<div class="invisible-element" id="invisible_element_add" style="display:none"></div></button>
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
