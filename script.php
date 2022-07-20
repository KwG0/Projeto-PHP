<?php
session_start();

$categorias = [];
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];


if($idade >= 6 && $idade <= 12){
    //echo 'Infantil';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Infantil'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria Infantil";
            header("Location: index.php");
            die();
        }
    }
}else if($idade >= 13 && $idade <= 18){
    //echo 'Adolescente';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Adolescente'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria Adolescente";
            header("Location: index.php");
            die();
        }
    }
}else{
    //echo 'Adulto';
    for($I = 0; $I <= count($categorias); $I++){
        if($categorias[$I] == 'Adulto'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador " .$nome. " compete na categoria Adulto";
            header("Location: index.php");
            die();
        }
    }
}
?>