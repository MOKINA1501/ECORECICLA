




// Carga de documento principal
$(".container-button-add-file-for-arr-docs").hover(function () {
    if ($(window).width() > 800) {
        $("#icon-download").hide();
        $("#text-download").text("Suelta tus archivos aquí...");
    }
    else {
        $("#icon-download").show();
        $("#text-download").text("Cargar archivo PDF");
    }
}, function () {
    $("#icon-download").show();
    $("#text-download").text("Cargar archivo PDF");
})
$("#button_add_document_arr_docs").click(function () {
    $("#input_add_file_of_main_document_arr_docs").click();
})
$(document).on('change', "#input_add_file_of_main_document_arr_docs", function () {
    $("#container_button_add_document_for_arr_docs").hide();
    $("#container_preview_file_arr_docs").show();
    var width = $(window).width();
    if (width > 1340) {
        $(".container-anexos-information-arr-docs").css('margin-top', '-72px');
    } else {
        $(".container-anexos-information-arr-docs").css('margin-top', '24px');
    }
    $(window).resize(function () {
        var width = $(window).width();
        if (width > 1340) {
            $(".container-anexos-information-arr-docs").css('margin-top', '-72px');
        } else {
            $(".container-anexos-information-arr-docs").css('margin-top', '24px');
        }
    });
})
$("#remove_document_of_preview_container_arr_docs").click(function () {
    $("#container_preview_file_arr_docs").hide();
    $("#container_button_add_document_for_arr_docs").show();
    $(".inp-check-arr-docs").prop("checked", false);
    $(".inp-check-arr-docs").trigger('change');
    $(".container-anexos-information-arr-docs").css('margin-top', '0')
    reset_main_input_pdf();
})

$(document).on('change', '.inp-check-arr-docs', function () {
    if ($(this).prop('checked')) {





        $("#container_response_required_arr_docs").show();
        var width = $(window).width();
        if (width > 1340) {
            $(".container-anexos-information-arr-docs").css('margin-top', '-128px');

        } else {
            $(".container-anexos-information-arr-docs").css('margin-top', '24px');
        }
        $(window).resize(function () {
            var width = $(window).width();
            if (width > 1340) {
                $(".container-anexos-information-arr-docs").css('margin-top', '-128px');
            } else {
                $(".container-anexos-information-arr-docs").css('margin-top', '24px');
            }
        });
    } else {
        $("#container_response_required_arr_docs").hide();
        $(".container-anexos-information-arr-docs").css('margin-top', '-72px')
    }
});
// select priority
$(".select-priority-arr-docs").select2({
    minimumResultsForSearch: -1,
    templateResult: function (option) {
        var color = $(option.element).data('color');
        var priority = $(option.element).attr('data-priority');
        var circle = '<span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:' + color + '"></span>';
        circle += '<span>' + priority + '</span>';
        return $(circle);
    },
    templateSelection: function (option) {
        var color = $(option.element).data('color');
        var priority = $(option.element).attr('data-priority');
        var circle = '<span style="display:inline-block;margin-right:5px;border-radius:50%;width:10px;height:10px;background-color:' + color + '"></span>';
        circle += '<span>' + priority + '</span>';
        return $(circle);
    }
});
$("#link_menu_aside_left_arr_docs").click(function () {
    $("#aside_menu_left_arr_docs_tools").toggle();
})

// Validaciones a formularios
$("#send_information_arr_docs").click(function () {
    if (validator.form()) {

    } else {
        console.log("No hay paso")
        // $(".container-secundary-information-arr-docs").css('gap','40px')
        // $(".container-main-information-arr-docs").css('gap','32px')
    }

})


var validator = $("#form_of_send_information_arr_docs").validate({
    rules: {
        name_main_users: {
            required: true,
            minlength: 3,
            lettersonly: true
        }
    },
    messages: {
        name_main_users: {
            required: "<div class='error-container m-5'><span class='material-icons-round'>error</span><p>Por favor, ingresa este campo</p></div>",
            minlength: "El campo debe contener al menos 3 caracteres"
        },
    }
});








// Funciones
function reset_main_input_pdf() {
    const main_input = document.getElementById("#input_add_file_of_main_document_arr_docs");
    if (main_input != null) {
        main_input.value = "";
    }

}


// Juan
//muestra btn-send al haber entrada en input
$('.content-coment #coment').on('input', function () {
    var inputValue = $(this).val();

    if (inputValue.length > 0) {
        $(this).closest('.content-coment').find('.btn-send').css("visibility", "visible");
    } else {
        $(this).closest('.content-coment').find('.btn-send').css("visibility", "hidden");
    }
});

//oculta modales de forma general
$('.modal-arr-docs').click(function (e) {
    if (e.target == this) {
        $('#modal_send_coment_arr_docs').fadeOut(300)
        $('#modal_annul_arr_docs').fadeOut(300)
    }
})

//modal send coment
$('#send_coment_detail_arr_docs').click(function () {
    $('#modal_send_coment_arr_docs').fadeIn(300)
})

$('#btn_cancel_modal_send_coment_arr_docs').click(function () {
    $('#modal_send_coment_arr_docs').fadeOut(300)
})

//add comentario
$('#btn_send_modal_send_coment_arr_docs').click(function () {
    $('#modal_send_coment_arr_docs').fadeOut(300)

    const in_coment = $('#coment').val()
    $('#coment').val('')
    $('.btn-send').css("visibility", "hidden");

    //add el html con el comentario 
    const coment = $(`<div class="coment-arr-docs">
                        <span class="head-coment-arr-doc semibold font-16">Luisa Maldonado (Tú)</span>
                        <span class="parragraph-coment-arr-docs font-16">${in_coment}</span>
                        <span class="time-coment-arr-docs">08:49 AM</span>
                    </div>`)

    // hacer un append
    coment.insertBefore('.coment-arr-docs')

    $('.content-coment').css('display', 'none')
    $('.head-coments-arr-docs').css('margin-top', '0px')

    console.log('ajax para enviar comentario:', in_coment)
})

// anular document
$('#detail_btn_cancel_arr_docs').click(function () {
    $('#modal_annul_arr_docs').fadeIn(300)
})

$('#btn_cancel_modal_annul_arr_docs').click(function () {
    $('#modal_annul_arr_docs').fadeOut(300)
})

$('#btn_annul_modal_annul_arr_docs').click(function () {
    const reason = $('#reason').val();
    console.log(reason);
})

//validate

$('#form_modal_annul').validate({
    rules:
    {
        name:
        {
            required: true,
            maxlength: 100
        }
    },
    messages:
    {
        name:
        {
            required: '<span class="material-symbols-rounded icon-size-alert">error</span>Este campo es obligatorio.',
            maxlength: 'Máximo se permiten 100 caracteres.',
        }
    }
});




// Fin codigo Juan Duarte

// Codigo Monica

let timeoutID = null;
$("#card_arrival_doc").on('click', function () {
    window.location.href = $path_detail;
})

$("#card_drafts_arriv_doc").on('click', function () {
    window.location.href = $path_view_edit_draft;
})


$('document').ready(function () {
    /* $(window).scroll(function () {
        var nav = $("#nav_btns_arr_docs");
        var title = $(".tittle-module-arr-docs");
        var header = $(".header-sticky-arr-docs");

        if ($(window).scrollTop() > header.offset().top) {
            nav.hide();
            title.hide();
        } else {
            nav.show();
            title.show();
        }
    }); */


    $(document).on('change', '#filters_for_arr_doc', function () {
        $('.chk-filters-part-1').click(function () {
            if ($(this).is(':checked')) {
                $('.chk-filters-part-1').not(this).prop('checked', false);
            }
        });

        $('.chk-filters-part-2').click(function () {
            if ($(this).is(':checked')) {
                $('.chk-filters-part-2').not(this).prop('checked', false);
            }
        });

        $('.chk-filters-part-3').click(function () {
            if ($(this).is(':checked')) {
                $('.chk-filters-part-3').not(this).prop('checked', false);
            }
        });

        view_filter();
    })

    $("body").delegate('.paginationjs-first', 'click', function (e) {
        if (current_page == 1) {
            $('.paginationjs-first').addClass('disabled')
            $('.paginationjs-prev').addClass('disabled')
        }
        if ($(this).hasClass('disabled')) {
            return false
        } else {
            pagination.pagination('go', 1)
            $(this).off('click');
        }
    });

    $("body").delegate('.paginationjs-last', 'click', function (e) {
        totalPages = pagination.pagination('getTotalPage');
        if (current_page == totalPages) {
            $('.paginationjs-last').addClass('disabled')
            $('.paginationjs-next').addClass('disabled')
        }
        if ($(this).hasClass('disabled')) {
            return false
        } else {

            pagination.pagination('go', totalPages);
        }
    });

    $("body").delegate('.paginationjs-next', 'click', function (e) {
        totalPages = pagination.pagination('getTotalPage');
        if (current_page == totalPages) {
            $('.paginationjs-last').addClass('disabled')
            $('.paginationjs-next').addClass('disabled')
            $("body").delegate('.paginationjs-last', 'click', function (e) {
                if ($(this).hasClass('disabled')) {
                    return false
                }
            });
        }
        pagination.pagination('next');
    });

    $("body").delegate('.paginationjs-prev', 'click', function (e) {
        if (current_page == 1) {
            $('.paginationjs-first').addClass('disabled')
            $('.paginationjs-prev').addClass('disabled')
            $("body").delegate('.paginationjs-first', 'click', function (e) {
                if ($(this).hasClass('disabled')) {
                    return false
                }
            });
        }
        pagination.pagination('previous');
    });

    $("#page_size").on("change", function () {
        data_list_arr_docs(filter = "")
    });

    $('#search_arr_doc').on('keyup', function () {
        clearTimeout(timeoutID)
        timeoutID = setTimeout(view_filter, 500)
    })

    data_list_arr_docs(filter = "")

})


function view_filter() {
    let filter = "";
    $("#arr_doc_recent").prop('checked') ? filter += '1' : filter += '0'
    $("#arr_doc_antique").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_high_priority").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_media_priority").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_low_priority").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_pendientes").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_sended").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_readed").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_nulled").prop('checked') ? filter += ',1' : filter += ',0'
    $("#arr_doc_copy").prop('checked') ? filter += ',1' : filter += ',0'

    console.log(filter);

    data_list_arr_docs(filter);
}

function data_list_arr_docs(filter = "") {
    if ($(".container-card-arr-doc").length > 0) {
        let size = $("#page_size").val();
        let search = $('#search_arr_doc').val();
        pagination = $(".card_pagination_arriv_doc").pagination({
            dataSource: $path_view,
            locator: "data",
            formatNavigator: '',
            showPageNumbers: false,
            showNavigator: true,
            showLastOnEllipsis: true,
            showFirstOnEllipsisShow: true,
            showFirstLastBtn: false,
            prevText: '',
            nextText: '',
            totalNumberLocator: function (response) {
                mini = Math.ceil(size * (response.pageNumber - 1) + 1);
                maxi = Math.ceil(size * response.pageNumber);

                if (maxi >= response.recordsFiltered) maxi = response.recordsFiltered;
                if (mini >= response.recordsFiltered) {
                    mini = response.recordsFiltered;
                    $("#nums").html(mini);
                } else {
                    $("#nums").html("de " + mini + " a " + maxi);
                }

                $("#num").html(Math.ceil(response.recordsFiltered));
                return response.recordsFiltered;
            },
            pageSize: size,
            ajax: {
                type: "GET",
                dataType: "json",
                data: {
                    search: search,
                    filter: filter,
                },
                beforeSend: function () {
                    $(".container-card-arr-doc").html(
                        `<div style="display:flex;justify-content:center;align-items:center">
                            <div style="height:100%;width:auto; display:flex;">
                                <div class="sk-cube-grid">
                                    <div class="sk-cube sk-cube1"></div>
                                    <div class="sk-cube sk-cube2"></div>
                                    <div class="sk-cube sk-cube3"></div>
                                    <div class="sk-cube sk-cube4"></div>
                                    <div class="sk-cube sk-cube5"></div>
                                    <div class="sk-cube sk-cube6"></div>
                                    <div class="sk-cube sk-cube7"></div>
                                    <div class="sk-cube sk-cube8"></div>
                                    <div class="sk-cube sk-cube9"></div>
                                </div>
                            </div>
                        </div>`
                    );
                },
            },
            callback: function (response, pagination) {
                console.log(pagination)
                /* if (response.length <= 10) {
                    $(".pagination_arriv_docs").css('display', 'none');
                } */
                if (response.length > 0) {
                    current_page = pagination.pageNumber;
                    max = Math.ceil((pagination.totalNumber) / (size))

                    $(".paginationjs-pages ul").html('<li class="paginationjs-prev"><a class="first"><span id="go-first-movil" class="material-icons-round">navigate_before</span></a></li>')
                    $(".paginationjs-pages ul").append('<li class="paginationjs-next"><a class="first"><span id="go-first-movil" class="material-icons-round">navigate_next</span></a></li>')
                    $('.paginationjs-prev').before('<li class="paginationjs-first" id="btn_first"><a class="first"><span id="go-first" class="material-icons-round">skip_previous</span></a></li>');
                    $('.paginationjs-next').after('<li class="paginationjs-last" id="btn_last"><a class="last"><span id="go-first" class="material-icons-round">skip_next</span></a></li>');

                    $('.start-index').text(pagination.pageNumber * pagination.pageSize - pagination.pageSize + 1);
                    $('.end-index').text(Math.min(pagination.pageNumber * pagination.pageSize, pagination.totalNumber));
                    $('.total-items').text(pagination.totalNumber);


                    if ($('.paginationjs-prev').hasClass('disabled')) {
                        $('.paginationjs-first').addClass('disabled')
                        $('.paginationjs-last').removeClass('disabled')
                    }

                    if ($('.paginationjs-next').hasClass('disabled')) {
                        $('.paginationjs-first').removeClass('disabled')
                        $('.paginationjs-last').addClass('disabled')
                    }

                    if (current_page == 1) {
                        $('.paginationjs-first').addClass('disabled')
                        $('.paginationjs-prev').addClass('disabled')
                    }
                    if (current_page == max) {
                        $('.paginationjs-last').addClass('disabled')
                        $('.paginationjs-next').addClass('disabled')
                    }

                    $(".container-card-arr-doc").html(response);
                } else {
                    $(".container-card-arr-doc").html("<p style='display: flex; justify-content: center; align-items:center'>No hay registros.</p>");
                }
            },
        });
    }
}

// Fin monica