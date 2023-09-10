<?php
/* Smarty version 4.2.0, created on 2023-04-15 10:28:30
  from 'C:\xampp8-1\htdocs\datamax_gestor\app\Views\admin\dashboard\arrival_documents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_643ac29e422276_54753403',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a992c99c019b39e75aaf74feee04345e384e81d4' => 
    array (
      0 => 'C:\\xampp8-1\\htdocs\\datamax_gestor\\app\\Views\\admin\\dashboard\\arrival_documents.tpl',
      1 => 1681572506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ac29e422276_54753403 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_579708759643ac29e41a1f3_02596111', 'styles');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_473298471643ac29e41c945_48712255', 'body');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1250287950643ac29e4209e1_90969597', "modals");
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1496720105643ac29e420ec6_32398465', 'scripts');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../../head.tpl');
}
/* {block 'styles'} */
class Block_579708759643ac29e41a1f3_02596111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_579708759643ac29e41a1f3_02596111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
css/arrivalDocuments.css">
<?php
}
}
/* {/block 'styles'} */
/* {block "container"} */
class Block_230135114643ac29e41e306_26816248 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div class="hv-main">
			<div class="breadcrumb-arr-docs nav-down" id="nav_btns_arr_docs">
				<div class="container-main-site-arr-docs">
					<span class="material-icons-round">folder</span>
					<label class="">Archivo</label>
				</div>
				<a class="links-breadcrumb-arr-docs btn-arr-docs" href="#">
					<span class="material-icons-round active-breadcrumb">chevron_left</span>
					<label class="link-to-other-page-arr-docs active-breadcrumb ">Correspondencia</label>
				</a>
			</div>
			<label class="tittle-module-arr-docs">Correspondencia</label>
			<div class="container-arr-docs">
				<div class="container-content-arr-docs">
					<div class="header-sticky-arr-docs">
						<div class="header-main-documents">
							<a class="item-header-main-arr-docs active-document">
								<label class="subtittle_documents">Documentos de llegada</label>
							</a>
							<a class="item-header-main-arr-docs">
								<label class="subtittle_documents">Documentos de Salida</label>
							</a>
						</div>
						<div class="header-search-arr-docs">
							<div class="container-main-tools">
								<div class="input-main-search_arr_docs input-arr-docs">
									<input type="text" placeholder="Buscar en datamax..." id="search_arr_doc">
									<span class="material-icons-round">search</span>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['act_add']->value) {?>
									<div class="container-btn-add-arr-docs">
										<a href="<?php echo $_smarty_tpl->tpl_vars['path_view_add']->value;?>
" class="btn-add-arr-docs"><span
												class="material-icons-round">add</span> <label class="txt-new-arriv-doc">Nuevo
												Documento</label></a>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
										<div class="content-cards-arrival-docs m-3">
						<div class="d-flex justify-content-start align-items-center filter-arr-docs">
							<div class="dropdown">
								<a href="#" class="multiple-filter-arr-docs tooltipp" data-bs-toggle="dropdown"
									aria-expanded="false"><span class="material-icons-round btn-arr-docs py-2">filter_alt</span>
									<span class="tooltiptextt">Filtrar</span></a>
								<ul class="dropdown-menu dropdown-filters-arriv" aria-labelledby="dropdownMenuButton1"
									id="filters_for_arr_doc">
									<label class="pl-3 mt-3 pb-3 filter-title-drop-arr-doc"> Ordenar</label>
									<li class="my-2">
										<label class="checkbox-container btn-filter-elements selected-filter-arrival-doc"
											id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_recent" name="filtro_part_1_arr_docs"
												class="chk-filters-part-1">
											<span class="checkbox-text">
												Más recientes</span>
										</label>
									</li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_antique" name="filtro_part_1_arr_docs"
												class="chk-filters-part-1">
											<span class="checkbox-text">
												Más antiguos</span>
										</label>
									</li>
									<div class="division-filter-part-three mt-3 pb-3 pl-3 pr-3"></div>
									<label class="pl-3 mt-3 pb-3 filter-title-drop-arr-doc"> Filtrar por</label>
									<li class="my-2">
										<label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_high_priority" name="filtro_part_2_arr_docs"
												class="chk-filters-part-2" value="1">
											<span class="checkbox-text">
												<span
													class="material-icons-round pr-3 high-priority-filter">fiber_manual_record</span>
												Prioridad alta</span>
										</label>
									</li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_media_priority" name="filtro_part_2_arr_docs"
												class="chk-filters-part-2" value="2">
											<span class="checkbox-text">
												<span
													class="material-icons-round pr-3 media-priority-filter">fiber_manual_record</span>
												Prioridad media</span>
										</label>
									</li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_low_priority" name="filtro_part_2_arr_docs"
												class="chk-filters-part-2" value="3">
											<span class="checkbox-text">
												<span
													class="material-icons-round pr-3 low-priority-filter">fiber_manual_record</span>
												Prioridad baja</span>
										</label>
									</li>
									<div class="division-filter-part-three mt-3 pb-3 pl-3 pr-3"></div>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_pendientes" name="filtro_part_3_arr_docs"
												class="chk-filters-part-3">
											<span class="checkbox-text">
												Pendientes</span>
										</label></li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_sended" name="filtro_part_3_arr_docs"
												class="chk-filters-part-3">
											<span class="checkbox-text">
												Enviados</span>
										</label></li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_readed" name="filtro_part_3_arr_docs"
												class="chk-filters-part-3">
											<span class="checkbox-text">
												Leídos</span>
										</label></li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_nulled" name="filtro_part_3_arr_docs"
												class="chk-filters-part-3">
											<span class="checkbox-text">
												Anulados</span>
										</label></li>
									<li class="my-2"><label class="checkbox-container btn-filter-elements" id="lbl_chk_1">
											<input type="checkbox" id="arr_doc_copy" name="filtro_part_3_arr_docs"
												class="chk-filters-part-3">
											<span class="checkbox-text">
												Copia</span>
										</label></li>
								</ul>
							</div>
															<a class="see-drafts-docs btn-arr-docs d-flex align-items-center px-2" href="<?php echo $_smarty_tpl->tpl_vars['path_drafts']->value;?>
">Ver
									borradores(1)</a>
													</div>
						<div class="container-card-arr-doc">
							<div class="card-arrival-doc mb-3" id="card_arrival_doc">
								<div class="d-flex justify-content-between align-items-center p-3">
									<div class="d-flex justify-content-left align-items-left main-info-arriv-doc">
										<p class="gen-info-arr-doc-prior"><span
												class="material-icons-round">circle</span>Prioridad
											alta
										</p>
										<p class="imp-arriv-doc">CONTRATACIONES HOLDING Max</p>
										<p class="gen-info-arriv-doc">ESE HOSPITAL UNIVERSITARIO DE SANTANDER</p>
										<p class="imp-arriv-doc">N° 0001 - 2023</p>
									</div>
									<div>
										<p class="pb-5 gen-info-arriv-doc">15:45 p.m</p>
										<p class="status-arriv-doc">Pendiente</p>
									</div>
								</div>
							</div>
						</div>
						<div class="pagination_arriv_docs">
							<div class="container-fluid d-flex justify-content-end pl-25">
								<div class="d-flex justify-content-center align-items-center">
									<span class="item-pag pr-3">Ítems por página</span>
									<select class="select-pag-arriv-docs pl-3" id="page_size">
																				<option value="10">10</option>
										<option value="50">50</option>
										<option value="100">100</option>
									</select>
									<p class="separate pr-3 pl-3 d-flex align-items-center"><span
											class="start-index pr-2">0</span>-
										<span class="end-index pr-2 pl-2">0</span>
										de <span class="total-items pr-3">0</span>
									</p>
								</div>
								<div class="card_pagination_arriv_doc d-flex justify-content-center mt-3">

								</div>
							</div>
						</div>
					</div>
					<div class="content-cards-arrival-docs-empty d-flex justify-content-center align-items-center m-3">
						<div class="d-flex justify-content-start align-items-center d-none">
							<div class="my-5">
								<label class="text-advice-empty-arr-docs">Aún no tienes documentos de llegada</label>
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
class Block_473298471643ac29e41c945_48712255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_473298471643ac29e41c945_48712255',
  ),
  'container' => 
  array (
    0 => 'Block_230135114643ac29e41e306_26816248',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_230135114643ac29e41e306_26816248', "container", $this->tplIndex);
?>

	<?php
}
}
/* {/block 'body'} */
/* {block "modals"} */
class Block_1250287950643ac29e4209e1_90969597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'modals' => 
  array (
    0 => 'Block_1250287950643ac29e4209e1_90969597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "modals"} */
/* {block 'scripts'} */
class Block_1496720105643ac29e420ec6_32398465 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1496720105643ac29e420ec6_32398465',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php echo '<script'; ?>
>
			var height = ($(window).height() - 380);
			var resources = '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
			var $path_correspondence = '<?php echo $_smarty_tpl->tpl_vars['path_correspondence']->value;?>
';
			var $path_view_add = '<?php echo $_smarty_tpl->tpl_vars['path_view_add']->value;?>
';
			var $path_view = '<?php echo $_smarty_tpl->tpl_vars['path_view']->value;?>
';
			var $path_view_groups = '<?php echo $_smarty_tpl->tpl_vars['path_view_groups']->value;?>
';
			var $path_view_add_group = '<?php echo $_smarty_tpl->tpl_vars['path_view_add_group']->value;?>
';
			var $path_view_edit_draft = '<?php echo $_smarty_tpl->tpl_vars['path_view_edit_draft']->value;?>
';
			var $path_detail = '<?php echo $_smarty_tpl->tpl_vars['path_detail']->value;?>
';
			var $path_traceability = '<?php echo $_smarty_tpl->tpl_vars['path_traceability']->value;?>
';
			var $resources                                                          =   '<?php echo $_smarty_tpl->tpl_vars['RESOURCES']->value;?>
';
		<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'scripts'} */
}
