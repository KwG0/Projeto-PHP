<?php
session_start();

function setMensagemdeErro(string $mensagem) : void {
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemdeErro() : ?string {
    if(isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];
    return null;
}

?>