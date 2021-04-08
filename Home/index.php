
<?php
/*Admin indica se a pág está ou não em modo de edição*/
$admin         = isset($_GET['admin']) ? $_GET['admin'] : "0";
/*Texto_esquerdo faz atualização do lado esquerdo da home e salva no banco de dados */
$texto_esquerdo = isset($_POST['texto_esquerdo']) ? $_POST['texto_esquerdo'] : "";
if ($texto_esquerdo != "") {
    $conexao = mysqli_connect ("localhost", "root", "", "bd_home");
    $preparado = mysqli_prepare($conexao, "update tb_conteudo set conteudo = ? where pagina = 'home' and localizacao = 'esquerda'");
    mysqli_stmt_bind_param($preparado, "s", $texto_esquerdo);
    mysqli_stmt_execute($preparado);
}
/*Imagem_direita faz atualização da imagem direita da home(ao lado do texto equerdo) e salva a imagem no hd*/
$imagem_direita = isset($_FILES['imagem_direita']) ? $_FILES['imagem_direita'] : "";
if ($imagem_direita) {
    $temp_filename = $imagem_direita["tmp_name"];
    $newfile = 'imagem/uploaded.img';
    copy($temp_filename, $newfile);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Maria Vó Félix</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Estilo customizado -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="../ckeditor_4.16.0_b1a78bed529d/ckeditor/ckeditor.js"></script>


</head>
<body>

    <div id="container"><!-- Início container -->

        <header>
            <div class="center">
                <div class="vó-fundo">
                    <h2>VÓ MARIA FÉLIX - FUNDO</h2>
                </div><!--vó-fundo-->
            </div><!--center-->
        </header>

        <nav>
            <div class="center">
                <div class="logo">
                    
            
                    <img src="imagem/Vó-logo.jpeg">
                </div><!--logo-->

                <ul class="menu">
                    <li><a class="btn-menu" href="../Home/index.php">Home</a></li>
                    <li><a href="sobre">Sobre</a></li>
                    <li><a href="#projetos">Projetos</a></li>
                    <li><a href="../Voluntario/cadastro_voluntario.php">Seja um voluntário</a></li>
                    <li><a href="contato">Contato</a></li>
                    <li><a href="../Doaçao/formulario_doador.php">Doações</a></li>
                </ul><!--menu-->

            </div><!--center-->
        </nav>

        <section class="main">
            <div class="center">
                <div class="main_cta">
                    <h2>Vó Maria Félix</h2> 
                    <p>Centro comunitário de convivência infantil</p>
                </div><!--main-cta-->
            </div><!--center-->
        </section><!--main--> 

        <section class="vó center">
            <div class="center1">
                <div class="vó-content left">
                    <?php
                    /*Formulário de edição de texto */
                    if ($admin == "1") {
                        echo "<form action=\"index.php\" method=\"POST\"> 
                            <textarea id=\"editor\" name=\"texto_esquerdo\">";
                    }
                    $conexao = mysqli_connect("localhost","root","","bd_home");
                    $consulta = "select conteudo from tb_conteudo where pagina = 'home' and localizacao = 'esquerda'";
                    $resultado = mysqli_query($conexao, $consulta);
                    if (!$resultado) {
                        die ("OPS! Algo deu errado :( Entre em contato conosco!" . mysqli_error($conexao));
                    }
                    while ($item_da_lista_resultado = mysqli_fetch_assoc($resultado)) {
                        echo $item_da_lista_resultado["conteudo"];
                    }
                    ?>
                           
                    <?php
                    if ($admin == "1") {
                        echo "</textarea> <button type=\"submit\">Salvar</button>
                    </form>";
                    }
                    ?>
                </div>
                <div class="vó-content right">
                <?php
                /*Adiciona o formulário de edição de imagem*/
                    if ($admin == "1") {
                        echo "<form action=\"index.php\" method=\"POST\"enctype=\"multipart/form-data\">";
                    }
                    echo '<img class="vó-img" src="imagem/uploaded.img" />';
                    if ($admin == "1") {
                        echo "<label for=\"conteudo\">Enviar imagem:</label>
                        <input type=\"file\" name=\"imagem_direita\" accept=\"image/*\"> <button type=\"submit\">Salvar</button>
                    </form>";
                    }
                    ?>
                    <!--<img class="vó-img" src="imagem/img-vó-1.jpeg" /> -->
                </div>
                
            </div><!--center-->
        </section><!--vó-->

        <section class="você-pode center">
            <div class="center1">
                <div class="você-pode-content vó-content left">
                    <p>
                        <span class="azul">Você</span>
                        <span>pode ser a</span>
                        <span class="laranja">mudança</span>
                        <span>na vida de uma</span>
                        <span class="laranja">criança</span>
                        <span class="azul">hoje!</span>
                    </p>
                </div>

                <div class="botões vó-content right">
                    <a href="../Doaçao/formulario_doador.html"><button>Seja um doador<img src="imagem/vó-doe.jpeg"></button></a>
                    <a href="../Voluntario/cadastrovoluntario.html"><button>Seja um voluntário<img src="imagem/vó-voluntário.jpeg"></button></a>
                    <a href="../Participantes/cadastro_participantes.html"><button>Inscreva seu filho<img src="imagem/vó-inscreva.jpeg"></button></a>
                </div>
            </div><!--center-->
        </section><!--você-pode-->
        
        <div class="footer-home">
            <div class="footer">
                <div class="footer-inline">
                    <div class="footer-left">
                        <p>Telefone:(12)3966-2833</p>
                        <p>Email:administracao@aamu.org.br</p>
                        <p>Horário de Segunda a Sexta, das 07:00h às 17:00hs</p>
                    </div>
            
                    <div class="footer-right">
                        <span>Você pode nos ajudar compartilhando nossa causa</span>
                        <span>
                            <span>
                                <a target="_blank" href="javascript:void(0)" onclick="share()">
                                    <img class="vó-icons-share"src="../Home/imagem/compartilhar.png" />
                                </a>
                    
                                <img class="vó-icons-share vó-icons-share-insta"src="../Home/imagem/logo-instagram.png" />
                    
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-face" src="../Home/imagem/logo-facebook.png" >
                                </a>
                    
                                <a target="_blank" href="https://api.whatsapp.com/send?text=https://www.facebook.com/fatecjessenvidal/">
                                    <img class="vó-icons-share vó-icons-share-whats" src="../Home/imagem/logo-whatsapp.png" />
                                </a>
                            </span>
                        </span>
                        
        
                    </div>
                </div>
                
        
                <div class="footer-center">
                    <p>2021 <a href="">Vó Maria Félix</a> - Todos os direitos reservados.</p>
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
                
            </div>
        </div>
        

    </div><!--/fim container -->
    
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
    <script>
        document.addEventListener(
            "DOMContentLoaded", 
            function() {
                CKEDITOR.replace("editor", false) /*inicializa o editor de texto após o carregamento da página */
            }
        )

    </script>

</body>
</html>