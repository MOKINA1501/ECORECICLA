$(function(){ 
    
    $(".cuad_num").keyup(function (e) {

        $("#cuad_num_error").css("display", "none");
        if($(this).val().length > $(this).attr('maxlength')) {
          $(this)[0].value = $(this).val().slice(1)
        }
        if($(this).val().length > 0) {
          $(this).addClass('active')
          if($(this).next('.cuad_num').length > 0) {
            $(this).next('.cuad_num')[0].focus();
          }
        } else {
          $(this).removeClass('active')
        }

    });

    showPasswordLogin = document.querySelector('.show-password');
    showPasswordLogin.addEventListener('click', () => {
        password1 = document.querySelector('#pass1');
        if ( password1.type === "text" ) {
            password1.type = "password"
            showPasswordLogin.innerHTML = "visibility_off";
        } else {
            password1.type = "text"
            showPasswordLogin.innerHTML = "visibility";
        }

    });

    $.validator.addMethod("concatEqualsTo", function (value, element, params)
    {
       var concatedVal = "";
       
       $("#passnew").each(function(index, val){
            concatedVal += $(val).val();
        });

        $('#btn-next3').on('click', function()
        {
            if(value === concatedVal)
            {
                $("#change_pass").modal('show');
                $("#btnchange").on('click', function(){
                    $("#form_password_new").ajaxSubmit({
                        dataType: "json",
                        success: newPassword,
                    });
                    $("#change_pass").modal('hide');
                });
            }
        });

        return value === concatedVal;
       
    });


    if($("#form_login_admin").length)
    {
        var validate = $('#form_login_admin').validate(
        {
            rules:
            {
                email:
                {
                    required: true,
                    email: true,
                    maxlength: 130
                },
                password:
                {
                    required: true,
                }
            },
            messages:
            {
                email:
                {
                   required: 'Este campo es obligatorio.',
                   maxlength: 'Máximo se permiten 100 caracteres.',
                   email: 'Por favor, ingrese un correo electrónico válido.',
                },
                password:
                {
                    required: 'Este campo es obligatorio.',
                }
            }
        })
    }


    if($("#form_password_admin").length)
    {
        var validate = $('#form_password_admin').validate(
        {
            rules:
            {
                emailpassword:
                {
                    required: true,
                    email: true,
                    maxlength: 130
                },
            },
            messages:
            {
                emailpassword:
                {
                    required: 'Este campo es obligatorio.',
                    maxlength: 'Máximo se permiten 100 caracteres.',
                    email: 'Por favor, ingrese un correo electrónico válido.',
                }
            }
        })
        
    }

    if($("#form_password_new").length)
    {
        var validate = $('#form_password_new').validate(
        {
            rules:
            {
                password:
                {
                    required: true,
                    minlength: 8,
                },
                passwordrepeat:
                {
                    required: true,
                    minlength: 8,
                    concatEqualsTo:"#passnew",
                }
            },
            messages:
            {
                password:
                { 
                    required: 'Este campo es obligatorio.',
                    minlength: 'Debe contener mínimo 8 caracteres.',
                },
                passwordrepeat:
                {
                    required: 'Este campo es obligatorio.',
                    minlength: 'Debe contener mínimo 8 caracteres.',
                    concatEqualsTo: 'No coinciden las contraseñas.',
                }
            }
        }) 
    }

    
    showPasswordNew = document.querySelector('#passnews');
    showPasswordNew.addEventListener('click', () => {
        password1 = document.querySelector('#passnew');

        if ( password1.type === "text" ) {
            password1.type = "password"
            showPasswordNew.innerHTML = "visibility_off";
        } else {
            password1.type = "text"
            showPasswordNew.innerHTML = "visibility";
        }

    });

    showPasswordRepeat = document.querySelector('#passrepeat');
    showPasswordRepeat.addEventListener('click', () => {
        password1 = document.querySelector('#pass-repeat');

        if ( password1.type === "text" ) {
            password1.type = "password"
            showPasswordRepeat.innerHTML = "visibility_off";
        } else {
            password1.type = "text"
            showPasswordRepeat.innerHTML = "visibility";
        }

    });

    function ModifyPlaceHolder (idElement, text) {
        let input = document.getElementById(idElement);
        input.placeholder = text;  
    }

    $('#btn-user').on('click', function(){

        $("#form_login_admin").ajaxForm({
            dataType: "json",
            success: check_message,
        });  

    });

    $('.password-new').on('click', function(){

        $('.box-card-loging').css("display", "none");
        $('.login').css("display", "none");
        $('.passwordout').css("display", "block");
        $('.passwordout-logging').css("display", "block");
    });

    $('#btn-back').on('click', function()
    {
        $('.login').css("display", "block");
        $('.box-card-loging').css("display", "block");
        $('.passwordout').css("display", "none");
        $('.passwordout-logging').css("display", "none");

    });

    $('#btn-next').on('click', function()
    {
        $("#form_password_admin").ajaxSubmit({
            dataType: "json",
            success: password_forgotten,
        });  
        countdown();
    });

    $('#btn-back2').on('click', function()
    {
        $('.passwordout-logging').css("display", "block");
        $('.passwordout').css("display", "block");
        $('.code-verification').css("display", "none");
        $('.code-verification-logging').css("display", "none");
        $(".grid-container").attr('hidden');
    });

    $('#btn-next2').on('click', function()
    {
   
        $('.code-verification').val()
        $("#form_login_code").ajaxSubmit({
            dataType: "json",
            success: codeValid,
        });  
    });

    $('#btn-back3').on('click', function()
    {
        $('.login').css("display", "block");
        $('.box-card-loging').css("display", "block");
        $('.new_password-logging').css("display", "none");
    });

    $('#code-new').on('click', function(){

        $("#form_code_again").ajaxSubmit({
            dataType: "json",
            success: codeAgain,
        });
        countdown();
    });

    $('.con-input').focus(function(){
        if (!$(this).hasClass('con-input-esp')) {
            $(this).addClass('inp-active');
            parent = $(this).parent();
            parent.find('label').addClass('label-active');
            if (parent.find('.label-inp-sel').length > 0) {
                parent.find('.label-inp-sel').addClass('rotate');
            }
        }
    });

    $('.con-input').blur(function(){
        if (!$(this).hasClass('con-input-esp')) {
            $(this).removeClass('inp-active');
            val = $(this).val();
            if (val === "") {
                parent = $(this).parent();
                parent.find('label').removeClass('label-active');
            }else{
                parent = $(this).parent();
                parent.find('label').addClass('label-active-bl');
            }
            if (parent.find('.label-inp-sel').length > 0) {
                parent.find('.label-inp-sel').removeClass('rotate');
            }
        }
    });

    $('#edit-email').click(function(){
        $('#rmb-email').attr("readonly", false);
    });

    $('#rmb-email').blur(function(){
        $(this).attr("readonly", true);
    });

});

let totalTime = 180;
function countdown()
{
    document.getElementById('countdown').innerHTML = totalTime;
    if(totalTime==0)
    {
        $("#form_code_resset").ajaxSubmit({
            dataType: "json",
            success: ressetCode,
        });
    }
    else{
        totalTime-=1;
        setTimeout("countdown()",1000);
    }
}


function modal_alert_and_event(data, message)
{  
    iziToast.show(
    {
        backgroundColor: (data ? '#D5E6D3' : '#F6D6D6'),
        color: (data ? '#40AC2F' : '#DE3030'),
        icon: (data ? 'far fa-smile' : 'far fa-frown'),
        iconColor: (data ? '#8CBB85' : '#FE7676'),
        maxWidth: 240,
        message: '<br/><br/>' + message,
        messageColor: (data ? '#8CBB85' : '#FE7676'),
        position: 'topRight',
        timeout: 9000,
        title: (data ? '¡Bien hecho!' : '¡Atención!'),
        titleColor: (data ? '#40AC2F' : '#DE3030'),
        onClosed: function() {
        }
    });
}

function check_message(response)
{
    if(response.value) {
        window.location.href = $path_inicio;
    } else {
        modal_alert_and_event(response.value, response.message)
    }
}

function password_forgotten(response)
{
    // if (response.value) 
    // {
        const email = document.getElementById("email-rec");
        $('.passwordout-logging').css("display", "none");
        $('.passwordout').css("display", "none");
        $('.code-verification').css("display", "block");
        $('.code-verification-logging').css("display", "block");
        $(".grid-container").removeAttr('hidden');
        $(".email-rmb").val(email.value);
        $("#email-reset").val(email.value);

    // }
    // else
    // {
    //    modal_alert_and_event(response.value, response.message)
    // }
}

function disabledNext()
{
    const email = document.getElementById("email-rec");
    if (email.value.trim() !== "")
    {
        $('#btn-next').removeAttr('disabled');
    }
    else
    {
        $('#btn-next').attr('disabled', 'disabled');
    }

}

function codeValid(response)
{
    // if (response.value) 
    // {
        const email = document.getElementById("email-rec");

        $('.new_password').css("display", "block");
        $('.new_password-logging').css("display", "block");
        $('.code-verification').css("display", "none");
        $('.code-verification-logging').css("display", "none");
        $("#email-password-new").val(email.value);
        
    // }

    // if (!response.value) {
    //     $('.hash3').html(response.csrf_field);
    // }
}

function checkedValid()
{
    const password = document.getElementById("password-new");
    numbers = /[0-9]/g;
    letter = /[A-Z]/g;

    if (password.value.length >= 8) 
    {
       $("#minlength").attr("checked", true);
       $("#minlength").attr("disabled", false);

    }
    else
    {
        $("#minlength").attr("checked", false);
        $("#minlength").attr("disabled", true);

    }

    result = password.value.match(numbers);

    if (result) 
    {
       $("#numbers").attr("checked", true);
       $("#numbers").attr("disabled", false);

    }
    else
    {
       $("#numbers").attr("checked", false);
       $("#numbers").attr("disabled", true);

    }


    result2 = password.value.match(letter);

    if (result2) 
    {
       $("#letterUpper").attr("checked", true);
       $("#letterUpper").attr("disabled", false);

    }
    else
    {
       $("#letterUpper").attr("checked", false);
       $("#letterUpper").attr("disabled", true);

    }
}

function newPassword(response)
{
    // if (response.value) 
    // {
        $('.new_password').css("display", "none");
        $('.new_password-logging').css("display", "none");
        $('.login').css("display", "block");
        $('.box-card-loging').css("display", "block");
    // }
    // else
    // {
    //    modal_alert_and_event(response.value, response.message)
    // }
}

function codeAgain(response)
{
    if (response.value) 
    {
        modal_alert_and_event(response.value, response.message);
        document.getElementById('code-failed').innerHTML = '';
        document.getElementById('txt-incode').innerHTML = 'Ingresa tu nuevo código';
        document.getElementById('txt-infcod').innerHTML = 'Para restablecer tu contraseña, ingresa el nuevo código que hemos enviado a'; 
    }

    if (!response.value) {
        $('.hash1').html(response.csrf_field);
    }
}

function ressetCode(response)
{
    if (response.value) 
    {
        document.getElementById('code-failed').innerHTML = 'Tu código de verificación ha caducado.';
    }

    if (!response.value) {
        $('.hash2').html(response.csrf_field);
    }
}