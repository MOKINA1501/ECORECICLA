<?php
/* Smarty version 4.2.0, created on 2023-04-04 15:23:12
  from 'C:\xampp\htdocs\datamax\app\Views\admin\enterprises\detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_642c873003d124_44844537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bdbaacbdcd23aa3d1c4f6ca949dc6305b364fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\datamax\\app\\Views\\admin\\enterprises\\detail.tpl',
      1 => 1680638206,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642c873003d124_44844537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1812343586642c8730038078_92677320', "container");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, './enterprises.tpl');
}
/* {block "container"} */
class Block_1812343586642c8730038078_92677320 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'container' => 
  array (
    0 => 'Block_1812343586642c8730038078_92677320',
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
                <li><a href="#" class="active">Detalle de empresa</a></li>
            </ul>
            <div class="enterprises-content">
                <span class="txt-form">Detalle de empresa</span>
                <div class="container-detail-enterprise">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="d-flex justify-content-center align-items-center">
                                <img class="logo-enterpirse-card-detail" width="190" height="190" src="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
files/enterprises/<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['logo'];?>
"/>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="container-description-enterprise">
                                <div>
                                    <p class="title-enterprise-detail"><?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['name'];?>
</p>
                                    <div class="text-content-item-detail">
                                        <span class="material-icons-round icons-detail">email</span>
                                        <span class="p-2"><?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['email'];?>
</span>
                                    </div>
                                    <?php if (!empty($_smarty_tpl->tpl_vars['enterprise_inf']->value['url'])) {?>
                                        <div class="text-content-item-detail">
                                            <span class="material-symbols-rounded icons-detail">captive_portal</span>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['url'];?>
" target="_blank" class="text-link p-2"><?php echo $_smarty_tpl->tpl_vars['enterprise_inf']->value['url'];?>
</a>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-areas-detail">
                    <p class="subtitle-view">Áreas</p>
                    <div class="content-search-areas">
                        <input class="search_list_areas search-areas" type="text" placeholder="Buscar en áreas...">
                        <span class="material-icons-round btn-search-areas">search</span> 
                    </div>
                </div>
                <p class="total-areas">Tienes <span id="num">0</span> áreas en total</p>
                <div id="container_list_of_areas_grid">
                    <section id="list_of_areas_grid" class="container-list-areas"></section>
                </div>
                <div class="container-fluid d-flex pagination justify-content-end align-items-center pl-25">
                    <div class="d-flex align-items-end see-elem pagination_web">
                        <span class="item-pag">Ítems por página</span>
                        <select class="select-pag" id="page_size_areas">
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
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "container"} */
}
