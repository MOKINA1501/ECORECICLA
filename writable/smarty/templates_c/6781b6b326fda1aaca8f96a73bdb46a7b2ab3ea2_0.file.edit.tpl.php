<?php
/* Smarty version 4.2.0, created on 2023-04-05 07:23:45
  from 'C:\xampp\htdocs\datamax\app\Views\admin\tutorials\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642d68515d7422_84980704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6781b6b326fda1aaca8f96a73bdb46a7b2ab3ea2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\tutorials\\edit.tpl',
      1 => 1680697385,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642d68515d7422_84980704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1599015191642d68515cfe30_61642656', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './tutorials.tpl');
}
/* {block "container"} */
class Block_1599015191642d68515cfe30_61642656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_1599015191642d68515cfe30_61642656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main-users">
        <div class="element"></div>
        <div class="element-users">
            <ul class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
"><span
                            class="material-icons-round btn-user">subscriptions</span>Tutoriales</a></li>
                <li><span class="material-icons-round btn-breadcrumb">chevron_left</span></li>
                <li><a href="#" class="active">Editar tutorial</a></li>
            </ul>
            <div class="users-content">
                <span class="d-flex txt-form">Nuevo tutorial </span>
                <span class="d-flex info-form-tutorials-bold">Documentación </span>
                <span class="d-flex" id="screen-t" hidden > </span>
                <span class="d-flex info-form-tutorials">Este archivo acompañará al tutorial para que los usuario puedan
                    descargarlo y
                    visualizar el apoyo. </span>

                <form id="form_edit_tutorials" class="mt-4 ml-25 mr-25" method="POST"  enctype="multipart/form-data" action="<?php echo $_smarty_tpl->tpl_vars['path_edit_tutorial']->value;?>
">
                    <div class="hash">
                        <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                    </div>
                    <input class="ignore" type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['tutorial_inf']->value['id'];?>
">
                    <input class="ignore" type="hidden" name="name" id="name_upload" value="<?php echo $_smarty_tpl->tpl_vars['tutorial_inf']->value['name'];?>
">

                    <div id="drop-area" class="drop-area">
                        <p>
                            <span class="material-symbols-rounded">cloud_upload</span>
                            Cargar archivo PDF
                        </p>
                        <input type="file" name="file" id="fileElem" accept="application/pdf"
                            onchange="handleFiles(this.files, '<?php echo $_smarty_tpl->tpl_vars['pdfUrl']->value;?>
')">
                    </div>

                    <div id="gallery">
                        <div id="view_pdf"></div>
                        <div class="info-upload-pdf">
                            <div class="btn-file">
                                <span id="file-name"></span>
                                <span id="file-weight"></span>
                                <button id="remove-file" class="not-style-button">
                                    <span class="material-icons-round">
                                        cancel
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <span class="d-flex info-form-tutorials mar-l-0">Tamaño máximo permitido 500KB* </span>
                    <span class="d-flex info-form-tutorials-bold  mar-l-0">Información del video </span>
                    <span class="d-flex info-form-tutorials mar-l-0 ">Recuerda que debes generar el link desde el botón Compartir en YouTube. </span>
                    <div class="content-inputs mar-t-25">
                        <div class="col-12 ctn-input">
                            <input class="con-input" type="text" name="url_video" value="<?php echo $_smarty_tpl->tpl_vars['tutorial_inf']->value['url_video'];?>
"
                                id="url_video" autocomplete="off">
                            <label class="label label-inp" for="url_video">URL</label>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="item-1">
                            <div class="format-pre-view">
                                <div class="card_tutorial view_add">
                                    <span class="d-flex info-form-tutorials-bold info-pre-card">Previsualización link</span>
                                    <div class="card-img-top">
                                        <img class="card-img-miniature" id="videoMiniature" alt="Miniatura del video">
                                        <span class="card-img-time" id="videoDuration"></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-title" id="videoTitle"></div>
                                        <p class="card-text" id="videoDescription"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-2">
                            <div class="content-inputs">
                                <div class="col-12 ctn-input mr-15">
                                    <input class="con-input" type="text" name="name" id="name"
                                        value="<?php echo $_smarty_tpl->tpl_vars['tutorial_inf']->value['name'];?>
">
                                    <label class="label label-inp label-active" for="name">TITULO</label>
                                </div>
                            </div>
                        </div>
                        <div class="item-3">
                            <div class="row justify-content-end">
                                <div class="col-6 d-flex justify-content-end" id="content-btn">
                                    <button id="btn_edit_tutorials" type="submit" class="btn-add-user">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php echo '<script'; ?>
>
            var $pdfUrl                                                         =   '<?php echo $_smarty_tpl->tpl_vars['pdfUrl']->value;?>
';
        <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "container"} */
}
