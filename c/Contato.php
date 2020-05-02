<?php

//1 – Definimos Para quem vai ser enviado o email
	$para = "contato@althisengenharia.com.br";

//2 - resgatar o nome digitado no formulário e  grava na variavel $nome
	$nome = $_REQUEST['nome'];

// 3 - resgatar o assunto digitado no formulário e  grava na variavel 
	$assunto = $_REQUEST['assunto'];

// 5 - resgatar o email digitado no formulário e  grava na variavel 
	$email = $_REQUEST['email'];

 //5 – Agora definimos a  mensagem que vai ser enviado no e-mail
	$mensagem = "<strong>Nome:  </strong>".$nome;
	$mensagem .= "<br>
				<label style='font-size: 10px;'>"
					.$email.
				"</label>";

				//título da mensagem no corpo do e-mail onde recebe o assunto
	$mensagem .= "<div style='	background-color: #EFF1F2; 
								width: 100%; 
								font-size: 15px; 
								padding: 10px; 
								text-align: center; 
								color: #363D40; 
								margin-top: 20px; 
								text-transform: uppercase; 
								font-weight: bold;'>
				 	".$assunto.
				"</div>";

				//mensagem no corpo do e-mail
	$mensagem .= "<br>
				<div style='	padding: 30px 100px 30px 100px; 
								text-align: justify;'>"
					.$_POST['mensagem'].
				"</div>";

	$mensagem .= "<div style='	background-color: #0C394B; 
								width: 100%; 
								font-size: 12px; 
								padding: 5px; 
								text-align: center; 
								color: #ffffff; 
								margin-top: 60px;'> 					

				</div>";


//6 – agora inserimos as codificações corretas e  tudo mais.

	$headers =  "Content-Type:text/html; charset=UTF-8\n";
	$headers .= "From:  ".$nome."<".$email.">\n"; 
	//Vai ser mostrado que  o email partiu deste email e seguido do nome
	$headers .= "X-Sender:  <althisengenharia@althisengenharia.com.br:2083>\n"; 
	//email do servidor que enviou
	$headers .= "X-Mailer: PHP  v".phpversion()."\n";
	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
	$headers .= "Return-Path:  <althisengenharia@althisengenharia.com.br>\n"; 
	//caso a msg seja respondida vai para  este email.
	$headers .= "MIME-Version: 1.0\n";


 
mail($para, $assunto, $mensagem, $headers);  //função que faz o envio do email.


?>