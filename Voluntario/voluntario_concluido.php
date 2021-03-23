<!-- Para cada pagina de cadastro tera que ter um cadastro concluido a parte pra conter a conexao com mysql-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="screen">
    <title>Cadastro Concluído</title>
</head>
<body>
    <a href="cadastrovoluntario.html"> <!-- Substituir pelo link para a home-->
        <div class="imagem_check">
        <img src="imagens/Accept-icon (1).png" alt="Imagem check">
        </div>
    </a>

    <h1 class="h1">SUCESSO!</h1>

    <div class="h2_h3">
    <h2>Seu cadastro foi enviado!</h2>

        <div class="imagem_maos">
            <img src="imagens/mãos_cadastrado_com_sucesso.jpeg" alt="Imagem de mãos coloridas">
        </div>

    <h3>AGRADECEMOS A SUA PARTICIPAÇÃO!</h3>
    </div>
</body>
<?php
            $conexao = mysqli_connect("localhost","root","","bd_voluntario");
            

            $nome         = isset($_POST['nome'])?$_POST['nome']:"";
            $nascimento   = isset($_POST['nascimento'])?$_POST['nascimento']:"";
            $cpf          = isset($_POST['cpf'])?$_POST['cpf']:"";
            $rg           = isset($_POST['rg'])?$_POST['rg']:"";
            $tel_number   = isset($_POST['tel_number'])?$_POST['tel_number']:"";
            $celular      = isset($_POST['celular'])?$_POST['celular']:"";
            $email        = isset($_POST['email'])?$_POST['email']:"";
            $voluntario   = isset($_POST['voluntario'])?$_POST['voluntario']:"";
            $especialidade= isset($_POST['especialidade'])?$_POST['especialidade']:"";
                    
            $sql1 = "insert into tb_voluntario (nome,nascimento,cpf,rg,tel_number,celular,email,voluntario,especialidade) values ('$nome','$nascimento','$cpf','$rg','$tel_number','$celular','$email','$voluntario','$especialidade')";
            $salvar = mysqli_query($conexao,$sql1);

            
            
        ?>
        
</html>