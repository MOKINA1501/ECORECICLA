$(function(){
    $("#adm_user_op").click(function(){
        if($("#user_options").hasClass('none')){
            $("#user_options").removeClass('none');
        }else{
            $("#user_options").addClass('none'); 
        }
    });

    $.validator.addMethod("concatEqualsTo", function (value, element, params)
    {
       var concatedVal = "";

       console.log(value);
       
       $("#new-password").each(function(index, val){
            concatedVal += $(val).val();
        });

       $('#btn_change_password').on('click', function(){
            if(value === concatedVal)
            {
                $("#change_password").modal('show');
            }
        });

        return value === concatedVal;
       
    });

    $("#password").blur(function(){
        var password = $(this).val()
        $.ajax({
            type: "GET",
            url: $path_validate_password,
            dataType: "json",
            data: {
                password: password,
            },
            success: function(response)
            {
                if (response.value != true)
                {
                    modal_alert_and_event(response.value, response.message);
                }
            },
        });
    });

    $.validator.addMethod("conEqualsTo", function (value, element, params)
    {
       var concatedVal = "";

       $("#password").each(function(index, val){
            concatedVal += $(val).val();
        });

       $('#btn_change_password').on('click', function(){
            if(value !== concatedVal)
            {
                $("#change_password").modal('show');
            }
        });

        return value !== concatedVal;
       
    });


    if($('#form_change_pass').length)
    {
        var validate = $('#form_change_pass').validate(
        {
            rules:
            {
                password:
                {
                  required: true,
                },
                newpassword:
                {
                    required: true,
                    minlength: 8, 
                    conEqualsTo: '#password', 
                },
                conpassword:
                {
                    required: true,
                    minlength: 8,
                    concatEqualsTo:"#newpassword",
                }
            },
            messages:
            {
                password:
                { 
                  required: 'Este campo es obligatorio.',
                },
                newpassword:
                { 
                  required: 'Este campo es obligatorio.',
                  minlength: 'Debe contener mínimo 8 caracteres.',
                  conEqualsTo: 'No debe ser igual a la contraseña actual.',
                },
                conpassword:
                { 
                  required: 'Este campo es obligatorio.',
                  minlength: 'Debe contener mínimo 8 caracteres.',
                  concatEqualsTo: 'No coinciden las contraseñas.',
                },
            }
        });
    }

    $(window).on( "load", function() {
        var $openClose = document.getElementById("open-close"),
        $aside = document.getElementById("hv-list-menu"),
        $aside2 = document.getElementById("aside");

        $openClose.addEventListener("click",()=>{
            $aside.classList.toggle("desplegar")
            $aside2.classList.toggle("desplegar")
        })

        var $openCloses = document.getElementById("title-menu"),
        $asides = document.getElementById("hv-list-menu"),
        $asides2 = document.getElementById("aside");

        $openCloses.addEventListener("click",()=>{
            $asides.classList.toggle("desplegar")
            $asides2.classList.toggle("desplegar")
        })

        if($('#form_change_pass').length)
        {
            showPasswordLogin = document.querySelector('#visibility');
            showPasswordLogin.addEventListener('click', () => {
                password1 = document.querySelector('#password');
                if ( password1.type === "text" )
                {
                    password1.type = "password"
                    showPasswordLogin.innerHTML = "visibility_off";
                } 
                else 
                {
                    password1.type = "text"
                    showPasswordLogin.innerHTML = "visibility";
                }
            });
        

            showPasswordLogin2 = document.querySelector('#visibility2');
            showPasswordLogin2.addEventListener('click', () => {
                password1 = document.querySelector('#new-password');
                if ( password1.type === "text" )
                {
                    password1.type = "password"
                    showPasswordLogin2.innerHTML = "visibility_off";
                } 
                else 
                {
                    password1.type = "text"
                    showPasswordLogin2.innerHTML = "visibility";
                }
            });
    
            showPasswordLogin3 = document.querySelector('#visibility3');
            showPasswordLogin3.addEventListener('click', () => {
                password1 = document.querySelector('#con-password');
                if ( password1.type === "text" )
                {
                    password1.type = "password"
                    showPasswordLogin3.innerHTML = "visibility_off";
                } 
                else 
                {
                    password1.type = "text"
                    showPasswordLogin3.innerHTML = "visibility";
                }
            });
        }

        document.addEventListener('click', (e) => {
            if(e.target.matches('#aside') || e.target.matches('#title-menu'))
            {
                if(getComputedStyle(document.querySelector('.hv-time')).display == 'block') {
                    $aside.classList.remove("desplegar")
                    $aside2.classList.remove("desplegar")
                }
            }
        })

        document.getElementById("hv-ctn-search").addEventListener("mouseenter", (e) => {
            e.target.classList.add("hv-expand")
        })

        document.getElementById("hv-ctn-search").addEventListener("mouseleave", (e) => {
            if(document.getElementById("hv-search-all").value == "" && $("#hv-search-all:focus").length == 0) {
                e.target.classList.remove("hv-expand")
            }
        })

        document.getElementById("hv-ctn-search-mobile").addEventListener("mouseenter", (e) => {
            e.target.classList.add("hv-expand")
        })

        document.getElementById("hv-ctn-search-mobile").addEventListener("mouseleave", (e) => {
            if(document.getElementById("hv-search-all-mobile").value == "" && $("#hv-search-all-mobile:focus").length == 0) {
                e.target.classList.remove("hv-expand")
            }
        })
    });

    document.addEventListener("click", e => {
        if(e.target.matches("#hv-drop-menu") || e.target.matches("#hv-btn-close-drop") || e.target.matches("#hv-btn-close-drop *")) {
            document.getElementById("hv-drop-menu").classList.remove("show")
        }

        if(e.target.matches("#hv-ctn-search")) {
            if(document.getElementById("hv-search-all").value == "" && $("#hv-search-all:focus").length == 0) {
                e.target.classList.toggle("hv-expand")
            }
        }

        if(e.target.matches("#hv-ctn-search-mobile")) {
            if(document.getElementById("hv-search-all-mobile").value == "" && $("#hv-search-all-mobile:focus").length == 0) {
                e.target.classList.toggle("hv-expand")
            }
        }
    })

    $('#btn_close_change').on('click', function(){
        $("#change_password").modal('hide');
    })

    $('#btn_change').click(function(){
        $("#form_change_pass").ajaxSubmit({
            dataType: "json",
            success: changePass,
        });
    }); 
});


function modal_alert_and_event(data, message, event)
{  
    iziToast.show(
    {
        backgroundColor: (data ? '#D5E6D3' : '#F6D6D6'),
        color: (data ? '#40AC2F' : '#DE3030'),
        icon: (data ? 'far fa-smile' : 'far fa-frown'),
        iconColor: (data ? '#8CBB85' : '#FE7676'),
        maxWidth: 320,
        message: message,
        messageColor: (data ? '#8CBB85' : '#FE7676'),
        position: 'topRight',
        timeout: 3000,
        title: (data ? '¡Bien hecho!' : '¡Atención!'),
        titleColor: (data ? '#40AC2F' : '#DE3030'),
        onClosed: function() {
        }
    });
}

var totalTime = 5;
function countdown()
{
    document.getElementById('countdown').innerHTML = totalTime;
    if(totalTime==0)
    {
        window.location.href = $path_logout
    }
    else{
        totalTime-=1;
        setTimeout("countdown()",1000);
    }
}

function changePass(response)
{
    $("#change_password").modal('hide');
    if (response.value) 
    {
        modal_alert_and_event(response.value, response.message);
        countdown();
    }

    if (!response.value) {
        $('.hash').html(response.csrf_field);
    }

}