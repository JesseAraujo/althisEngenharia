<?php
//---------------------------------------------------------------------------------------------------------------
//7 – Preparando para envio de mensagem resposta

//8 – Definimos Para quem vai ser enviado o email
$para = $email;
$assunto = 'CBH-ALPA';

//9 – Agora definimos a  mensagem resposta

$mensagem = "Agradecemos por seu contato <br> Entraremos em contato em breve.";

			//icones rede social
$mensagem .= "<br>
			<div style='	text-align: center;'>
				<a href='https://www.facebook.com/CBHALPA' target='new' style='text-decoration: none;'>
					<img src='http://cbhalpa.com.br/contact/face.jpg' width='60' height='60'> 
				</a>
				<br>
				<a href='http://cbhalpa.com.br/' target='new' style='text-decoration: none;'>
					<img src='http://cbhalpa.com.br/contact/logo.png' width='100' height='60'> 
				</a>  				
			</div>";

$mensagem .= "<div style='	background-color: #0C394B; 
							width: 100%; 
							font-size: 12px; 
							padding: 5px; 
							text-align: center; 
							color: #ffffff; 
							margin-top: 60px;'> 

				---- favor não responder a este e-mail ----

			</div>";

$mensagem .= "<br>
				<img src='http://cbhalpa.com.br/contact/rodapeemail.png' style='margin-top: 20px; margin-bottom: 20px;'>"; //imagem assinatura


//6 – agora inserimos as codificações corretas e  tudo mais.

	$headers =  "Content-Type:text/html; charset=UTF-8\n";
	$headers .= "From:  CBH-ALPA<cbhalpa@gmail.com>\n"; 
	//Vai ser mostrado que  o email partiu deste email e seguido do nome
	$headers .= "X-Sender:  <cbhalpac@h27.servidorhh.com>\n"; 
	//email do servidor que enviou
	$headers .= "X-Mailer: PHP  v".phpversion()."\n";
	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
	$headers .= "Return-Path:  <cbhalpac@h27.servidorhh.com>\n"; 
	//caso a msg seja respondida vai para  este email.
	$headers .= "MIME-Version: 1.0\n";


mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.


echo "<meta http-equiv='refresh' content='0;URL=http://cbhalpa.com.br/Contato'>"; //redireciona a página de Contato

?>