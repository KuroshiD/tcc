$(document).ready(function() {
    $('#sigName').focusout(function() {
        if ($(this).val() == '') {
            $("#sigName").css("border", "1.5px solid red");
            $("#sigName").attr("placeholder", "Informe o nome");
            $("#sigName").addClass("vazio");
        } else {
            $("#sigName").css("border", "none");
            $("#sigName").attr("placeholder", "Name");
            $("#sigName").removeClass("vazio");
        }
    })

    $('#sigDate').focusout(function() {
        if ($(this).val() == '') {
            $("#sigDate").css({
                "border": "1.5px solid red",
                "color": "red",
                "font-weight": "bold"
            });
        } else {
            $("#sigDate").css({
                "border": "none",
                "color": "black",
                "font-weight": "normal"
            });
        }
    })

    $('#sigEmail').focusout(function() {
        var email = $(this).val();

        function validaEmail(email) {
            var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return filtro.test(email);
        }

        if (email != '') {
            $("#sigEmail").css("border", "none");
            $("#sigEmail").attr("placeholder", "Name");
            $("#sigEmail").removeClass("vazio");

            if (validaEmail(email)) {
                $.ajax({
                    url: './src/processos/user/verifica_email.php',
                    method: 'POST',
                    data: {
                        email: email
                    },
                    success: function(result) {
                        if (result != '') {
                            $('#resposta').fadeIn().html(result);
                            $("#sigEmail").css("border", "1.5px solid red");
                        } else {
                            $('#resposta').fadeIn().html('');
                            $("#sigEmail").css("border", "none");
                        }
                    }
                })
            } else {
                alert('Email inválido!');
                $("#sigEmail").css("border", "1.5px solid red");
            }

        } else {
            $("#sigEmail").css("border", "1.5px solid red");
            $("#sigEmail").attr("placeholder", "Informe o email");
            $("#sigEmail").addClass("vazio");
        }
    })

    $('#sigPass').focusout(function() {
        if ($(this).val() == '') {
            $("#sigPass").css("border", "1.5px solid red");
            $("#sigPass").attr("placeholder", "Informe a senha");
            $("#sigPass").addClass("vazio");
        } else {
            $("#sigPass").css("border", "none");
            $("#sigPass").attr("placeholder", "Password");
            $("#sigPass").removeClass("vazio");
        }
    })

    $('#sigCPass').focusout(function() {
        if ($(this).val() == '') {
            $("#sigCPass").css("border", "1.5px solid red");
            $("#sigCPass").attr("placeholder", "Confirme a senha");
            $("#sigCPass").addClass("vazio");
        } else {
            $("#sigCPass").css("border", "none");
            $("#sigCPass").attr("placeholder", "Confirm password");
            $("#sigCPass").removeClass("vazio");
        }
    })

    $('#btnCad').click(function() {
        var nome = $('#sigName').val();
        var email = $("#sigEmail").val();
        var senha = $("#sigPass").val();
        var rtsenha = $("#sigCPass").val();
        var nascimento = $("#sigDate").val();

        if (nome == '' || email == '' || senha == '' || rtsenha == '' || nascimento == '') {
            if ($("#sigName").val() == '') {
                $("#sigName").css("border", "1.5px solid red");
                $("#sigName").attr("placeholder", "Informe o nome");
                $("#sigName").addClass("vazio");
            } else {
                $("#sigName").css("border", "1.5px solid white");
                $("#sigName").attr("placeholder", "Name");
                $("#sigName").removeClass("vazio");
            }

            if ($("#sigDate").val() == '') {
                $("#sigDate").css({
                    "border": "1.5px solid red",
                    "color": "red",
                    "font-weight": "bold"
                });
            } else {
                $("#sigDate").css({
                    "border": "none",
                    "color": "black",
                    "font-weight": "normal"
                });
            }

            if ($("#sigEmail").val() == '') {
                $("#sigEmail").css("border", "1.5px solid red");
                $("#sigEmail").attr("placeholder", "Informe o email");
                $("#sigEmail").addClass("vazio");
            } else {
                $("#sigEmail").css("border", "1.5px solid white");
                $("#sigEmail").attr("placeholder", "Email");
                $("#sigEmail").removeClass("vazio");
            }

            if ($("#sigPass").val() == '') {
                $("#sigPass").css("border", "1.5px solid red");
                $("#sigPass").attr("placeholder", "Informe a senha");
                $("#sigPass").addClass("vazio");
            } else {
                $("#sigPass").css("border", "1.5px solid white");
                $("#sigPass").attr("placeholder", "Password");
                $("#sigPass").removeClass("vazio");
            }

            if ($("#sigCPass").val() == '') {
                $("#sigCPass").css("border", "1.5px solid red");
                $("#sigCPass").attr("placeholder", "Confirme a senha");
                $("#sigCPass").addClass("vazio");
            } else {
                $("#sigCPass").css("border", "1.5px solid white");
                $("#sigCPass").attr("placeholder", "Confirm password");
                $("#sigCPass").removeClass("vazio");
            }

            $('#resposta').html('Preencha todos os campos!');
        }

        if (senha != '' && rtsenha != '' && senha != rtsenha) {
            $('#resposta').html('As senhas não correspondem!');
        }

        $.ajax({
            url: './src/processos/user/processaCad.php',
            method: 'POST',
            data: {
                nome: nome,
                nascimento: nascimento,
                email: email,
                senha: senha,
                rtsenha: rtsenha
            },
            success: function(result) {
                if (result != '') {
                    if (result == 'Sua conta foi criada :)') {
                        $('#form-cad').trigger('reset');
                        $("#respostaOk").html(result);
                        setTimeout(function() {
                            $('#respostaOk').fadeOut('Slow');
                        }, 3000);
                    } else {
                        $('#resposta').fadeIn().html(result);
                        setTimeout(function() {
                            $('#resposta').fadeOut('Slow');
                        }, 3000);
                    }
                }
            }
        })
    })
})