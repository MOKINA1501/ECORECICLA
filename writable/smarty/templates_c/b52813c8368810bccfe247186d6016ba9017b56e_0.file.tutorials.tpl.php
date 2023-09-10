<?php
/* Smarty version 4.2.0, created on 2023-04-05 12:00:56
  from 'C:\xampp\htdocs\datamax\app\Views\pages\tutorials.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642da9481e6b81_53717833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b52813c8368810bccfe247186d6016ba9017b56e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\pages\\tutorials.tpl',
      1 => 1680706783,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642da9481e6b81_53717833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_550531818642da9481e0262_04032919', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1258624969642da9481e0d21_09987492', 'body');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2048038967642da9481e3833_52824900', "modals");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1099186580642da9481e3e26_87882402', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../pages/head.tpl');
}
/* {block 'styles'} */
class Block_550531818642da9481e0262_04032919 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_550531818642da9481e0262_04032919',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_2140932200642da9481e2c38_65933391 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div class="overlay none"></div>

        <section class="header-tutorials">
            <div class="header-t-content">
                <div>
                    <h1>¿No sabes como?</h1>
                    <h2>Nosotros te enseñamos</h2>
                </div>
                <div class="ctn-search d-flex align-items-center">
                    <input type="text" id="search_tutorial" class="inp-search" placeholder="Buscar en Tutoriales...">
                    <div class="ctn-icon-s">
                        <span class="icon-search material-symbols-outlined">
                            search
                        </span>
                    </div>
                    <div id="recent_search" class="recent-search none">
                        <div id="user_searchs"></div>
                        <div id="suggest"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="ctn-tutorials">
            <div
                class="container-fluid d-flex pagination justify-content-between align-items-center align-items-center pl-25 mt-4 mb-4 p-0">
                <div id="search_result" class="container-fluid p-0 col-5">
                    <h6>Últimos tutoriales subidos</h6>
                </div>
                <div class="pag_tutorials container-fluid d-flex pagination justify-content-end align-items-center align-items-center pl-25 mt-4 mb-4 p-0 col-7">
                    <div id="main_cont">
                        <p class="m-0 me-4">Mostrando <span class="nums"></span> de <span class="num"></span> elementos</p>
                    </div>
                    <div id="pag_main" class="card_pagination d-flex pagination-tutorials">

                    </div>
                    <div class="ms-3 type-view">
                        <span class="material-icons-outlined me-3" id="grid_view"  data-toggle="tooltip" data-placement="right" title="Vista en cuadrícula">
                            grid_view
                        </span>
                        <span class="material-icons-outlined" id="list_view"  data-toggle="tooltip" data-placement="right" title="Vista en lista">
                            view_list
                        </span>
                    </div>
                </div>
            </div>

            <section class="tutorials-videos grid-view" id="tutorial_videos">
            
            </section>

            <div class="container-fluid d-flex pagination justify-content-end align-items-center align-items-center pl-25 p-0">
                <div>
                    <p class="m-0 me-4">Mostrando <span class="nums"></span> de <span class="num"></span> elementos</p>
                </div>
                <div id="pag_sec" class="d-flex card_pagination_2 pagination-tutorials">

                </div>
            </div>
        </div>


    <?php
}
}
/* {/block "container"} */
/* {block 'body'} */
class Block_1258624969642da9481e0d21_09987492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1258624969642da9481e0d21_09987492',
  ),
  'container' => 
  array (
    0 => 'Block_2140932200642da9481e2c38_65933391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2140932200642da9481e2c38_65933391', "container", $this->tplIndex);
?>

<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_2048038967642da9481e3833_52824900 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_2048038967642da9481e3833_52824900',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1099186580642da9481e3e26_87882402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1099186580642da9481e3e26_87882402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var  path_tutorials                                                     =   '<?php echo $_smarty_tpl->tpl_vars['path_tutorials']->value;?>
';
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
