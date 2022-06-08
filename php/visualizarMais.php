<?php
    require_once("conexaoBanco.php");
    $idCompromisso=$_POST['idComp'];

    $comando="SELECT p.nome, p.sobrenome FROM pessoas p INNER JOIN compromissos_pessoas cp ON p.idPessoa=cp.pessoas_idPessoa WHERE compromissos_idCompromissos=".$idCompromisso;

    $resultado=mysqli_query($conexao, $comando);
    $pessoas=array();

    while($p = mysqli_fetch_assoc($resultado)){
        array_push($pessoas, $p);
    }
    echo "<h3>Pessoas do compromisso</h3>";
    foreach($pessoas as $p) {
        echo "<p>".$p['nome']." ".$p['sobrenome']."</p>";
    }