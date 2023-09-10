<?php
/* Smarty version 4.2.0, created on 2023-04-04 17:57:37
  from 'C:\xampp\htdocs\datamax\app\Views\admin\frequent_questions\frequent_questions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642cab61d3e9d9_83730792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81e9b52f1ad11947fcfe923d1dac6079da3a2d74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\frequent_questions\\frequent_questions.tpl',
      1 => 1680649047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642cab61d3e9d9_83730792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1008212462642cab61d37357_51756946', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_760490592642cab61d3a938_18655517', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_420609506642cab61d3d6b1_79434869', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2062867791642cab61d3dc68_41781111', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_1008212462642cab61d37357_51756946 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1008212462642cab61d37357_51756946',
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
class Block_268105161642cab61d3c745_90578374 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="elements"></div>
            <div class="element-faqs">
                <span class="txt-faqs">Preguntas frecuentes</span>
                <div class="users-content">
                    <div class="search-add-options-container p-0 d-flex flex-row justify-content-end">
                        <div class="search-faqs-container">
                            <input class="search_list search-users" type="text" placeholder="Buscar en preguntas frecuentes..." id="input_search_faqs">
                            <span class="material-icons-round icon-search-faqs">search</span>
                        </div>
                        <div class="add-new-faq-container" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Nueva pregunta frecuente" data-bs-trigger="hover">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_add']->value;?>
" class="btn-user-add d-flex align-items-center justify-content-center">
                                <span class="material-icons-round btn-icon">add</span>
                            </a> 
                        </div>                
                    </div>
                    <div class="total-faqs">
                        <p class="total-faqs-label" id="n_elements"></p>
                    </div> 
                    <div class="faqs-container-scroll">                    
                        <section class="faq-cards-container mb-3" id="faqs_list_container">
                        </section>
                        <div id="pagination" class="d-none">
                            <div class="container-fluid d-flex m-b-20 justify-content-end align-items-center" id="pagination-desktop">
                                <div class="d-flex flex-row justify-content-center align-items-center see-elem">
                                    <span class="item-pag">Ítems por página</span>
                                    <div class="dropup-center dropup">
                                        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="select_items_per_page">
                                            <div class="d-flex justify-content-evenly align-items-center">
                                                <span class="number-pagination-desk">10</span>
                                                <span class="material-icons md-26">expand_more</span>
                                            </div>
                                        </button>
                                        <ul class="dropdown-menu dropdown-items-per-page">
                                            <li onclick="dropdownPageSize('10')"><a class="dropdown-item text-left h-100 d-flex align-items-center">10</a></li>
                                            <li onclick="dropdownPageSize('20')"><a class="dropdown-item text-left h-100 d-flex align-items-center">20</a></li>
                                            <li onclick="dropdownPageSize('30')"><a class="dropdown-item text-left h-100 d-flex align-items-center">30</a></li>    
                                            <li onclick="dropdownPageSize('40')"><a class="dropdown-item text-left h-100 d-flex align-items-center">40</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <p class="pages-showing-display" id="pages_info">1 - 10 de 10</p>
                                    </div>
                                    <div class="pagination-btn-container">
                                        <div class="pagination-btn">
                                            <span class="material-icons md-24" id="pag_btn_skip_previous">skip_previous</span>
                                        </div>
                                        <div class="pagination-btn">
                                            <span class="material-icons md-24" id="pag_btn_navigate_before">navigate_before</span>
                                        </div>
                                        <div class="pagination-btn">
                                            <span class="material-icons md-24" id="pag_btn_navigate_next">navigate_next</span>
                                        </div>
                                        <div class="pagination-btn">
                                            <span class="material-icons md-24" id="pag_btn_skip_next">skip_next</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex card_pagination"></div>
                            </div> 
                            <div class="" id="pagination-tab-mob">
                                <div class="d-flex flex-row justify-content-between">
                                    <p class="total-users" id="pages_info_mobile">Mostrando de 1 a 4 de 10 elementos</p>
                                    <div class="pagination-tablet-btn-container">
                                        <div class="pagination-tablet-btn">
                                            <span class="material-icons md-24-blue br-gray-blue" id="pag_btn_tab_navigate_before">navigate_before</span>
                                        </div>
                                        <p class="total-users-tablet" id="pages_info_mobile_2">1 de 10</p>
                                        <div class="pagination-tablet-btn">
                                            <span class="material-icons md-24-blue bl-gray-blue" id="pag_btn_tab_navigate_next">navigate_next</span>
                                        </div>
                                    </div>
                                </div>
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
class Block_760490592642cab61d3a938_18655517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_760490592642cab61d3a938_18655517',
  ),
  'container' => 
  array (
    0 => 'Block_268105161642cab61d3c745_90578374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268105161642cab61d3c745_90578374', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_420609506642cab61d3d6b1_79434869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_420609506642cab61d3d6b1_79434869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <input type="hidden" id="hidden_drop_faq">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="container-fluid">
                        <div class="container-fluid mb-2">
                            <h5 class="modal-title">Eliminar pregunta frecuente</h5>
                        </div>
                        <div class="container-fluid">
                            <p class="modal-msg">¿Deseas eliminar esta pregunta frecuente?</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end btn-modals">
                    <button type="button" class="btn-close" data-bs-dismiss="modal">Cancelar</button>
                    <button id="btn_drop_faq" class="btn-udrop">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_2062867791642cab61d3dc68_41781111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2062867791642cab61d3dc68_41781111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/frequent_questions.js"><?php echo '</script'; ?>
>    
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.dotdotdot/4.1.0/dotdotdot.js" integrity="sha512-y3NiupaD6wK/lVGW0sAoDJ0IR2f3+BWegGT20zcCVB+uPbJOsNO2PVi09pCXEiAj4rMZlEJpCGu6oDz0PvXxeg==" crossorigin="anonymous" referrerpolicy="no-referrer"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        let pathFaqsList                                                        =   '<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_get_list']->value;?>
'
        let pathFaqsDrop                                                        =   '<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_drop']->value;?>
'
        let pathFaqsEdit                                                        =   '<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_edit']->value;?>
'
        let pathFaqsVisualize                                                   =   '<?php echo $_smarty_tpl->tpl_vars['path_frequent_questions_visualize']->value;?>
'
    <?php echo '</script'; ?>
>    
<?php
}
}
/* {/block 'scripts'} */
}
