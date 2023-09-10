<?php
/* Smarty version 4.2.0, created on 2023-04-10 11:21:56
  from 'C:\xampp\htdocs\datamax\app\Views\admin\pqr\pqrs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643437a49cf427_47178451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d03ef9aee0388592911c7fa8f49001bdc886791' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\pqr\\pqrs.tpl',
      1 => 1681143713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643437a49cf427_47178451 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1662748030643437a49b9648_88596174', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_789130775643437a49c1204_93212518', 'body');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1140280136643437a49c8021_09252483', "modals");
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1656335679643437a49c8d20_83630048', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../head.tpl');
}
/* {block 'styles'} */
class Block_1662748030643437a49b9648_88596174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1662748030643437a49b9648_88596174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/support.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_907407185643437a49c6593_50224522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="main-support">
            <div class="elements"></div>
            <div class="element-support">
                <span class="txt-support">PQR</span>
                <div class="support-content">
                    <div class="content-search-support">
                        <input class="search_list search-support" id="search_list" type="text"
                            placeholder="Buscar en PQR...">
                        <span class="material-icons-round btn-search-support">search</span>
                    </div>
                    <div class="btn-for-filters" id="btn_filters">
                        <label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
                            <input type="checkbox" id="chk_1" class="chk-filters">
                            <span class="checkbox-text" id="btn_filter_1"> <span class="material-symbols-rounded">done</span>
                                Creada</span>
                        </label>
                        <label class="checkbox-container btn-filter-elements" id="lbl_chk_2">
                            <input type="checkbox" id="chk_2" class="chk-filters">
                            <span class="checkbox-text" id="btn_filter_2"> <span class="material-symbols-rounded">done</span>
                                Recibida</span>
                        </label>
                        <label class="checkbox-container btn-filter-elements" id="lbl_chk_3">
                            <input type="checkbox" id="chk_3" class="chk-filters">
                            <span class="checkbox-text" id="btn_filter_3"> <span class="material-symbols-rounded">done</span>
                                Cerrada</span>
                        </label>
                    </div><br>
                    <div class="container-fluid d-flex justify-content-between mt-40 ml-15">
                        <p class="total-support">Tienes <span id="num"></span> elementos en total</p>
                    </div>
                    <section class="card-list container-fluid pl-25">

                    </section>
                    <div class="container-fluid d-flex pagination pagination_web justify-content-end align-items-center pl-25">
                        <div class="d-flex align-items-end see-elem mr-30">
                            <span class="item-pag">Ítems por página</span>
                            <select class="select-pag" id="page_size">
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <p class="separate"><span class="start-index">0</span>-
                                <span class="end-index">0</span>
                                de <span class="total-items">0</span>
                            </p>
                        </div>
                        <div class="d-flex card_pagination pagination-web">

                        </div>
                    </div>
                    <div class="pagination_movil" id="movil_tablet_pagination">
                        <div class="text-view-elements-movil">
                            <p class="text-view-elements-movil">Mostrando <span class="start-index">0</span> al <span
                                    class="end-index">0</span>
                                de <span class="total-items">0</span>
                                elementos</p>
                        </div>
                        <div class="card_pagination">
                        </div>
                    </div>
                </div>
            </div>
        <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_789130775643437a49c1204_93212518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_789130775643437a49c1204_93212518',
  ),
  'container' => 
  array (
    0 => 'Block_907407185643437a49c6593_50224522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_907407185643437a49c6593_50224522', "container", $this->tplIndex);
?>

    <?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1140280136643437a49c8021_09252483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1140280136643437a49c8021_09252483',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1656335679643437a49c8d20_83630048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1656335679643437a49c8d20_83630048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
js/pqr.js"><?php echo '</script'; ?>
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
