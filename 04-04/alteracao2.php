<?php
    include "conecta.php";

    $codigo = $_GET["codigo"];
    $nome = $_GET["nome"];
    $cpf = $_GET["cpf"];
    $telefone = $_GET["telefone"];

    $query = mysqli_query($conexao,"UPDATE cadastro SET cad_nome = \"$nome\", cad_cpf = \"$cpf\", cad_telefone = \"$telefone\"
                                    WHERE cad_id = '$codigo'") or die ("Erro na Edição");

    echo "<h3>Alterado com sucesso.</h3>";
    echo("<br>");
    echo("<a href='consulta.php'>");
    echo("<Button>Consulta</Button>");
    echo("</a>");

?>