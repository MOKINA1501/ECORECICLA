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
                                aria-expanded="false"><span <span
                                    class="material-icons-round">chevron_left</span><label>...</label>
                            </a>
                            <ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
                                <li class="pl-2"><a class="link-to-other-page-arr-docs" href="#">Documentos de llegada</a></li>
                                <li class="pl-2"><a class="link-to-other-page-arr-docs" href="#">Correpondencia</a></li>
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
                        <a href="#" class="active-breadcrumb-arr-docs semibold">
                            <span class="material-icons-round">chevron_left</span>&nbsp;Detalle del documento
                        </a>
                    </li>
                </ul>
            </div>
            <div class="maincontent-arr-docs">
                <div class="maincontent-arr-docs-head">
                    <div class="return-arr-docs-head">
                        <div class="title-arr-docs-head">
                            <a  href="{$path_correspondence}" class="btn-arr-docs forty-forty ">
                                <span class="material-icons-round icon-return-arr-docs">arrow_back</span>
                            </a >
                            <span class="txt-title-arr-docs-head">&nbsp;Contrataciones Holding Max</span>
                        </div>
                        <a href="{$path_traceability}" class="btn-trace-arr-docs btn-arr-docs forty-forty tooltipp">
                            <span class="material-icons-round icon-return-arr-docs">restore</span>
                            <span class="tooltiptextt">Trazabilidad</span>
                        </a>
                    </div>
                </div>
                <div class="content-detail-arr-docs">
                    <div class="img-arr-docs">
                        LM
                    </div>
                    <div class="info-arr-docs">
                        <span class="title-arr-docs semibold">Luisa Alejandra Maldonado Palacios</span>
                        <span class="para-arr-docs">Para: Fabian Mendoza; Luis Diaz; Andres Gomez; Cecilia Hernandez;</span>
                        <span class="cc-arr-docs">CC: Daniel Camargo</span>
                        <span class="time-arr-docs">25/03/23, 08:39 AM</span>
                        <span class="priority"><span class="icon-priority"></span>Prioridad alta</span>
                    </div>
                </div>
                <div class="separator-x-arr-docs"></div>
                <div class="detail-send-arr-docs">
                    <span class="detail-send-txt">ESE HOSPITAL UNIVERSITARIO DE SANTANDER (con numero de identificacion
                        <strong>10122012334-5</strong>) te ha enviado un documento de 5 páginas con radicado
                        <strong>N°0001-2023</strong>, el cual ingresó el
                        23/03/23 a las 8:25AM</span>
                    <span class="detail-response-arr-docs">Este documento requiere respuesta antes de
                        <strong>18/01/23</strong></span>
                </div>
                <div class="content-documents-arr-docs">
                    <div class="head-document-arr-docs">
                        <span class="title-documents-arr-docs semibold font-16">Documento principal</span>
                        <button class="download-all btn-arr-docs font-16">Descargar todo</button>
                    </div>
                    <div class="documents-arr-docs">
                        <div class="content-document-arr-docs">
                            <div class="prev-document-arr-docs"></div>
                            <div class="info-prev-document-arr-docs">
                                <span class="name-prev-document-arr-docs font-16"><strong>Radicado-N°0001-2023.pdf</strong>
                                    <br> 324KB</span>
                                <div class="icon-download-document-arr-docs forty-forty btn-arr-docs tooltipp">
                                    <span class="material-icons-round">download</span>
                                    <span class="tooltiptextt">enviar</span>
                                </div>
                            </div>
                        </div>
                        <div class="separator-y-arr-docs"></div>
                        <div class="content-attached-arr-docs">
                            <span class="attaced-title-arr-docs semibold font-16">Anexos (3)</span>
                            <div class="attacheds-arr-docs">
                                <button class="attached-arr-docs btn-arr-docs ">
                                    <span class="material-icons-round">picture_as_pdf</span>&nbsp;Escaner1.pdf
                                </button>
                                <button class="attached-arr-docs btn-arr-docs">
                                    <span class="material-icons-round">picture_as_pdf</span>&nbsp;Escaner2.pdf
                                </button>
                                <button class="attached-arr-docs btn-arr-docs">
                                    <span class="material-icons-round">picture_as_pdf</span>&nbsp;Escaner3.pdf
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separator-x-arr-docs"></div>
                <div class="content-end-arr-docs">
                    <div class="content-coments-arr-docs">
                        <div class="content-coment  placeholder-animated">
                            <textarea type="text" id="coment" class="placeholder-animated-input" id=""
                                required></textarea>
                            <span class="placeholder-animation-label">Comentarios adicionales</span>
                            <div class="btn-send ">
                                <button class="btn-arr-docs forty-forty tooltipp" id="send_coment_detail_arr_docs">
                                    <span class="material-icons">send</span>
                                    <span class="tooltiptextt">enviar</span>
                                </button>
                            </div>
                        </div>
                        <div class="head-coments-arr-docs semibold font-16">Comentarios</div>
                        <div class="coments-arr-docs">

                            <div class="coment-arr-docs">
                                <span class="head-coment-arr-doc semibold font-16">Luisa Maldonado (Tú)</span>
                                <span class="parragraph-coment-arr-docs font-16">Buen dia, este es el documento actualizado
                                    de las
                                    contrataciones actuales. <br> Quedo atenta</span>
                                <span class="time-coment-arr-docs">08:49 AM</span>
                            </div>

                        </div>
                    </div>
                    <div class="cancel-arr-docs">
                        <span class="title-cancel-arr-docs bold font-20">¿Cometiste un error?</span>
                        <span class="paragraph-cancel-arr-docs font-16">No te precupes tendras hasta 10 minutos para anlar
                            este
                            documento <br> Pasado ese tiempo, no podrá ser anulado</span>
                        <button class="btn-cancel-arr-docs btn-arr-docs forty-forty"
                            id="detail_btn_cancel_arr_docs">Anular</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {* modals *}
    <div class="modal-arr-docs" id="modal_send_coment_arr_docs" style="display: none;" >
        <div class="content-modal-arr-docs">
            <p class="modal-title-arr-docs">¡Espera!</p>
            <p class="modal-txt-arr-docs font-16">Ten en cuenta que una vez que envies tu comentario, no podrás añadir más
                comentarios, editar o eliminar</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_send_coment_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs semibold" id="btn_send_modal_send_coment_arr_docs">Enviar</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_wait_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs content-modal-wait-arr-docs">
            <span class="material-icons-round icon-close-arr-docs">close</span>
            <p class="modal-title-arr-docs">¡Espera!</p>
            <p class="modal-txt-arr-docs font-16">Si te vas ahora, perderás todos los datos ingresados</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_wait_arr_docs">Descartar</button>
                <button class="modal-btn-two-arr-docs btn-ok-modal-wait-arr-docs semibold" id="btn_ok_modal_wait_arr_docs">Guardar borrador</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_delete_group_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs">
            <p class="modal-title-arr-docs">Eliminar grupo</p>
            <p class="modal-txt-arr-docs font-16">¿Deseas eliminar este grupo?</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_delete_group_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs" id="btn_delete_modal_delete_group_arr_docs">Eliminar</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_delete_member_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs">
            <p class="modal-title-arr-docs">Eliminar miembro</p>
            <p class="modal-txt-arr-docs font-16">¿Deseas eliminar este miembro grupo?</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_delete_member_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs" id="btn_delete_modal_delete_member_arr_docs">Eliminar</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_delete_eraser_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs">
            <p class="modal-title-arr-docs">Eliminar borrador</p>
            <p class="modal-txt-arr-docs font-16">¿Deseas eliminar este borrador?</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_delete_eraser_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs" id="btn_delete_modal_delete_eraser_arr_docs">Eliminar</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_send_document_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs">
            <p class="modal-title-arr-docs">Enviar documento</p>
            <p class="modal-txt-arr-docs font-16">¿Estás seguro que deseas enviar este documento?</p>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_send_document_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs" id="btn_send_modal_send_document_arr_docs">Enviar</button>
            </div>
        </div>
    </div>

    <div class="modal-arr-docs" id="modal_annul_arr_docs" style="display: none;">
        <div class="content-modal-arr-docs content-modal-cancel-arr-docs">
            <p class="modal-title-arr-docs">Anular documento</p>
            <p class="modal-txt-arr-docs font-16">Cuéntanos el motivo por el cual deseas anular el documento</p>
            <form class="textarea-modal-cancel placeholder-animated" id="form_modal_annul">
                <textarea type="text" id="reason" class="placeholder-animated-input" required></textarea>
                <span class="placeholder-animation-label">Motivo</span>
            </form>
            <div class="content-modal-btns-arr-docs">
                <button class="modal-btn-one-arr-docs semibold" id="btn_cancel_modal_annul_arr_docs">Cancelar</button>
                <button class="modal-btn-two-arr-docs semibold" id="btn_annul_modal_annul_arr_docs">Anular</button>
            </div>
        </div>
    </div>
{/block}
