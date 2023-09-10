<?php
/* Smarty version 4.2.0, created on 2023-03-16 11:41:31
  from 'C:\xampp\htdocs\datamax_copia\app\Views\admin\users\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_641346bbb5fb08_29677033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5830a00e2b4cd6240c5994924f94383ec081706' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax_copia\\app\\Views\\admin\\users\\users.tpl',
      1 => 1678982730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641346bbb5fb08_29677033 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_619355800641346bbb59f09_61404274', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1590400931641346bbb5a890_08358637', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1213008485641346bbb5d9f2_19840848', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1960808638641346bbb5de49_30887537', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_619355800641346bbb59f09_61404274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_619355800641346bbb59f09_61404274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_599372169641346bbb5bb92_20753332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-container">
            <div class="element">
                <div class="adm-cont-icon">
                    <div>
                        <i class="icon-mod fa-solid fa-user"></i>
                    </div>
                    <div>
                        <span class="leg-mod">Usuarios</span>
                    </div>
                </div>
                <div class="container-fluid d-flex justify-content-between m-0 p-0">
                    <div class="d-flex align-items-end see-elem">
                        <span>Ver
                            <select class="select-pag" id="page_size">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            elementos</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="ctn-search">
                            <i class="icon-search fa-solid fa-magnifying-glass"></i>
                            <input class="search_list" type="text" placeholder="Buscar nombre, fecha, correo">
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path_add']->value;?>
" class="btn-adm">
                            <i class="fa-solid fa-plus"></i>
                            <span>Nuevo usuario</span>
                        </a>
                    </div>
                </div>
                <section class="card-list container-fluid pl-25">

                </section>

                <div class="container-fluid d-flex pagination justify-content-between align-items-center pl-25">
                    <div>
                        <p>Mostrando <span id="nums"></span> de <span id="num"></span> elementos</p>
                    </div>
                    <div class="d-flex card_pagination">

                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1590400931641346bbb5a890_08358637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1590400931641346bbb5a890_08358637',
  ),
  'container' => 
  array (
    0 => 'Block_599372169641346bbb5bb92_20753332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599372169641346bbb5bb92_20753332', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1213008485641346bbb5d9f2_19840848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1213008485641346bbb5d9f2_19840848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="modal_delete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body pd-25">
                    <div class="d-flex justify-content-center align-items-center mg-b-20 mg-t-45">
                        <i class="fas fa-trash-alt icon-modal"></i>
                    </div>
                    <p class="text-modal">¿Estas seguro/a?</p>
                    <p class="dtm-confirm">¿Estas seguro/a que deseas eliminar este usuario?</p>
                    <input type="hidden" class="d-none" id="user_drop">
                    <div class="col-lg-12 mg-t-20 d-flex justify-content-center align-items-center">
                        <button type="button" id="btn_confirm_delete"
                            class="btn-confirm waves-effect waves-light">Aceptar</button>
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
class Block_1960808638641346bbb5de49_30887537 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1960808638641346bbb5de49_30887537',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/users.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        <?php if ((isset($_smarty_tpl->tpl_vars['path_list']->value))) {?>
            var $path_list                                                      =   '<?php echo $_smarty_tpl->tpl_vars['path_list']->value;?>
';
        <?php }?>
        var $resources                                                          =   '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
