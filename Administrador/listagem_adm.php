<?php
$id_adm = isset($_POST['userid']) ? $_POST['userid'] : "";
if ($id_adm != "") {
    $conection = mysqli_connect("localhost", "root", "", "bd_admin");
    $preparado = mysqli_prepare($conection, "delete from tb_user where id = ?"); //deleta usuário
    mysqli_stmt_bind_param($preparado, "i", $id_adm);
    mysqli_stmt_execute($preparado);
    header('Location: /Projeto-Site-Intitucional/Administrador/listagem_adm.php?');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Home/imagem/Vó-logo.png">
    <link rel="stylesheet" type="text/css" href="../Administrador/admin_header.css">
    <script src="../ckeditor_4.16.0_b1a78bed529d/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="../Administrador/adm.css">

    <title>Administrador</title>
</head>

<body class="background">
    <div>
        <?php
        include('../Administrador/admin_header.php');
        ?>
    </div>
    <div class="background"id="tabela">
        <table>
            <tr class="cabecalho" >
                <th>Nome</th>
                <th class="coluna_email">E-mail</th>
                <th class="coluna_acoes">Ações</th>
            </tr>

            <?php
            $conection = mysqli_connect("localhost", "root", "", "bd_admin");
            $consulta = "select email, name, id from tb_user";
            $resultado = mysqli_query($conection, $consulta);
            if (!$resultado) {
                die("OPS! Algo deu errado :( Entre em contato conosco!" . mysqli_error($conection));
            }
            while ($item_da_lista_resultado = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $item_da_lista_resultado["name"] . "</td>";
                echo "<td>" . $item_da_lista_resultado["email"] . "</td>";
                echo "<td>";
                echo "  <form action=\"editar_adm.php\" method=\"GET\">";
                echo "      <button class=\"botao_acoes\">";
                echo "          <input type=\"hidden\" name=\"admin\" value=\"1\">";
                echo "          <input type=\"hidden\" name=\"userid\" value=\"" . $item_da_lista_resultado["id"] . "\">";
                echo "         <img class=\"\" src=\"imagens/Edit-icon.png\" alt=\"Imagem de edição\" title=\"Editar dados do administrador\">";
                echo "      </button>";
                echo "  </form>";
                echo "  <form action=\"listagem_adm.php\" method=\"POST\">";
                echo "      <button class=\"botao_acoes\">";
                echo "          <input type=\"hidden\" name=\"userid\" value=\"" . $item_da_lista_resultado["id"] . "\">";
                echo "          <img class=\"\" src=\"imagens/Trash-icon.png\" alt=\"Imagem de remoção\" title=\"Remover administrador\">";
                echo "      </button>";
                echo "  </form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>

        </table>
        <div>
            <a href="../Administrador/editar_adm.php">
            <div class="newuser">
                <img src="../Administrador/imagens/adduser.png" alt="Imagem add user" title="Adicionar novo administrador">
            </div>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>