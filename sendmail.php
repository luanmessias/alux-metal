<?php

require("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtp.aluxmetal.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'webmaster@aluxmetal.com.br'; // Usuário do servidor SMTP
$mail->Password = 'aluxmetal102030****'; // Senha da caixa postal utilizada

$mail->From = "contato@aluxmetal.com.br"; 
$mail->FromName = "[SITE] - Formulario de contato";

$mail->AddAddress('vendas@aluxmetal.com.br', 'Contato');
//$mail->AddAddress('luanmessias10@gmail.com');
$mail->AddCC('webmaster@aluxmetal.com.br', 'Copia'); 
$mail->AddBCC('luanmessias10@gmail.com', 'Copia Oculta');


$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)

$mail->Subject  = "[SITE] - Formulario de contato"; // Assunto da mensagem


$title = "Formul&aacute;rio de contato <br><br>";
$nome = "<strong>Nome:</strong> " . $_POST["name"] . "<br>";
$contato = "<strong>E-Mail:</strong> " . $_POST["email"] . "<br>";
$assunto = "<strong>Assunto:</strong> " . $_POST["subject"] . "<br>";
$obs = "<strong>Observa&ccedil;&otilde;es:</strong> " . $_POST["message"];

$mail->Body = $title . $nome . $contato . $obs;

$enviado = $mail->Send();

$mail->ClearAllRecipients();
$mail->ClearAttachments();

if ($enviado) {
  header('Location: http://www.aluxmetal.com.br') ;
} else {
  header('Location: http://www.aluxmetal.com.br') ;
}



?>




