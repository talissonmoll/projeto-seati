<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem =  addslashes($_POST['mensagem']);

    
    $to = "contato@seatisolucoes.com";
    $subjet = "Contato - Seati"
    $body = "Nome: ".nome. ""




}
?>