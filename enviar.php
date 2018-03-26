<?php

$aniversariante = $_POST["aniversariante"];
$mensagem = $_POST["mensagem"];

$to = "hudson.souza@movile.com";
$subject = "Feliz aniversário";

$message = "
<html>
<head>
<title>Resposta à pesquisa</title>
</head>
<body>
	<table align='center' style='width: 100%; max-width: 600px; padding: 5px;'>
		<tr>
			<td>
				<h1 style='font-family: roboto, avenir, helvetica, arial, sans-serif; font-size: 22px; margin-top: 5px; line-height: 20px; text-align: left; font-weight: bold; color: black;'>
				Respostas à Pesquisa – Facilities Survey
				</h1>

				<p style='font-family: roboto, avenir, helvetica, arial, sans-serif; font-size: 14px; color: black; margin-top: 5px; line-height: 20px;'>
				Olá Movilian@,
				 <br><br>
				No início de Julho ouvimos a sua opinião a respeito dos serviços da área de Facilities e trabalhamos para melhorar a qualidade de nosso atendimento com base em suas observações. 
				 <br><br>
				Gostaríamos de compartilhar com você nossas ações a agradecer o seu empenho em nos ajudar nesta pesquisa!
				</p>


			</td>
		</tr>
	</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = 'MIME-Version: 1.0' . '\r\n';
$headers .= 'Content-type:text/html;charset=UTF-8' . '\r\n';

// // More headers
$headers .= 'From: <andre.matiazzo@movile.com>' . '\r\n';

mail($to,$subject,$message,$headers);
?>