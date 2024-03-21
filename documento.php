<?php

$nome = addslashes($_POST['nome'])
$email = addslashes($_POST['email'])
$numero = addslashes($_POST['número'])
$cc = addslashes($_POST['select'])

$para = "russodo7cursos@gmail.com";
$assunto = "Formulário de compra de cc";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Número: ".$numero."\n"."Cartão: ".$select;

$cabeca = "From: russodo7cursos@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
	echo("email enviado com sucesso");
}else{
	echo("email não enviado");
}

?>