
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrado_com_sucesso2.css" media="screen">
    <title>Cadastro Concluído</title>
</head>
<body class="corpo">
    <a href="cadastro_participantes.html"> <!-- Substituir pelo link para a home-->
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
            $conexao = mysqli_connect("localhost","root","","bd_participantes");

            $nome         = isset($_POST['nome'])?$_POST['nome']:"";
            $nome_pai     = isset($_POST['nome_pai'])?$_POST['nome_pai']:"";
            $nascimento   = isset($_POST['nascimento'])?$_POST['nascimento']:"";
            $nome_mae     = isset($_POST['nome_mae'])?$_POST['nome_mae']:"";
            $cpf          = isset($_POST['cpf'])?$_POST['cpf']:"";
            $tel_number   = isset($_POST['tel_number'])?$_POST['tel_number']:"";
            $celular      = isset($_POST['celular'])?$_POST['celular']:"";
            $email        = isset($_POST['email'])?$_POST['email']:"";
            $redesocial   = isset($_POST['redesocial'])?$_POST['redesocial']:"";
            $youtube      = isset($_POST['youtube'])?$_POST['youtube']:"";
            $outros       = isset($_POST['outros'])?$_POST['outros']:"";
            $especifique  = isset($_POST['especifique'])?$_POST['especifique']:"";
    
            $sqll = "insert into tb_participantes (nome,nome_pai,nascimento,nome_mae,cpf,tel_number,celular,email,redesocial,youtube,outros,especifique) values ('$nome','$nome_pai','$nascimento','$nome_mae','$cpf','$tel_number','$celular','$email','$redesocial','$youtube','$outros','$especifique')";
            $salvar = mysqli_query($conexao,$sqll);
            
        ?>
</html>