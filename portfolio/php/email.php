<?php

$GetParam = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$Nome = $GetParam['name'];
$Email = $GetParam['email'];
$Msg =$GetParam['message'];

$Email_remetente="felipebetiniribeiro@gmail.com";
$Email_destinatario ="felipebetiniribeiro@gmail.comn";
$Email_reply = "($Email)";

$Email_assunto = "Novo Contato"
$Email_conteudo = "Nome ={$Nome} \n";
$Email_conteudo .= "Email = {$Email} \n";
$Email_conteudo .= "Mensagem= {$Msg} \n";
$HeaderArray = array("From: $Email_remetente",
                "Reply-to: $Email_reply",
                "Subject: $Email_assunto",
                "Return-Path: $Email_remetente",
                "MIME-Version:1.0",
                "X-Priority: 3",
                "Content-Type: text/html; charset=UTF-8");

$Email_headers= implode("\n, $HeaderArray");

if($Email_destinatario, $Email_assunto, $Email_conteudo, $Email_headers){
    ?>
    <div clas="trigger trigger-sucess">
        <p>Sucesso: Seu email foi enviado</p>
    </div>
    <?php
}else{
    ?>
    <div class="trigger trigger-error">
        <p>Falha: Email nao enviado</p>
    </div>
    <?php
}
?>