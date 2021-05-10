<!-- Para cada pagina de cadastro tera que ter um cadastro concluido a parte pra conter a conexao com mysql-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastrado_com_sucesso_projeto.css" media="screen">
    <link rel="stylesheet" type="text/css" href="../Home/css/style.css">
    <title>Cadastro Concluído</title>
</head>

<body>

    <div id="container">
        <!-- Início container -->

        <header>
            <div class="center-header">
                <div class="vó-fundo">
                    <img src="../Home/imagem/fundo-3.jpeg">
                </div><!--vó-fundo-->
            </div><!--center-->
        </header>

        <nav>
            <div class="center-nav">
                <div class="logo">
                    <a href="../Home/index.php">
                    <img src="../Home/imagem/Vó-logo.png">
                </div><!--logo-->

                <ul class="menu">
                    <li><a href="../Home/index.php">Home</a></li>
                    <li><a href="../Sobre/sobre.php">Sobre</a></li>
                    <li><a class="btn-menu" href="../Projetos/projetos.php">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="../Contato/Contato2.php">Contato</a></li>
                    <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
                </ul><!--menu-->

                <ul class="menu-mobile">
                <img class="menu-mobile-icon" src="../Home/imagem/Vó-menu-mobile.png">
                    <div class="menu-itens">
                        <li><a href="../Home/index.php">Home</a></li>
                        <li><a href="../Sobre/sobre.php">Sobre</a></li>
                        <li><a class="btn-menu" href="../Projetos/projetos.php">Projetos</a></li>
                        <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                        <li><a href="../Contato/Contato2.php">Contato</a></li>
                        <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
                    </div>
                </ul>

            </div><!--center-->
        </nav>

        <a href="..//Home/index.php">
            <div class="imagem_check">
                <img src="imagens/Accept-icon.png" alt="Imagem check">
            </div>
        </a>
        <h1 class="h1">SUCESSO!</h1>

        <div class="h2_h3">
            <h2>Seu cadastro foi enviado!</h2>

            <div class="imagem_maos">
                <img src="../Participantes/mãos_cadastrado_com_sucesso.jpeg" alt="Imagem de mÃ£os coloridas">

            </div>

            <h3>AGRADECEMOS A SUA PARTICIPAÇÃO!</h3>

        </div>
        
        <footer class="footer-vó">
            <div class="center-footer">
                <div class="footer-left">
                        <p>Telefone : (12) 3966- 2833</p>
                        <p>E-mail: administracao@aamu.org.br</p>
                        <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
                </div>

                <div class="footer-right">
                    <p>Você pode nos ajudar compartilhando nossa causa</p>
                    <span>
                        <a target="_blank" href="javascript:void(0)" onclick="share()">
                            <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                        </a>
                                
                        <a target="_blank" href="">
                            <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />
                        </a>

                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                            <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                        </a>
                                
                        <a target="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                            <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
                        </a>
                    </span>
                </div>

                <div class="footer-center">
                    <p>2021 
                    <a href="">Vó Maria Félix</a> 
                    - Todos os direitos reservados.</p>
                </div>

            </div>
        </footer>
        
    </div>

    <script>
        function share(){
            if (navigator.share !== undefined) {
                navigator.share({
                    title: 'Maria Vó Félix',
                    text: 'Um texto de resumo',
                    url: 'https://www.facebook.com/fatecjessenvidal/',
                })
                    .then(() => console.log('Successful share'))
                    .catch((error) => console.log('Error sharing', error));
                }
            }
    </script>

    <script>

        var el = document.querySelector('.menu-mobile-icon');

        el.addEventListener('click',()=>{
            //Queremos mostrar o menu.
            var menuItens = document.querySelector('.menu-itens');
            if(menuItens.classList.contains('show')){
                menuItens.classList.add('hide'); 
                menuItens.classList.remove('show'); 
            }else{
                menuItens.classList.add('show'); 
                menuItens.classList.remove('hide'); 
            }       
        });

    </script>

</body>
 
<?php
            $conexao = mysqli_connect("localhost","root","","bd_projetos");
            

            $nome_empreendedor = isset($_POST['nome_empreendedor'])?$_POST['nome_empreendedor']:"";
            $nome_empresa      = isset($_POST['nome_empresa'])?$_POST['nome_empresa']:"";
            $cpf               = isset($_POST['cpf'])?$_POST['cpf']:"";
            $email             = isset($_POST['email'])?$_POST['email']:"";
            $tel_number        = isset($_POST['tel_number'])?$_POST['tel_number']:"";
            $celular           = isset($_POST['celular'])?$_POST['celular']:"";
            $cidade            = isset($_POST['cidade'])?$_POST['cidade']:"";
            $estado            = isset($_POST['estado'])?$_POST['estado']:"";
            $fisica_juridica   = isset($_POST['fisica_juridica'])?$_POST['fisica_juridica']:"";
            $descriçao         = isset($_POST['descriçao'])?$_POST['descriçao']:"";

                    
            $sql_projeto = "insert into tb_projetos (nome_empreendedor,nome_empresa,cpf,email,tel_number,celular,cidade,estado,fisica_juridica,descriçao) values ('$nome_empreendedor','$nome_empresa','$cpf','$email','$tel_number','$celular','$cidade','$estado','$fisica_juridica','$descriçao')";
            $salvar = mysqli_query($conexao, $sql_projeto);
        ?>
        
</html>
