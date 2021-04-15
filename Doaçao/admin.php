

<!DOCTYPE html> 
  <html> 
    <head> 
      <meta charset="UTF-8"> 
      <title>Admin Doaçoes</title> 
    </head> 
    <body> 
    <h1>Doações</h1>
      <table border="1"> 
        <tr> 
          <td>ID</td> 
          <td>Nome</td> 
          <td>CPF</td> 
          <td>Telefone</td> 
          <td>Celular</td> 
          <td>Endereço</td> 
          <td>Doador</td>
        </tr> 
        <?php 
          $conexao = mysqli_connect("localhost","root","","bd_doacao"); #conexao com o banco de dados doaçao
          $sql_doacao = 'SELECT * FROM tb_doacao GROUP by cpf';
          $consulta_doacao = mysqli_query($conexao,$sql_doacao) 
        ?> 

        <?php while($dado_doacao = $consulta_doacao->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado_doacao['id']; ?></td>
          <td><?php echo $dado_doacao['nome']; ?></td> 
          <td><?php echo $dado_doacao['cpf']; ?></td> 
          <td><?php echo $dado_doacao['tel_number']; ?></td>
          <td><?php echo $dado_doacao['celular']; ?></td>
          <td><?php echo $dado_doacao['endereco']; ?></td> 
          <td><?php echo $dado_doacao['anonimo']; ?></td>
          </td> 
        </tr> 
        <?php } ?> 
      </table> 

         
        <h1>Participantes</h1> 
        <table border="1"> 
          <tr> 
            <td>ID</td> 
            <td>Nome</td> 
            <td>Nome_Pai</td>
            <td>Nascimento</td> 
            <td>Nome_Mae</td> 
            <td>CPF</td> 
            <td>Telefone</td> 
            <td>Celular</td> 
            <td>E-mail</td> 
            <td>Rede_Social</td> 
            <td>Youtube</td>
            <td>Outros</td> 
            <td>Especifique</td> 
          </tr>
        
          <form  method="POST">
          <p>
          <label >Ordenar por:</label>
          <input type="submit" name='id' value="Data de Inscrição"/>
          <input type="submit" name='id' value="Ordem Alafabetica (A-Z)"/>
          <input type="submit" name='id'  value="Data de Nascimento"/>
          </p>
        </form>

        <?php #Comando para que o botao escolha entre as alternativas de ORDEM
            $ordem_participantes = ($_POST['id']);
            switch ($ordem_participantes) {
              case "Data de Inscrição":
                $sql_participantes = 'SELECT * FROM tb_participantes WHERE nascimento BETWEEN "2015-01-01" AND "2021-12-31" GROUP by cpf ORDER BY id';
              break;
              case "Ordem Alafabetica (A-Z)":
                $sql_participantes = 'SELECT * FROM tb_participantes WHERE nascimento BETWEEN "2015-01-01" AND "2021-12-31" GROUP by cpf ORDER BY nome';
              break;
              case "Data de Nascimento":
                $sql_participantes = 'SELECT * FROM tb_participantes WHERE nascimento BETWEEN "2015-01-01" AND "2021-12-31" GROUP by cpf ORDER BY nascimento';
              break;
        }?>

          

          <?php
          $conexao = mysqli_connect("localhost","root","","bd_participantes"); #conexao com o banco de dados participantes
          $consulta_participantes = mysqli_query($conexao,$sql_participantes)
          ?>

          <?php while($dados_participantes = $consulta_participantes ->fetch_array()){  ?>
          <tr> 
            <td><?php echo $dados_participantes['id']; ?></td>
            <td><?php echo $dados_participantes['nome']; ?></td> 
            <td><?php echo $dados_participantes['nome_pai']; ?></td> 
            <td><?php echo $dados_participantes['nascimento']; ?></td>
            <td><?php echo $dados_participantes['nome_mae']; ?></td>
            <td><?php echo $dados_participantes['cpf']; ?></td>
            <td><?php echo $dados_participantes['tel_number']; ?></td>
            <td><?php echo $dados_participantes['celular']; ?></td>
            <td><?php echo $dados_participantes['email']; ?></td> 
            <td><?php echo $dados_participantes['redesocial']; ?></td>
            <td><?php echo $dados_participantes['youtube']; ?></td>
            <td><?php echo $dados_participantes['outros']; ?></td>
            <td><?php echo $dados_participantes['especifique']; ?></td>
            </td> 
          </tr> 
          <?php } ?>
        </table> 


      
      <h1>Voluntarios</h1>
      <table border="1"> 
        <tr> 
          <td>ID</td> 
          <td>Nome</td> 
          <td>Nascimento</td> 
          <td>CPF</td> 
          <td>RG</td> 
          <td>Telefone</td> 
          <td>Celular</td> 
          <td>E-mail</td> 
          <td>Voluntario</td> 
          <td>Especialidade</td>
        </tr> 
        
          <?php
          $conexao = mysqli_connect("localhost","root","","bd_voluntario"); #conexao com o banco de dados voluntarios
          $sql_voluntario = 'SELECT * FROM tb_voluntario  GROUP by cpf';
          $consultas_voluntario = mysqli_query($conexao,$sql_voluntario)
          ?>
          
          
          <?php while($dados_voluntario = $consultas_voluntario->fetch_array()) { ?> 
          <tr> 
            <td><?php echo $dados_voluntario['id']; ?></td>
            <td><?php echo $dados_voluntario['nome']; ?></td> 
            <td><?php echo $dados_voluntario['nascimento']; ?></td>
            <td><?php echo $dados_voluntario['cpf']; ?></td>
            <td><?php echo $dados_voluntario['rg']; ?></td>
            <td><?php echo $dados_voluntario['tel_number']; ?></td>
            <td><?php echo $dados_voluntario['celular']; ?></td>
            <td><?php echo $dados_voluntario['email']; ?></td> 
            <td><?php echo $dados_voluntario['voluntario']; ?></td>
            <td><?php echo $dados_voluntario['especialidade']; ?></td>
            </td> 
          </tr> 
          <?php } ?> 
      </table> 
        
      <h1>Contato</h1>
      <table border="1"> 
        <tr> 
          <td>ID</td> 
          <td>Nome</td> 
          <td>Celular</td> 
          <td>E-mail</td> 
          <td>Descrição</td>
        </tr> 
        
          <?php
          $conexao = mysqli_connect("localhost","root","","bd_contato"); #conexao com o banco de dados voluntarios
          $sql_contato = 'SELECT * FROM tb_contato  GROUP by nome';
          $consultas_contato = mysqli_query($conexao,$sql_contato)
          ?>
          
          
          <?php while($dados_contato = $consultas_contato->fetch_array()) { ?> 
          <tr> 
            <td><?php echo $dados_contato['id']; ?></td>
            <td><?php echo $dados_contato['nome']; ?></td> 
            <td><?php echo $dados_contato['celular']; ?></td>
            <td><?php echo $dados_contato['email']; ?></td> 
            <td><?php echo $dados_contato['descriçao']; ?></td>
            </td> 
          </tr> 
          <?php } ?> 
        </table>
        
        <h1>Projetos</h1>
      <table border="1"> 
        <tr> 
          <td>ID</td> 
          <td>Nome Empreendedor</td> 
          <td>Nome Empresa</td>
          <td>CPF/CNPJ</td>
          <td>E-mail</td>
          <td>Telefone</td>
          <td>Celular</td> 
          <td>Cidade</td>
          <td>Estado</td>
          <td>Pessoa fis/jur</td>
          <td>Descrição do Projeto</td>
        </tr> 
        
          <?php
          $conexao = mysqli_connect("localhost","root","","bd_projetos"); #conexao com o banco de dados voluntarios
          $sql_projeto = 'SELECT * FROM tb_projetos  GROUP by cpf';
          $consultas_projeto = mysqli_query($conexao,$sql_projeto)
          ?>
          
          
          <?php while($dados_projetos =$consultas_projeto->fetch_array()) { ?> 
          <tr> 
            <td><?php echo $dados_projetos['id']; ?></td>
            <td><?php echo $dados_projetos['nome_empreendedor']; ?></td> 
            <td><?php echo $dados_projetos['nome_empresa']; ?></td> 
            <td><?php echo $dados_projetos['cpf']; ?></td> 
            <td><?php echo $dados_projetos['email']; ?></td> 
            <td><?php echo $dados_projetos['tel_number']; ?></td> 
            <td><?php echo $dados_projetos['celular']; ?></td>
            <td><?php echo $dados_projetos['cidade']; ?></td> 
            <td><?php echo $dados_projetos['estado']; ?></td> 
            <td><?php echo $dados_projetos['fisica_juridica']; ?></td>  
            <td><?php echo $dados_projetos['descriçao']; ?></td>
            </td> 
          </tr> 
          <?php } ?> 
        </table>  
    </body> 
</html>