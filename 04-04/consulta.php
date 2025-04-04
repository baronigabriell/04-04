<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
</head>
<body>
    <table class="custom-table"> 
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Excluir</td>
            <td>Alterar</td>
        </tr>

        <?php
            include "conecta.php";

            $query = mysqli_query($conexao, "SELECT cad_id, cad_nome, cad_cpf, cad_telefone FROM cadastro group by 1");

            while ($saida = mysqli_fetch_array($query)) {
                $codigo = $saida[0];
                $nome = $saida[1];
                $cpf = $saida[2];
                $telefone = $saida[3];

                echo "<tr>";
                echo  "<td>" .$nome . "</td>";
                echo  "<td>" .$cpf. "</td>";
                echo  "<td>" .$telefone . "</td>";
                echo  "<td><a href=exclusao.php?id=".$codigo.">OK</a></td>";
                echo  "<td><a href=alteracao.php?id=".$codigo.">OK</a></td>";
                echo  "</tr>";
            }
            mysqli_close($conexao);
        ?>
    </table>
</body>
<style>
    table{
        border-collapse: collapse;
    }
    table td{
        border: 1px solid black;
        padding: 5px;
    }
</style>
</html>