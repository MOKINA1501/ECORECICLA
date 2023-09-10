{extends file="./arrival_documents.tpl"}
{block name="body_container"}
    <div class="main-arr-docs">
        <div class="content-arr-docs">
            <div class="head-arr-docs">
                <ul class="breadcrumb-arr-docs">
                    <li>
                        <a href="#" class="">
                            <span class="material-icons-round">folder</span></span>&nbsp;Archivo
                        </a>
                    </li>
                    <li>
                        <div class="dropdown btn-arr-docs" style="display: none;">
                            <a href="#" class="multiple-filter-arr-docs d-flex" data-bs-toggle="dropdown"
                                aria-expanded="false"><span <span class="material-icons-round">chevron_left</span><label>...</label>
                            </a>
                            <ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
                                <li class="pl-2"><a class="link-to-other-page-arr-docs" href="#">Detalle del documento</a>
                                </li>
                                <li class="pl-2"><a class="link-to-other-page-arr-docs" href="#">Documentos de
                                        llegada</a></li>
                                <li class="pl-2"><a class="link-to-other-page-arr-docs" href="#">Correpondencia</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="btn-arr-docs mode-tablet">
                            <span class="material-icons-round">chevron_left</span>&nbsp;Correspondencia
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-arr-docs mode-tablet">
                            <span class="material-icons-round">chevron_left</span>&nbsp;Documentos de llegada
                        </a>
                    </li>
                    <li>
                        <a href="#" class="btn-arr-docs mode-tablet">
                            <span class="material-icons-round">chevron_left</span>&nbsp;Detalle del documento
                        </a>
                    </li>
                    <li>
                        <a href="#" class="active-breadcrumb-arr-docs semibold">
                            <span class="material-icons-round ">chevron_left</span>&nbsp;Trazabilidad
                        </a>
                    </li>
                </ul>
            </div>
            <div class="maincontent-arr-docs">
                <div class="maincontent-arr-docs-head">
                    <div class="return-arr-docs-head">
                        <div class="title-arr-docs-head">
                            <a href="{$path_detail}" class="btn-arr-docs forty-forty">
                                <span class="material-icons-round icon-return-arr-docs">arrow_back</span>
                            </a>
                            <span class="txt-title-arr-docs-head">&nbsp;Trazabilidad</span>
                        </div>
                    </div>
                </div>
                <div class="content-search-hk-arr-docs">
                    <input type="text" name="" id="" placeholder="Buscar por nombre, accion o fechas...">
                    <span class="material-icons-round">search</span>
                </div>

                <div class="txt-hk-arr-docs font-16">
                    Encuentra el historial de todas las modificaciones y acciones realñizadas en este documento.
                </div>
                <div class="timeline-arr-docs">
                    <div class="container-timeline-arr-docs right-arr-docs">
                        <div class="content-timeline-arr-docs">
                            <span class="txt-date-arr-docs">25/03/23 - 08:44 AM</span>
                            <span class="txt-name-arr-docs font-20 semibold">Fabian Andres Mendoza Martinez</span>
                            <span class="txtt-arr-docs font-16">Ha agregado un comentario</span>
                        </div>
                    </div>
                    <div class="container-timeline-arr-docs right-arr-docs">
                        <div class="content-timeline-arr-docs">
                            <span class="txt-date-arr-docs">25/03/23 - 08:44 AM</span>
                            <span class="txt-name-arr-docs font-20 semibold">Fabian Andres Mendoza Martinez</span>
                            <span class="txtt-arr-docs font-16">Ha agregado un comentario</span>
                        </div>
                    </div>
                    <div class="container-timeline-arr-docs right-arr-docs">
                        <div class="content-timeline-arr-docs">
                            <span class="txt-date-arr-docs">25/03/23 - 08:44 AM</span>
                            <span class="txt-name-arr-docs font-20 semibold">Fabian Andres Mendoza Martinez</span>
                            <span class="txtt-arr-docs font-16">Ha agregado un comentario</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}