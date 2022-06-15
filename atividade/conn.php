<?php
$titulo=("titulo");
$descricacao=("descriccao");


$conectar = new PDO("mysql:host=".$host ."; d=".$dbtitulo, $descricao);
//troca
$titulo=$_POST['titulo'.$titulo];
$descricao=$_POST['descricao'.$descricao];

//prepara

$stmt=bindparam->();

//executa

$stmt=execute->();


?>