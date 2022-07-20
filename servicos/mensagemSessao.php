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

function setMensagemdeSucesso(string $mensagem) : void {
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemdeSucesso() : ?string {
    if(isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];
    return null;
}

function removerMensagemErro() : void {
    if(isset($_SESSION['mensagem-de-erro']))
    unset($_SESSION['mensagem-de-erro']);
}

function removerMensagemSucesso() : void {
    if(isset($_SESSION['mensagem-de-sucesso']))
    unset($_SESSION['mensagem-de-sucesso']);
}

?>