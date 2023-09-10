{extends file="./arrival_documents.tpl"}

{block name="body_container"}
    <div class="main-arr-docs">
        <div class="content-arr-docs">
            <div class="breadcrumb-arr-docs desktop-breadcrumb-arr-docs">
                <div class="container-main-site-arr-docs">
                    <span class="material-icons-round">folder</span>
                    <label class="">Archivo</label>
                </div>
                <a class="links-breadcrumb-arr-docs" href="{$path_correspondence}">
                    <span class="material-icons-round ">chevron_left</span>
                    <label class="link-to-other-page-arr-docs ">Correspondencia</label>
                </a>
                <a class="links-breadcrumb-arr-docs" href="{$path_correspondence}">
                    <span class="material-icons-round ">chevron_left</span>
                    <label class="link-to-other-page-arr-docs">Documentos de llegada</label>
                </a>
                <a class="links-breadcrumb-arr-docs" href="{$path_view_add}">
                    <span class="material-icons-round ">chevron_left</span>
                    <label class="link-to-other-page-arr-docs">Nuevo documento</label>
                </a>
                <a class="links-breadcrumb-arr-docs" href="{$path_view_groups}">
                    <span class="material-icons-round active-breadcrumb">chevron_left</span>
                    <label class="link-to-other-page-arr-docs active-breadcrumb">Tus grupos</label>
                </a>
            </div>
            <div class="breadcrumb-arr-docs tablet-breadcrumb-arr-docs">
                <div class="container-main-site-arr-docs">
                    <span class="material-icons-round">folder</span>
                    <label class="">Archivo</label>
                </div>
                <div class="dropdown">
                    <a href="#" class="multiple-filter-arr-docs d-flex" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-icons-round">chevron_left</span><label
                            class="label-bread-crumb-arr-docs">...</label></a>
                    <ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
                        <li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="{$path_view_add}">Nuevo
                                documento</a></li>
                        <li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs"
                                href="{$path_correspondence}">Documentos de llegada</a></li>
                        <li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs"
                                href="{$path_correspondence}">Correpondencia</a></li>
                    </ul>
                </div>
                <div class="view-in-te-breadcrumb-arr-docs"><span class="material-icons-round">chevron_left</span>Nuevo
                    documento</div>
            </div>
            <div class="container-arr-docs container-about-groups-arr-docs">
                <div class="container-content-arr-docs">
                    <div class="container-title-view-add-arr-docs">
                        <a class="link-to-regress-arr-docs a-dimensions" href="{$path_view_add}">
                            <span class="material-icons-round">arrow_back</span>
                        </a>
                        <label>Tus grupos</label>
                    </div>

                </div>
                <div class="header-search-arr-docs">
                    <div class="container-main-tools">
                        <div class="input-main-search_arr_docs input-arr-docs ">
                            <input id="input_search_groups-arr-docs" class="input-search-disabled-arr-docs" type="search"
                                placeholder="Buscar en tus grupos...">
                            <span class="material-icons-round">search</span>
                        </div>
                        <div class="container-btn-add-arr-docs">
                            <a href="{$path_view_add_group}" class="btn-add-arr-docs btn-add-group-arr-docs"><span
                                    class="material-icons-round">add</span><label class="letter-for-desktop-arr-docs">Nuevo
                                    grupo</label></a>
                        </div>
                    </div>
                </div>
                <div class="container-groups-arr-docs">
                    <div class="header-container-groups-arr-docs">
                        <label class="title-of-groups-create">Grupos creados</label>
                        <label class="number-total-of-groups-arr-docs">Tienes <span id="num_count_groups">3</span>grupos en
                            total</label>
                    </div>
                    <div class="list-of-groups-arr-docs">
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                        <div class="item-group-of-arr-docs">
                            <div class="container-image-group-arr-docs">
                                <label class="firsts-letter-arr-docs">CO</label>
                            </div>
                            <div class="information-group-arr-docs">
                                <label class="title-of-groups-create">Conectera</label>
                                <p class="information-size-of-group-arr-docs"><span
                                        class="material-icons-round">groups</span> 3 miembros</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid d-flex pagination_arriv_docs justify-content-end pl-25 pt-4">
                        <div class="d-flex justify-content-center align-items-center pr-3">
                            <span class="item-pag pr-3">Ítems por página</span>
                            <select class="select-pag-arriv-docs pl-3" id="page_size">
                                <option value="2">2</option>
                                <option value="10">10</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <p class="separate pr-3 pl-3 d-flex align-items-center mt-3"><span
                                    class="start-index pr-2">0</span>-
                                <span class="end-index pr-2 pl-2">0</span>
                                de <span class="total-item pr-3">0</span>
                            </p>
                        </div>
                        <div class="card_pagination_arriv_doc d-flex justify-content-center mt-3">
                            <span class="material-icons-round btn-pagination-arriv-doc">
                                skip_previous
                            </span>
                            <span class="material-icons-round btn-pagination-arriv-doc">
                                navigate_before
                            </span>
                            <span class="material-icons-round btn-pagination-arriv-doc">
                                navigate_next
                            </span>
                            <span class="material-icons-round btn-pagination-arriv-doc">
                                skip_next
                            </span>
                        </div>
                    </div>
                </div>
                <div class="container-groups-when-is-empty" style="display: none;">
                    <div class="title-for-empty-groups-arr-docs">
                        <label>Aún no has creado ningun grupo</label>
                    </div>
                    <div class="description-for-empty-groups-arr-docs">
                        <p>¡Crea un grupo hoy mismo y agiliza tu proceso de<br> envio de documentos!</p>
                    </div>
                    <a class="link-to-view-add-group-arr-docs " href="{$path_view_add_group}"> <label>Crear nuevo
                            grupo</label></a>
                </div>
            </div>
        </div>
    </div>
{/block}