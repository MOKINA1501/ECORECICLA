<?php
/* Smarty version 4.2.0, created on 2023-04-04 14:25:19
  from 'C:\xampp\htdocs\datamax\app\Views\admin\frequent_questions\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642c799f3498a8_66506690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc336209c40a7628fc149f6bc8e5047c379564c5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\frequent_questions\\add.tpl',
      1 => 1680610047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c799f3498a8_66506690 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92287884642c799f344ed2_75102530', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_859178256642c799f346db0_32661353', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_239020913642c799f348df0_64567398', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1684854148642c799f3491d4_72397344', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_92287884642c799f344ed2_75102530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_92287884642c799f344ed2_75102530',
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
class Block_1741241486642c799f3481f2_00406227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element-faqs">
                <ul class="breadcrumb">
                    <li class="breadcrumb-go-back-label pe-2"><a onclick="btnBack()"><span class="material-icons btn-user ps-2">help</span>Preguntas frecuentes</a></li>
                    <li class="d-flex align-items-center"><span class="material-icons-round btn-breadcrumb ps-0">chevron_left</span><a href="#" class="pt-1 active">Nueva pregunta frecuente</a></li>
                </ul>
                <div class="users-content full-height">
                    <span class="txt-new-faq-title">Nueva pregunta frecuente</span>
                    <span class="txt-new-faq-subtitle">Información de la pregunta</span>
                    <form id="new_faq_form" class="h-100">   
                        <div class="hash">
                            <?php echo $_smarty_tpl->tpl_vars['csrf_field']->value;?>

                        </div>                 
                        <div class="content-inputs">
                            <div class="col-12 ctn-input pe-0">
                                <input class="con-input" type="text" name="faq_question" id="faq_question" autocomplete="off">
                                <label class="label label-inp" for="faq_question">Escribe tu pregunta</label>
                            </div>
                        </div>
                        <div class="content-inputs">
                            <div class="col-12 ctn-input pe-0">
                                <textarea class="con-input" type="textarea" name="faq_answer" id="faq_answer" autocomplete="off"></textarea>
                                <label class="label label-inp" for="faq_answer">Escribe tu respuesta</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end" id="create-btn">
                            <div class="btn-action-sp-form spinner d-none"></div>
                            <button id="btn_add_faq" type="submit" class="btn-add-user op-disabled" disabled>Crear pregunta</button>
                        </div>
                    </form>                                                                                                                                                                                                                                                                                  
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_859178256642c799f346db0_32661353 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_859178256642c799f346db0_32661353',
  ),
  'container' => 
  array (
    0 => 'Block_1741241486642c799f3481f2_00406227',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1741241486642c799f3481f2_00406227', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_239020913642c799f348df0_64567398 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_239020913642c799f348df0_64567398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_go_back" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <input type="hidden" id="hidden_drop_faq">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Parece que aún no has terminado</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Estás seguro que deseas salir?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">Cancelar</button>
                    <button id="btn_drop_faq" class="btn-udrop" onclick="modalBtnBack()">Salir</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1684854148642c799f3491d4_72397344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1684854148642c799f3491d4_72397344',
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
        let createPath                                                          =  "<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_create']->value;?>
"
        let listPath                                                            =  "<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions']->value;?>
"
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
