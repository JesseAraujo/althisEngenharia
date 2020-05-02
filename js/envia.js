jQuery(document).ready(function () {
    jQuery('#submit').click(function () {

        var nome = jQuery('#nome').val();
        var email = jQuery('#email').val();
        var assunto = jQuery('#assunto').val();
        var mensagem = jQuery('#mensagem').val();

        if ((document.getElementById("nome").value == "") || (document.getElementById("email").value == "") || (document.getElementById("assunto").value == "") || (document.getElementById("mensagem").value == "")) {
            alert("Por favor, preencha os campos corretamente.");
        }
        else {

            jQuery.post('https://www.althisengenharia.com.br/c/Contato.php', { nome: nome, email: email, assunto: assunto, mensagem: mensagem, contato: true },
                function (data, textStatus) {

                    jQuery('#nome').val("");
                    jQuery('#email').val("");
                    jQuery('#assunto').val("");
                    jQuery('#mensagem').val("");

                    jQuery('#enviar').html("<div style='width: 100%; height: 40px; background-color: rgba(118, 238, 118, 0.521); color: #0B243B; padding:10px;'>Mensagem enviada com sucesso!</div>");
                });
            return false;
        }

    });

});
