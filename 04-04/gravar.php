<?php
    include "conecta.php";

    $nome = $_POST ['nome']; 
    $cpf = $_POST ['cpf'];
    $telefone =  $_POST ['telefone'];

    echo "<br>";
    echo $nome;
    
    echo "<br>";
    echo $cpf;
    
    echo "<br>";
    echo $telefone;

    $sql = "INSERT INTO cadastro (cad_nome, cad_cpf, cad_telefone) VALUES ('$nome', '$cpf','$telefone');";

    echo("<br>Gravado! Deseja ir a consulta?");
    echo("<br>");
    echo("<a href='consulta.php'>");
    echo("<Button>Consulta</Button>");
    echo("</a>");
    mysqli_close($conexao);
?>