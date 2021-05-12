<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Home/imagem/Vó-logo.png">
    <link rel="stylesheet" type="text/css" href="../Administrador/adm.css">
    <link rel="stylesheet" type="text/css" href="../Administrador/admin_header.css">

    <title>Painel administrativo</title>

</head>

<body class="fundo">
    <?php
        include('../Administrador/admin_header.php');
    ?>
    <div class="botao btn">
        <a href="listagem_adm.php" class="botao">
            <button class="button" title="Edita, adiciona e descarta administradores">Gerenciador de administradores</button>
        </a>
        <a href="../Home/index.php" class="botao">
             <button class="button" title="Modo edição do site">Editar site</button>
        </a>
        <a href="../Doaçao/admin.php" class="botao">
            <button class="button" title="Acessar dados cadastrados através dos formulários site">Acessar relatórios de dados</button>
        </a>
    </div>

    <div class="footer"></div>
</body>
</html>