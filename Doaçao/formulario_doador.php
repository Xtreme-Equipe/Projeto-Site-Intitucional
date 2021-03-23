<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="formulario_doador.css" media="all"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
        <title>Doações</title>
    </head>
    <body>
        <section class="corpo">
            <div class="titulo">
                <h1>Doações</h1>
            </div>
             <div class="conteudo">


            <div class="imagem">    
                <img src="doacao.png" title="imagemInicial" alt="doacao"/>
            </div>
            <div class="texto">
                <p> Com as doações, o centro tenta proporcionar um elevado nível de
                    educação e oportunidades para o desenvolvimento e criatividade das crianças.
                    De modo a assegurar o dinheiro que nos é fornecido, preparamos um relatório
                    detalhado sobre a utilização de fundos para todos os nossos doadores.
                    Pode também contribuir diretamente, ajudando a pagar as contas
                    de consumo (água, luz e aluguel).
                </p>
            </div> 
        </div>       
     <div> 
        <fieldset class="formulario">
            <div class="subtitulo">
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@700&display=swap" rel="stylesheet">
                <p><b>QUERO SER UM DOADOR</b></p>
            </div> 
        <form class="formulario" method = "post"  action = "cadastrado_doador.php" ><!--action usado para que após clicar no botão de enviar vá para a página de sucesso-->
          <div class="campo">
              <br>
            <label for="nome"><strong>Nome:</strong></label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo" required>

            <label for="cpf"><strong>CPF:</strong></label>
            <input type="text" name="cpf" id="cpf" placeholder="CPF xxx.xxx.xxx-xx" required>
            <br>
          </div>  
        <br>
        <div class="campo">
            <label for="tel_number"><strong>Tel:</strong></label>
            <input type="tel" name="tel_number" id="tel_number" placeholder="(00) 0000-0000" >

            <label for="celular"><strong>Cel:</strong></label>
            <input type="tel" name="celular" id="celular" placeholder="(00) 0000-000" required>            
        </div>
        <br>
        <div class="campo">
            <label for="endereco"><strong>End:</strong></label>
            <input type="text" name="endereco" id="cendereco" placeholder="endereço com número" required>
        </div>  
        <br>
        <div class="campo">
        <div class="campo inline left">
            <label>
                <input type="radio" name="anonimo" value="Recorrente">Quero ser um doador recorrente<!--ao escolher vai mostrar valor g-->
            </label>
            <label>
                <input type="radio" name="anonimo" value="Anonimo">Quero ser um doador anonimo<!--ao escolher vai mostrar valor e-->
            </label>
    
        </div>
        <br>
        <div>
            <button class="botao" type="submit">Enviar</button>
        </div>
        </form>  
        
        
        
        </fieldset>
        </div>
        <br>
        <div>

            <section class="dadosBanco">
                </div>
                 <div class="conteudoDois">
    
    
                <div class="imagemDois">    
                    <img src="qr_code.png" title="imagemDois" alt="qr_code"/>
                </div>
                <div class="textoDois">
                    <fieldset>
                        <p><b>Dados Bancários para doações:</b></p>
                            Banco: xxxx
                        <br>
                            Agência: xxxx
                        <br> 
                            Conta: xxxxxx-x
                        <br>
                            Pix: xxxxxxxxxxx
                    </fieldset>
                </div> 
            </div>       
        </div>
        <br>
        <div>
            <p>
               <b> Caso transifra dinheiro para a nossa conta, 
                pedimos que nos envie o informções sobre a transação via e-mail ou ligue para
                o número de telefone (12) 3966-2823.</b>
            </p>
            <br>    
            <p>
                <b>Para fazer doações pessoalmente:<br>
                R. Dom João VI, 151 - Jardim Colonial, São José dos Campos - SP: 12232-100</b>
            </p>
        </div>

        </section>

    

    </body>

</html>              

