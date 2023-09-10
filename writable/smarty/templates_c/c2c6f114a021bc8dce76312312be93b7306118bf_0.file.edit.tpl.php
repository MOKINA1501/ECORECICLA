<?php
/* Smarty version 4.2.0, created on 2023-04-05 07:27:49
  from 'C:\xampp\htdocs\datamax\app\Views\admin\enterprises\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642d69455cfd42_62296930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c2c6f114a021bc8dce76312312be93b7306118bf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\enterprises\\edit.tpl',
      1 => 1680697509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d69455cfd42_62296930 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980564394642d694559e850_69617738', "container");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1254652826642d69455c3007_01552161', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1148211189642d69455c4037_63825685', "vars_page");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './enterprises.tpl');
}
/* {block "container"} */
class Block_980564394642d694559e850_69617738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_980564394642d694559e850_69617738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-enterprises">
        <div class="elements"></div>
        <div class="element-enterprises">
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_enterprises']->value;?>
" class="label-pointer"><span class="material-icons-round btn-user">corporate_fare</span>Empresa</a></li>
                <li><span class="material-icons-round btn-breadcrumb">chevron_left</span></li>
                <li><a href="#" class="active">Editar empresa</a></li>
            </ul>
            <div class="enterprises-content">
                <span class="txt-form">Editar empresa</span>
                <span class="d-flex" id="screen-em" hidden > </span>
                    <form id="form_edit_enterprise">
                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['id'];?>
"/>
                        <div class="hash">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        </div>
                        <div class="container-view-forms">
                            <p class="subtitle-view">Logo</p>
                            <div id="section_upload_files_form_add" class="d-none">
                                <div class="container-upload-logo" id="container_upload_logo_enterprise">
                                    <label class="label-upload-logo label-cloud-upload"><span class="material-icons-round">cloud_upload</span><span>Cargar imagen</span></label>
                                </div>
                                <p>Tamaño máximo permitido 500 KB.</p>
                                <input type="hidden" id="upload_logo_hdd" name="upload_logo" value="1"/>
                            </div>
                            <br/>
                            <div id="section_prev_files_form_add">
                                <div class="container-logo-uploaded">
                                    <img id="prev_logo_enterprise" class="prev-logo-enterprise" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/enterprises/<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['logo'];?>
">
                                </div>
                                <div class="container-info-logo-uploaded">
                                    <div class="text-content-item-detail">
                                        <span class="material-icons-round icons-detail">upload_file</span>
                                        <span id="name_file_upload" class="p-2"><?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['logo'];?>
</span>
                                    </div>
                                    <div class="text-content-item-detail">
                                        <span id="close_logo_updated" class="material-icons-round icons-detail">cancel</span>
                                    </div>
                                </div>
                            </div>
                            <input type="file" id="upload_logo" name="logo_enterprise" class="d-none">
                            <br/>
                            <p class="subtitle-view">Información de la empresa</p>
                            <div class="container-form-enterprise">
                                <div class="content-inputs">
                                    <div class="col-12-input ctn-input">
                                        <input required class="con-input inp-active" type="text" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['name'];?>
" autocomplete="off">
                                        <label class="label label-inp label-active" for="name">Nombre de la empresa</label>
                                    </div>
                                </div>
                                <div class="content-inputs">
                                    <div class="col-6 ctn-input mr-15">
                                        <input required class="con-input inp-active" type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['email'];?>
" id="email" autocomplete="off">
                                        <label class="label label-inp label-active" for="email">Correo electrónico</label>
                                    </div>
                                    <div class="col-6 ctn-input">
                                        <input class="con-input inp-active" type="text" name="url" value="<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['url'];?>
" id="url" autocomplete="off">
                                        <label class="label label-inp label-active" for="url">Sitio web</label>
                                    </div>
                                </div>
                            </div>
                            <div id="container_form_area" class="container-form-area d-none">
                                <p class="subtitle-view mb-3">Añadir nueva área</p>
                                <div class="content-inputs">
                                    <div class="col-6 ctn-input mr-15">
                                        <input class="con-input" type="text" name="name_area" id="name_area" autocomplete="off">
                                        <label class="label label-inp" for="name_area">Nombre del área</label>
                                    </div>
                                    <div class="col-6 ctn-input">
                                        <input class="con-input" type="text" name="email_area" id="email_area" autocomplete="off">
                                        <label class="label label-inp" for="email_area">Correo electrónico</label>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-6 d-flex justify-content-end">
                                        <button id="btn_save_area" type="button" class="btn-add-area">Añadir área</button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <p class="subtitle-view">Áreas de la empresa</p>
                                <button type="button" id="btn_display_form_area" class="btn-add-area">Añadir área</button>
                            </div>
                            <p class="pt-3">Tienes <span id="total_areas"><?php echo count($_smarty_tpl->tpl_vars['enterprise_inf']->value['areas']);?>
</span> áreas en total</p>
                            <br/>
                            <div id="container_edit_area" class="row d-none">
                                <div class="col-md-6">
                                    <div>
                                        <article class="card-area-options">
                                            <div>
                                                <p id="text_name_area_card_prev" class="title-card-area">Contabilidad</p>
                                                <div class="text-content-card-area pt-2">
                                                    <span class="material-icons-round icons-detail">email</span>
                                                    <span id="text_email_area_card_prev" class="p-2 text-email-card-area">ejemplo@correo.com</span>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-3">
                                                <div class="container-icon-action-edit-area">
                                                    <span class="material-icons-round">edit</span>
                                                </div>
                                                <div class="container-icon-action-edit-area">
                                                    <span class="material-icons-round">delete</span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="container-form-edit-area">
                                        <p class="subtitle-view">Editar área</p>
                                        <br/>
                                        <div class="content-inputs">
                                            <div class="col-12-input ctn-input mr-15">
                                                <input type="hidden" id="id_area_prev" value="0"/>
                                                <input class="con-input inp-active" type="text" name="name_area_edit" id="name_area_edit" autocomplete="off">
                                                <label class="label label-inp label-active" for="name_area_edit">Nombre del área</label>
                                            </div>
                                        </div>
                                        <div class="content-inputs">
                                            <div class="col-12-input ctn-input mr-15">
                                                <input class="con-input inp-active" type="email" name="email_area_edit" id="email_area_edit" autocomplete="off">
                                                <label class="label label-inp label-active" for="email_area_edit">Correo electrónico</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="button" id="btn_save_form_area" class="btn-add-area">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="container_inputs_areas">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['enterprise_inf']->value['areas'], 'area', false, NULL, 'loop_areas', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['area']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['area']->value) {
$_smarty_tpl->tpl_vars['area']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_loop_areas']->value['index']++;
?>
                                    <input name="areas[]" type="hidden" id="input_area_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_loop_areas']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_loop_areas']->value['index'] : null)+1;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['area']->value['id'];?>
$<?php echo $_smarty_tpl->tpl_vars['area']->value['name'];?>
$<?php echo $_smarty_tpl->tpl_vars['area']->value['email'];?>
"/>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                            <section id="container_list_areas_forms" class="container-list-areas-forms">
                            </section>
                            <div class="container-fluid d-flex pagination justify-content-end align-items-center pl-25">
                                <div class="d-flex align-items-end see-elem pagination_web">
                                        <span class="item-pag">Ítems por página</span>
                                        <select class="select-pag" id="page_size_areas_forms">
                                            <option value="12">12</option>
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
                            <div class="row justify-content-end">
                                <div class="d-flex justify-content-end">
                                    <button id="btn_edit_enterprise" type="submit" class="btn-add-enterprise">Editar empresa</button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "container"} */
/* {block "modals"} */
class Block_1254652826642d69455c3007_01552161 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1254652826642d69455c3007_01552161',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_upload_logo" class="modal fade" tabindex="-1"> 
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-body bg-black900">
                    <div class="d-flex justify-content-around">
                        <div></div>
                        <p class="title-modal-uploads-logos">Proporción 1:1</p>
                        <a type="button" class="text-white close-modal-logo" data-bs-dismiss="modal"><span class="material-icons-round">close</span></a>
                    </div>
                    <div style="height: 80%" class="d-flex justify-content-center align-items-center">
                        <div class="container-prev-logo">
                            <img id="logo_prev_form_add" class="logo-prev-modal"/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-around">
                    <div></div>
                    <div class="d-flex justify-content-end gap-3">
                        <a type="button" class="btn-modal-cancel"><label for="upload_logo">Examinar</label></a>
                        <a id="btn_upload_logo_form_add" type="button" class="btn-modal-save">Guardar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <input id="id_enterprise_udrop" type="hidden" value="0">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Editar empresa</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas guardar los cambios realizados?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_modal_edit" class="btn-close">Cancelar</button>
                    <button id="btn_edit" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <input id="index_area_udrop" type="hidden" value="0">
                        <input id="id_area_udrop" type="hidden" value="0">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Eliminar área</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas eliminar esta área?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button id="btn_close_modal_delete_area" class="btn-close">Cancelar</button>
                    <button id="btn_udrop_area" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block "vars_page"} */
class Block_1148211189642d69455c4037_63825685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'vars_page' => 
  array (
    0 => 'Block_1148211189642d69455c4037_63825685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var list_areas_forms_edit = <?php echo json_encode($_smarty_tpl->tpl_vars['enterprise_inf']->value['areas']);?>

        list_areas_forms_edit.forEach((element,index) => {
            index+=1
            const template_card_area_edit = '<article id="card_area_'+index+'" class="card-area-options card-area-added"><div><p id="text_name_area_'+index+'" class="title-card-area">'+element['name']+'</p><div class="text-content-card-area pt-2"><span class="material-icons-round icons-detail">email</span><span id="text_email_area_'+index+'" class="p-2 text-email-card-area">'+element['email']+'</span></div></div><div class="d-flex justify-content-between gap-3"><div class="container-icon-action-edit-area"> <span data-index='+index+' class="material-icons-round edit-card-area">edit</span></div><div class="container-icon-action-edit-area"><span data-index='+index+' data-id='+element['id']+' class="material-icons-round delete-card-area">delete</span></div></article>'
            $list_areas_forms.push(template_card_area_edit)
        })
        
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "vars_page"} */
}
