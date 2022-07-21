<?php
session_start();
function definirCategoria(string $nome, string $idade) : ?string {
   
    $categorias = [];
    $categorias[] = 'Infantil';
    $categorias[] = 'Adolescente';
    $categorias[] = 'Adulto';

    if(validaNome($nome) && validaIdade($idade)){
        removerMensagemErro();
        if($idade >= 6 && $idade <= 12){
            for($I = 0; $I <= count($categorias); $I++){
                if($categorias[$I] == 'Infantil'){
                    setMensagemdeSucesso(mensagem: "O nadador " .$nome. " compete na categoria Infantil");
                    return;
                }
            }
        }else if($idade >= 13 && $idade <= 18){
            for($I = 0; $I <= count($categorias); $I++){
                if($categorias[$I] == 'Adolescente'){
                    setMensagemdeSucesso(mensagem: "O nadador " .$nome. " compete na categoria Adolescente");
                    return;
                }
            }
        }else{
            for($I = 0; $I <= count($categorias); $I++){
                if($categorias[$I] == 'Adulto'){
                    setMensagemdeSucesso(mensagem: "O nadador " .$nome. " compete na categoria Adulto");
                    return;
                }
            }
        }
    }else{
        removerMensagemSucesso();
        return obterMensagemdeErro();
    }
}