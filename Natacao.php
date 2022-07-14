<?php
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
//print_r($categorias);

$nome = 'Lorena';
$idade = 19;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12){
    //echo 'Infantil';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Infantil')
            echo "O nadador " .$nome. " compete na categoria Infantil";
    }
}else if($idade >= 13 && $idade <= 18){
    //echo 'Adolescente';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Adolescente')
            echo "O nadador " .$nome. " compete na categoria Adolescente";
    }
}else{
    //echo 'Adulto';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Adulto')
            echo "O nadador " .$nome. " compete na categoria Adulto";
    }
}
//Pausa no projeto
