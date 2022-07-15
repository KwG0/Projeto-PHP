<?php
$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome)){
    print "O nome não pode ser vazio!";
    return;
}

if(strlen($nome) < 3){
    print 'O nome não pode conter menos que 3 caracteres';
    return;
}

if(strlen($nome) > 40){
    print 'Calma lá! O nome é muito extenso';
    return;
}
if(is_numeric($nome)){
    print 'Não digite números em seu nome!';
    return;
}

if(!is_numeric($idade)){
    print 'Informe sua idade em números';
    return;
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