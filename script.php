<?php
include "../Natacao/servicos/mensagemSessao.php";
include "../Natacao/servicos/validacao.php";
include "../Natacao/servicos/categorias.php";

$nome = $_POST['nome'];
$idade = $_POST['idade'];

definirCategoria($nome, $idade);
header("location: index.php");


?>