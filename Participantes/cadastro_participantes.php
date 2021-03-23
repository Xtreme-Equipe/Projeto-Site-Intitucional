  
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="cadastro_participantes.css" media="screen">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap" rel="stylesheet">
        <title>Cadastro de alunos</title>
    </head>
<body class="corpo">
    <div class="cadastro_alunos">
        <div>
            <h1 class="titulo">Inscrição Aluno</h1>           
        </div>

        <div class="texto">
            <b><p>-Bem-vindo, a pré-inscrição online possibilita ao futuro estudante solicitar uma vaga para o ano vigente. Primeiramente solicitamos que preencha os campos abaixo.
                   Esses dados serão usados para chegarmos até você. <p>
                A sua pré-inscrição será realizada de modo on-line e será analisada, e entramemos em contato caso tenha vaga.</p>
            </p></b>
        </div>
        <form class="formulario" method = "post" action="participante_concluido.php"> <!--action usado para que após clicar no botão de enviar vá para a página de cadastro concluido participantes-->
            <br><br>
            <fieldset class="grupo">
                <h2 class="subtitulo">Cadastro de Aluno</h2>
                <div class="campo left">
                    <label for="nome"><strong>Nome do candidato</strong></label>
                    <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>
                    <label for="nascimento"><strong>Data de nascimento</strong></label>
                    <input type="date" name="nascimento" id="nascimento" required>
                </div>

                <div class="campo right">
                    <label for="nome_pai"><strong>Nome do pai</strong></label>
                    <input type="text" name="nome_pai" id="nome_pai" placeholder="Nome Completo" required>
                        <label><b>Pai não declarado</b></label>
                        <input type="checkbox" id="pai_desconhecido" name="paternidade" value="Pai não declarado">
                </div>

                <div class="campo left">
                    <label for="nome_mae"><strong>Nome da mãe</strong></label>
                    <input type="text" name="nome_mae" id="nome_mae" placeholder="Nome Completo" required>
                </div>

                <div class="campo right">
                    <label for="cpf"><strong>CPF do responsável</strong></label>
                    <input type="text" name="cpf" id="cpf" placeholder="xxx.xxx.xxx-xx" required maxlength="11">
                </div>
    
                <div class="campo right">
                    <label for="tel_number"><strong>Telefone de Contato</strong></label>
                    <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000" maxlength="14">
                </div>
    
                <div class="campo left">
                    <label for="celular"><strong>Celular de contato</strong></label>
                    <input type="tel" name="celular" id="celular" placeholder="(00) 00000-0000"required maxlength="15">
                </div>
    
                <div class="campo right">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" placeholder="name@name.com" required>
                </div>
                <div class="campo right"><br><br><br><br></div>
                <div class="campo left"></div>
                <div>
                    <label><b>Como você conheceu a ONG?</b></label><br>
                    <input type="checkbox" id="redesocial" name="redesocial" value="Redes social">
                    <label for="Redes Sociais">Redes sociais</label>
                    <input type="checkbox" id="youtube" name="youtube" value="Youtube">
                    <label for="Youtube">Youtube</label>
                    <input type="checkbox" id="outros" name="outros" value="Outros">
                    <label for="outros">Outros</label>
                </div>
                <div class="checkbox">
                    <label>Especifique</label>
                    <textarea row="3" id="especifique" name="especifique"></textarea>
                </div>
                <br>
                <br>
                <br>
                    <button class="botao" type="submit">Enviar</button>
            </fieldset>  
        </form>
                
    </body>
  











</html>