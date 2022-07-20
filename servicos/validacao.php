<?php

function validaNome(string $nome) : bool {

    if(empty($nome)){
        setMensagemdeErro(mensagem: 'O nome não pode ser vazio!');
        return false;
    
    }else if(strlen($nome) < 3){
        setMensagemdeErro(mensagem: 'O nome não pode conter menos que 3 caracteres');
        return false;
    
    }else if(strlen($nome) > 40){
        setMensagemdeErro(mensagem: 'Calma lá! O nome é muito extenso');
        return false;
    
    }else if(is_numeric($nome)){
        setMensagemdeErro(mensagem: 'Não digite números em seu nome!');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool {
    if(!is_numeric($idade)){
        setMensagemdeErro(mensagem: 'Informe sua idade em números');
        return false;
    }
    return true;
}

