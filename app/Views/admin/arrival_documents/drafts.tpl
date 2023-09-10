{extends file="./arrival_documents.tpl"}
{block name='body'}
	{block name="body_container"}
		<div class="main-arr-docs">
			<div class="content-arr-docs">
				<div class="breadcrumb-arr-docs pb-5">
					<div class="container-main-site-arr-docs">
						<span class="material-icons-round">folder</span>
						<label class="">Archivo</label>
					</div>
					<div class="links-breadcrumb-arr-docs mode-tablet-arr-doc btn-arr-docs">
						<span class="material-icons-round">chevron_left</span>
						<a class="link-to-other-page-arr-docs" href="{$path_correspondence}">Correspondencia</a>
					</div>
					<div class="links-breadcrumb-arr-docs mode-tablet-arr-doc btn-arr-docs">
						<span class="material-icons-round active-breadcrumb-arr-docs">chevron_left</span>
						<a class="link-to-other-page-arr-docs active-breadcrumb-arr-docs" href="#">Borradores</a>
					</div>
					<div class="dropdown go-routes btn-arr-docs">
						<a href="#" class="d-flex pr-3" data-bs-toggle="dropdown" aria-expanded="false"><span <span
								class="material-icons-round">chevron_left</span><label>...</label></a>
						<ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
							<li class="mt-1 pl-2"><a class="link-to-other-page-arr-docs" href="{$path_view_groups}">Tus
									grupos</a>
							</li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="{$path_view_add}">Nuevo
									documento</a></li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs"
									href="{$path_correspondence}">Documentos de llegada</a></li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs"
									href="{$path_correspondence}">Correpondencia</a></li>
						</ul>
					</div>
				</div>
				<div class="container-arr-docs">
					<div class="container-content-arr-docs p-3">
						<div class="d-flex justify-content-start align-items-center">
							<a href="{$path_correspondence}"><span class="material-icons-round btn-arr-docs">
									arrow_back</span>
							</a>
							<label class="pl-3 title-view-arr-docs">Borradores</label>
						</div>
						<div class="header-search-arr-docs header-sticky-arr-docs">
							<div class="container-main-tools">
								<div class="input-main-search_arr_docs input-arr-docs">
									<input type="search" placeholder="Buscar en borradores...">
									<span class="material-icons-round">search</span>
								</div>
							</div>
						</div>
						{* MONICA YULIZA ARIAS MARTINEZ *}
						<div class="content-cards-drafts-arrival-docs">
							<div class="d-flex justify-content-start align-items-center px-3 pb-3">
								<div class="dropdown">
									<a href="#" class="multiple-filter-arr-docs tooltipp pr-4" data-bs-toggle="dropdown"
										aria-expanded="false"><span
											class="material-icons-round btn-arr-docs py-2">filter_alt</span>
										<span class="tooltiptextt">Filtrar</span></a>
									<ul class="dropdown-menu dropdown-filters-arriv-drafts"
										aria-labelledby="dropdownMenuButton1" id="filters_for_arr_doc">
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
									</ul>
								</div>
								<span>Tienes <span class="cant-draft-arr-docs">5</span> borradores guardados</span>

							</div>
							<div class="content-cards-drafts-arr-docs">
								<div class="card-drafts-arriv-doc mb-3 m-3">
									<div class="d-flex justify-content-between align-items-center p-3">
										<div id="card_drafts_arriv_doc">
											<div class="d-flex justify-content-left align-items-left main-info-arriv-doc">
												<p class="gen-info-arriv-doc"><span
														class="material-icons-round">circle</span>Prioridad
													alta
												</p>
												<p class="imp-arriv-doc">Contrataciones HOLDING Max</p>
												<p class="gen-info-arriv-doc">ESE HOSPITAL UNIVERSITARIO DE SANTANDER</p>
											</div>
										</div>
										<div>
											<p>15:45 p.m</p>
											<a href="#" class="d-flex justify-content-end pt-2"><span
													class="material-symbols-rounded btn-arr-docs">delete</span></a>
										</div>
									</div>
								</div>
							</div>
							<div class="container-fluid d-flex pagination_arriv_docs justify-content-end pl-25">
								<div class="d-flex justify-content-center align-items-center">
									<span class="item-pag pr-3">Ítems por página</span>
									<select class="select-pag-arriv-docs pl-3" id="page_size">
										<option value="1">1</option>
										<option value="2">2</option>
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
				</div>
			</div>
		</div>
	{/block}
{/block}



{block name='scripts'}
	<script type="text/javascript">
		var height = ($(window).height() - 380);
		var resources                                                           =   '{$RESOURCES}';
		var $path_correspondence                                                =   '{$path_correspondence}'
		var $path_view_add                                                      =   '{$path_view_add}';
		var $path_view                                                      	=   '{$path_view}';
		var $path_drafts                                                        =   '{$path_drafts}';
		var $path_view_edit_draft                                               =   '{$path_view_edit_draft}';
	</script>
	<script src="{$RESOURCES}js/Admin/arrivalDocuments.js"></script>
{/block}