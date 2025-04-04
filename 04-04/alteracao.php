<?php
    include "conecta.php";

    $id = $_GET["id"];

    $query = mysqli_query ($conexao, "SELECT cad_id, cad_nome, cad_cpf, cad_telefone FROM cadastro WHERE cad_id = '$id'") 
                           or die ("Erro ao Editar");
    
    $saida = mysqli_fetch_array ($query);

    $codigo = $saida[0];
    $nome = $saida[1];
    $cpf = $saida[2];
    $telefone = $saida[3];

?>
<html>
    <head>
        <title>Alterar</title></title>
    </head>
    <body>
        <form method = "get" action = "alteracao2.php">
            <table>
                <tr>
                  <td>Código:<input type = "text" name="codigo_v" value =<?php echo $codigo; ?> disabled></td>
                  <input type= hidden name= "codigo" value = <?php echo $codigo; ?>>
                   <td>Nome: <input type = "text" name="nome" value =<?php echo $nome; ?>></td>
                   <td>CPF: <input type = "text" name="cpf" value =<?php echo $cpf; ?>></td>
                <td>Telefone: <input type = "text" name="telefone" value =<?php echo $telefone; ?>></td>
                 </tr>

                </table>
                <input id="button" type=submit value= "Confirmar">
        </form>
    </body>
</html>