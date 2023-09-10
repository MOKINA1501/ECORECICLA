<?php
/* Smarty version 4.2.0, created on 2023-04-04 14:36:48
  from 'C:\xampp\htdocs\datamax\app\Views\admin\frequent_questions\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642c7c50e07ae7_48862699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9483ed35fea6b2bf72b77f7aa7ad4703fe2f7d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\frequent_questions\\edit.tpl',
      1 => 1680612018,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c7c50e07ae7_48862699 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10013305642c7c50e02803_33381799', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413615060642c7c50e04c34_35477574', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1293798902642c7c50e06fe0_84698485', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_627428592642c7c50e07402_12884518', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_10013305642c7c50e02803_33381799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_10013305642c7c50e02803_33381799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/frequent_questions.css">    
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_32914010642c7c50e063c9_12251058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element-faqs">
                <ul class="breadcrumb">
                    <li class="breadcrumb-go-back-label pe-2"><a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"><span class="material-icons btn-user ps-2">help</span>Preguntas frecuentes</a></li>
                    <li class="d-flex align-items-center"><span class="material-icons-round btn-breadcrumb ps-0">chevron_left</span><a href="#" class="pt-1 active">Editar pregunta frecuente</a></li>
                </ul>
                <div class="users-content full-height">
                    <span class="txt-new-faq-title">Editar pregunta frecuente</span>
                    <span class="txt-new-faq-subtitle">Información de la pregunta</span>
                    <form id="edit_faq_form" class="h-100">  
                        <?php echo $_smarty_tpl->tpl_vars['faq_edit']->value;?>

                    </form>                                                                                                                                                                                                                                                                                  
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1413615060642c7c50e04c34_35477574 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1413615060642c7c50e04c34_35477574',
  ),
  'container' => 
  array (
    0 => 'Block_32914010642c7c50e063c9_12251058',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32914010642c7c50e063c9_12251058', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1293798902642c7c50e06fe0_84698485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1293798902642c7c50e06fe0_84698485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_edit" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <input type="hidden" id="hidden_drop_faq">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Guardar cambios</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas guardar los cambios esta pregunta frecuente?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">Cancelar</button>
                    <button id="btn_drop_faq" class="btn-udrop" onclick="editPost()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_627428592642c7c50e07402_12884518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_627428592642c7c50e07402_12884518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/frequent_questions.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        let listPath                                                            =  "<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"
        let editPath                                                            =  "<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_edit_faq']->value;?>
"
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
