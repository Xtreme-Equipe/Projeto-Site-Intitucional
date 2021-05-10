<?php
$name_adm       = isset($_POST['name']) ? $_POST['name'] : "";
$email_adm       = isset($_POST['email']) ? $_POST['email'] : "";
$password_adm       = isset($_POST['password']) ? $_POST['password'] : "";

if ($name_adm != "" || $email_adm != "" || $password_adm != "") {
    $conexao = mysqli_connect ("localhost", "root", "", "bd_admin");
    $preparado = mysqli_prepare($conexao, "insert into tb_user (name, email, password) values (?, ?, ?)");
    mysqli_stmt_bind_param($preparado, "sss", $name_adm, $email_adm, $password_adm);
    mysqli_stmt_execute($preparado);
    header('Location: /Projeto-Site-Intitucional/Administrador/listagem_adm.php?'); //redireciona para listagem de adm
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

    <title>Editar administradores do site</title>
</head>

<body>
    <?php
    include('../Administrador/admin_header.php');
    ?>
    <form action="editar_adm.php" method="POST">
       <label for="name">Nome</label> <input type="text" name="name">
      <label for="email">Email</label> <input type="email" name="email">
      <label for="password">Senha</label> <input type="password" name="password">
    
    <div class="salve">
        <button class="salve">Salvar</button>
    </div>
    </form>
</body>

</html>