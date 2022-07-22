<?php
include "servicos/validacao.php";
include "servicos/categorias.php";
include "servicos/mensagemSessao.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

definirCategoria($nome, $idade);
header('location: index.php');


?>