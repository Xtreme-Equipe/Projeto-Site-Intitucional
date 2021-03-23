
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrado_com_sucesso.css" media="screen">
    <title>Cadastro Concluído</title>
</head>
<body class="corpo">
    <a href="formulario_doador.html"> <!-- Substituir pelo link para a home-->
        <div class="imagem_check">
        <img src="accept-icon.png" alt="Imagem check">
        </div>
    </a>

    <h1 class="titulo">SUCESSO!</h1>

    <div class="texto">
    <h2>Seu cadastro foi enviado!</h2>

        <div class="imagem_maos">
            <img src="mãos_cadastrado_com_sucesso.jpeg" alt="Imagem de mãos coloridas">
        </div>

    <h3>AGRADECEMOS A SUA PARTICIPAÇÃO!</h3>
    </div>
</body>
<?php
            $conexao = mysqli_connect("localhost","root","","bd_doacao");

            $nome         = isset($_POST['nome'])?$_POST['nome']:"";
            $cpf          = isset($_POST['cpf'])?$_POST['cpf']:"";
            $tel_number   = isset($_POST['tel_number'])?$_POST['tel_number']:"";
            $celular      = isset($_POST['celular'])?$_POST['celular']:"";
            $endereco     = isset($_POST['endereco'])?$_POST['endereco']:"";
            $anonimo      = isset($_POST['anonimo'])?$_POST['anonimo']:"";
                    
            $sql = "insert into tb_doacao (nome,cpf,tel_number,celular,endereco,anonimo) values ('$nome','$cpf','$tel_number','$celular','$endereco','$anonimo')";
            $salvar = mysqli_query($conexao,$sql);
            
        ?>
</html>