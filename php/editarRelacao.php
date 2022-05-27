<?php
    require_once("conexaoBanco.php");
    $idRelacao=$_POST['idRelacao'];
    $descricao=$_POST['descricao'];

    echo $comando="UPDATE relacoes SET descricao='$descricao' WHERE idRelacao=".$idRelacao;

