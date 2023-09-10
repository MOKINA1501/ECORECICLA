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
                <a class="links-breadcrumb-arr-docs">
                    <span class="material-icons-round active-breadcrumb">chevron_left</span>
                    <label class="link-to-other-page-arr-docs active-breadcrumb">Nuevo documento</label>
                </a>
            </div>
            <div class="breadcrumb-arr-docs tablet-breadcrumb-arr-docs">
                <div class="container-main-site-arr-docs">
                    <span class="material-icons-round">folder</span>
                    <label class="">Archivo</label>
                </div>
                <div class="dropdown">
                    <a href="#" class="multiple-filter-arr-docs d-flex" data-bs-toggle="dropdown"
                        aria-expanded="false"><span class="material-icons-round">chevron_left</span><label
                            class="label-bread-crumb-arr-docs">...</label></a>
                    <ul class="dropdown-menu dropdown-go-routes" aria-labelledby="dropdownMenuButton1">
                        <li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="#">Documentos de llegada</a></li>
                        <li class="mt-3 pl-2"><a class="link-to-other-page-arr-docs" href="#">Correpondencia</a></li>
                    </ul>
                </div>
                <div class="view-in-te-breadcrumb-arr-docs"><span class="material-icons-round">chevron_left</span>Nuevo
                    documento</div>
            </div>
            <div class="container-arr-docs">
                <div class="container-content-arr-docs">
                    <div class="container-title-view-add-arr-docs">
                        <a class="link-to-regress-arr-docs a-dimensions" href="{$path_correspondence}">
                            <span class="material-icons-round">arrow_back</span>
                        </a>
                        <label>Nuevo documento</label>
                    </div>
                </div>
                <form id="form_of_send_information_arr_docs" class="form-add-arr-docs">
                    <div class="container-content-left-arr-docs">
                        <div class="container-main-information-arr-docs">
                            <div class="container-input-animated-arr-docs">
                                <input type="text" name="name_main_users" class="input-animated-arr-docs"
                                    id="name_main_users" required>
                                <label for="name_main_users" class="placeholder-animation-label-arr-docs">Para</label>
                            </div>
                            <div class="container-input-animated-arr-docs">
                                <input class="input-animated-arr-docs" type="text" name="users_with_copy"
                                    id="users_with_copy" required>
                                <label class="placeholder-animation-label-arr-docs" for="users_with_copy">CC</label>
                            </div>
                            <div class="container-link-to-groups-view-arr-docs">
                                <a class="link-to-groups-view-arr-docs" href="{$path_view_groups}">Tus grupos</a>
                            </div>
                        </div>
                        <label class="title-information-secundary-arr-docs">Información del documento</label>
                        <div class="container-secundary-information-arr-docs">
                            <div class="container-input-animated-arr-docs">
                                <input class="input-animated-arr-docs" type="text" name="main_users" id="subject" required>
                                <label class="placeholder-animation-label-arr-docs" for="subject">Asunto</label>
                            </div>
                            <div class="container-input-date-arr-docs">
                                <div class="container-input-animated-arr-docs">
                                    <input class="input-animated-arr-docs" type="text" name="main_users" id="date_send"
                                        required>
                                    <label class="placeholder-animation-label-arr-docs" for="date_send">Fecha de
                                        envio</label>
                                </div>
                                <span class="material-icons-round">calendar_month</span>
                            </div>
                            <div class="container-select-priority-arr-docs">
                                <select class="select-priority-arr-docs" id="select_priority_arr_docs">
                                    <option value="1" data-color="#1B6EDA" data-priority="Prioridad baja">Prioridad baja
                                    </option>
                                    <option value="2" data-color="#FFC10E" data-priority="Prioridad media">Prioridad media
                                    </option>
                                    <option value="3" data-color="#BA1A1A" data-priority="Prioridad alta">Prioridad alta
                                    </option>
                                </select>
                            </div>
                            <div class="container-input-animated-arr-docs">
                                <input class="input-animated-arr-docs" type="text" name="main_users" id="sender" required>
                                <label class="placeholder-animation-label-arr-docs" for="sender">Remitente</label>
                            </div>
                            <div class="container-input-animated-arr-docs">
                                <input class="input-animated-arr-docs" type="text" name="main_users" id="sender" required>
                                <label class="placeholder-animation-label-arr-docs" for="sender">NIT o Cédula</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-content-right-arr-docs">
                        <div class="container-main-document-arr-docs">
                            <label class="title-main-document-arr-docs">Documento principal</label>
                            <div class="description-container-document-arr-docs">
                                <p>Sube tu documento principal en formato PDF, asegúrate que sea legible.</p>
                            </div>
                            <div class="container-button-add-file-for-arr-docs"
                                id="container_button_add_document_for_arr_docs">
                                <input type="file" id="input_add_file_of_main_document_arr_docs" accept="application/pdf"
                                    style="display: none;">
                                <button class="button-add-file-for-arr-docs" id="button_add_document_arr_docs"
                                    type="button">
                                    <div class="text-button-add-arr-docs">
                                        <span id="icon-download" class="material-icons-round">cloud_upload</span>
                                        <label id="text-download">Cargar archivo PDF</label>
                                        <div>
                                </button>
                                <label class="warning-size-file-document-arr-docs">Tamaño máximo 520KB</label>
                            </div>
                            <div id="container_preview_file_arr_docs" class="main-container-of-the-preview-file"
                                style="display: none;">
                                <div class="container-preview-main-file-document">
                                    <div class="preview-main-file-up-arr-docs">
                                        <img src="{RESOURCES}img/imagen_preview_default.png">
                                    </div>
                                    <div class="preview-main-file-down-arr-docs">
                                        <div class="preview-file-info-arr-docs">
                                            <label class="name-main-file-arr-docs">Nombre_archivo.pdf</label>
                                            <label class="size-main-file-arr-docs">324KB</label>
                                        </div>
                                        <div class="delete-preview-main-file-arr-docs">
                                            <a id="remove_document_of_preview_container_arr_docs"
                                                class="remove-preview-main-file a-dimensions">
                                                <span class="material-icons-round">delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check container-response-required-arr-docs">
                                    <input class="form-check-input inp-check-arr-docs" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">Este documento requiere
                                        respuesta</label>
                                </div>
                            </div>
                            <div id="container_response_required_arr_docs" class="assign-limit-date-for-response-arr-docs"
                                style="display: none;">
                                <label>Asigne una fecha límite de respuesta</label>
                                <div class="container-input-date-arr-docs">
                                    <div class="container-input-animated-arr-docs">
                                        <input type="text" class="input-animated-arr-docs" id="input_date_time_response"
                                            required>
                                        <label class="placeholder-animation-label-arr-docs"
                                            for="input_date_time_response">Fecha de respuesta</label>
                                    </div>
                                    <span class="material-icons-round">calendar_month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-anex-and-buttons-arr-docs">
                        <div class="container-anexos-information-arr-docs">
                            <div class="header-content-anexos">
                                <div class="content-header-anexos">
                                    <div class="container-header-title-anexos">
                                        <label class="title-anexos-arr-docs">Anexos <span
                                                class="optionality-arr-docs">(opcional)</span></label>
                                    </div>
                                    <label class="file-link-anexos">
                                        <span>Cargar archivos</span>
                                        <input type="file" id="input_anexos" accept="application/pdf">
                                    </label>
                                </div>
                                <div class="container-files-anexos-arr-docs">
                                    <div class="item-file-anexos-arr-docs">
                                        <span class="material-icons-round">picture_as_pdf</span>
                                        <label class="name-file-anexos-arr-docs">Escaner1.pdf</label>
                                        <button class="material-symbols-outlined btn-close-anexos">close</button>
                                    </div>
                                    <div class="item-file-anexos-arr-docs">
                                        <span class="material-icons-round">picture_as_pdf</span>
                                        <label class="name-file-anexos-arr-docs">Escaner1.pdf</label>
                                        <button class="material-symbols-outlined btn-close-anexos">close</button>
                                    </div>
                                </div>
                            </div>
                            <div class="container-input-animated-arr-docs comments-arr-docs-textarea">
                                <textarea name="coments_additionaly"
                                    class="input-animated-arr-docs textarea-comments-arr-docs" id="coments_additionaly"
                                    required></textarea>
                                <label class="placeholder-animation-label-arr-docs" for="coments_additionaly">Comentarios
                                    adicionales</label>
                            </div>
                        </div>
                        <div class="container-buttons-add-arr-docs">
                            <button type="button" id="send_information_arr_docs" class="btn-send-arr-docs">Enviar
                                documento</button>
                            <button type="button" class="btn-save-draft-arr-docs">Guardar borrador</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}