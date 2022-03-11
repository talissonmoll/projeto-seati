<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {

    $nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
    $email = $_POST['email'];
    $telefone = !empty($_POST['telefone']) ? $_POST['telefone'] : 'Não informado';
    $mensagem = $_POST['mensagem'];
    $data = date('d/m/Y H:i:s');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.seatisolucoes.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contato@seatisolucoes.com';
    $mail->Password = ;
    $mail->Port = 465;

    $mail->setFrom('contato@seatisolucoes.com');
    $mail->addAddress('atendimento@seatisolucoes.com');

    $mail->isHTML(true);
    $mail->Subject = 'Contato de Cliente';
    $mail->Body = "Nome: {$nome}<br>
                   Email: {$email}<br>
                   Telefone: {$telefone}<br>
                   Mensagem: {$mensagem}<br>
                   Data/hora: {$data}";

    if ($mail->send()) {
        echo 'Email enviado com sucesso';
    } else {
        echo 'Email nao enviado';
    }
} else {
    echo 'Não enviado: informar o email e a mensagem.';
}
