<?php

function validaNome(string $nome) : bool {

    if(empty($nome)){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
        return false;
    
    }else if(strlen($nome) < 3){
        $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos que 3 caracteres';
        return false;
    
    }else if(strlen($nome) > 40){
        $_SESSION['mensagem-de-erro'] = 'Calma lá! O nome é muito extenso';
        return false;
    
    }else if(is_numeric($nome)){
        $_SESSION['mensagem-de-erro'] = 'Não digite números em seu nome!';
        return false;
    }
    return true;
}

function validaIdade(string $idade){
    if(!is_numeric($idade)){
        $_SESSION['mensagem-de-erro'] = 'Informe sua idade em números';
        return false;
    }
    return true;
}

