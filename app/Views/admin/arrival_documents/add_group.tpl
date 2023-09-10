{extends file="./arrival_documents.tpl"}
{block name='styles'}
	<link href="{$RESOURCES}css/arrivalDocuments.css" rel="stylesheet">
{/block}
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
						<span class="material-icons-round ">chevron_left</span>
						<a class="link-to-other-page-arr-docs " href="#">Documentos de llegada</a>
					</div>
					<div class="links-breadcrumb-arr-docs mode-tablet-arr-doc btn-arr-docs">
						<span class="material-icons-round ">chevron_left</span>
						<a class="link-to-other-page-arr-docs " href="#">Nuevo documento</a>
					</div>
					<div class="links-breadcrumb-arr-docs mode-tablet-arr-doc btn-arr-docs">
						<span class="material-icons-round ">chevron_left</span>
						<a class="link-to-other-page-arr-docs " href="#">Tus grupos</a>
					</div>
					<div class="dropdown go-routes btn-arr-docs">
						<a href="#" class="d-flex pr-3" data-bs-toggle="dropdown" aria-expanded="false"><span <span
								class="material-icons-round">chevron_left</span><label>...</label></a>
						<ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
							<li class="mt-1 pl-2"><a class="link-to-other-page-arr-docs" href="#">Tus grupos</a></li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="#">Nuevo documento</a></li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="#">Documentos de llegada</a></li>
							<li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="#">Correpondencia</a></li>
						</ul>
					</div>
					<div class="links-breadcrumb-arr-docs">
						<span class="material-icons-round active-breadcrumb">chevron_left</span>
						<a class="link-to-other-page-arr-docs active-breadcrumb" href="#">Nuevo grupo</a>
					</div>
				</div>
				<div class="container-view-group-form">
					<div class="container-content-arr-docs">
						<div class="d-flex justify-content-start align-items-left">
							<a href="{$path_correspondence}"><span class="material-icons-round btn-arr-docs">
									arrow_back</span>
							</a>
							<label class="pl-3 title-view-arr-docs">Nuevo Grupo</label>
						</div>
						<div class="container-form-add-group mt-5">
							<div class="identificator-add-group placeholder-animated ">
								<input type="text" class="placeholder-animated-input-group" id="" required>
								<span class="placeholder-animation-label-group">Nombre del grupo</span>
							</div>
							<p class="title-form-group-arr-docs mt-5"> Agregar miembros</p>
							<div class="mt-2">
								<input class="input-text-form-add-group" type="search"
									placeholder="Buscar por nombre o identificación...">
								<span class="material-icons-round span-text-form-add-group">search</span>
							</div>
							<p class="pt-5 filter-title-drop-arr-doc"> Todos los miembros</p>
							<p class="pt-2 pb-3"> No tienes miembros agregados</p>
						</div>
						<div class="container-users-in-group row">
							<div class="col-12 col-md-12 col-xl-6 pr-4 mb-5">
								<div class="card-user-for-group ">
									<div class="d-flex justify-content-between  mr-2">
										<div class="d-flex justify-content-start align-items-center p-3">
											<label class="info-card-id-user"> CO </label>
											<label class="name-user-in-group"> Daniela Rocio Amaya Caicedo </label>
										</div>
										<label class="mt-4 mr-3"><span
												class="material-symbols-rounded d-flex align-items-end btn-arr-docs">delete</span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-12 col-xl-6 pr-4 mb-5">
								<div class="card-user-for-group ">
									<div class="d-flex justify-content-between  mr-2">
										<div class="d-flex justify-content-start align-items-center p-3">
											<label class="info-card-id-user"> CO </label>
											<label class="name-user-in-group"> Daniela Rocio Amaya Caicedo </label>
										</div>
										<label class="mt-4 mr-3"><span
												class="material-symbols-rounded d-flex align-items-end btn-arr-docs">delete</span>
										</label>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-12 col-xl-6 pr-4 mb-5">
								<div class="card-user-for-group ">
									<div class="d-flex justify-content-between  mr-2">
										<div class="d-flex justify-content-start align-items-center p-3">
											<label class="info-card-id-user"> CO </label>
											<label class="name-user-in-group"> Daniela Rocio Amaya Caicedo </label>
										</div>
										<label class="mt-4 mr-3"><span
												class="material-symbols-rounded d-flex align-items-end btn-arr-docs">delete</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						<a href="#" class="btn-add-group-arr-docs mt-5"><label class="txt-new-group-arriv-doc">Crear
								grupo</label></a>
						<p class="mt-3 txt-adv-group">Tu privacidad es importante para nosotros. Por eso, los grupos que añades
							a tu
							cuenta permanecerán privados y nadie podrá verlos ni sabrá que los has añadido</p>
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
	</script>
	<script src="{$RESOURCES}js/Admin/arrivalDocuments.js"></script>
{/block}