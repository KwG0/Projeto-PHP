<?php
session_start();
include (index.php);

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
    location('index.php');
    return;
}
//resolver o location
/*if(strlen($nome) < 3){
    $_SESSION['mensagem-de-erro'] = 'O nome não pode conter menos que 3 caracteres';
    header[string "location: index.php"];
    return;
}

if(strlen($nome) > 40){
    $_SESSION['mensagem-de-erro'] = 'Calma lá! O nome é muito extenso';
    header[string "location: Natacao.php"];
}
if(is_numeric($nome)){
    $_SESSION['mensagem-de-erro'] = 'Não digite números em seu nome!';
    header[string "location: Natacao.php"];
}

if(!is_numeric($idade)){
    $_SESSION['mensagem-de-erro'] = 'Informe sua idade em números';
    header[string "location: Natacao.php"];
}

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
?>