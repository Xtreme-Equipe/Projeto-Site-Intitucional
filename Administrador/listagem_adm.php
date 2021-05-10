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

    <title>Listagem de administradores do site</title>
</head>

<body>
    <?php
    include('../Administrador/admin_header.php');
    ?>
    <table>
        <tr class="cabecalho">
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ações</th>
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
            echo "      <button>";
            echo "          <input type=\"hidden\" name=\"admin\" value=\"1\">";
            echo "          <input type=\"hidden\" name=\"userid\" value=\"" . $item_da_lista_resultado["id"] . "\">";
            echo "         <img class=\"\" src=\"imagens/Edit-icon.png\" alt=\"Imagem de edição\">";
            echo "      </button>";
            echo "  </form>";
            echo "  <form action=\"listagem_adm.php\" method=\"GET\">";
            echo "      <button>";
            echo "          <input type=\"hidden\" name=\"userid\" value=\"" . $item_da_lista_resultado["id"] . "\">";
            echo "          <img class=\"\" src=\"imagens/Trash-icon.png\" alt=\"Imagem de remoção\">";
            echo "      </button>";
            echo "  </form>";
            echo "</td>";
            echo "</tr>"; 
        }
        ?>

    </table>
    <div class="novouser">
        <form action="../Administrador/editar_adm.php" method="GET">
        <input type="hidden" name="admin" value="1">
            <button class="novouser">Novo Usuário</button>
        </form>
    </div>
</body>

</html>