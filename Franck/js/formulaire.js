$(function(){

                $("#nom").keyup(function(){

                    if (!$('#nom').val().match(/^[a-z]+$/i)){
                        $('#nom').next('.error-message').show().text('Le champ nom doit contenir que des lettres.');
                    }
                    else{
                        $('#nom').next('.error-message').hide().text('');
                    }

                });

                $("#prenom").keyup(function(){

                    if (!$('#prenom').val().match(/^[a-z]+$/i)){
                        $('#prenom').next('.error-message').show().text('Le champ prenom doit contenir que des lettres.');
                    }
                    else{
                        $('#prenom').next('.error-message').hide().text('');
                    }

                });

                $("#email").keyup(function(){

                    var mailformat = /^[a-z0-9._-]+@[a-z0-9]+.[a-z]+$/i;

                    if (!$('#email').val().match(mailformat)){
                        $('#email').next('.error-message').show().text('Le champ email doit contenir un @.');
                    }
                    else{
                        $('#email').next('.error-message').hide().text('');
                    }

                });

                $("#date").keyup(function(){

                    var dateformat = /^[0-9]{4}-[0-9]{2}-[0-9]{2}$/;

                    if (!$('#date').val().match(dateformat)){
                        $('#date').next('.error-message').show().text('Le champ date est invalide. Format : 1995-11-18');
                    }
                    else{
                        $('#date').next('.error-message').hide().text('');
                    }

                });


                $("#password").keyup(function(){

                    var passwordformat = /^[a-z0-9]{8,}$/i;

                    if (!$('#password').val().match(passwordformat)){
                        $('#password').next('.error-message').show().text('Le password doit faire minimum 8 caracteres');
                    }
                    else{
                        $('#password').next('.error-message').hide().text('');
                    }

                });

                $("#verif_pass").keyup(function(){

                    if ($('#verif_pass').val() != $('#password').val()){
                        $('#verif_pass').next('.error-message').show().text('Les mots de passe sont différents');
                    }
                    else{
                        $('#verif_pass').next('.error-message').hide().text('');
                    }

                });

});