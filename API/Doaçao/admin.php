<?php 
$conexao = mysqli_connect("localhost","root","","bd_doacao"); #conexao com o banco de dados doaçao
$sql = 'SELECT * FROM tb_doacao';
$consulta = mysqli_query($conexao,$sql) 
?> 

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
        
        <?php while($dado = $consulta->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dado['id']; ?></td>
          <td><?php echo $dado['nome']; ?></td> 
          <td><?php echo $dado['cpf']; ?></td> 
          <td><?php echo $dado['tel_number']; ?></td>
          <td><?php echo $dado['celular']; ?></td>
          <td><?php echo $dado['endereco']; ?></td> 
          <td><?php echo $dado['anonimo']; ?></td>
          </td> 
        </tr> 
        <?php } ?> 

      <?php
      $conexao = mysqli_connect("localhost","root","","bd_voluntario"); #conexao com o banco de dados voluntarios
      $sqll1 = 'SELECT * FROM tb_voluntario';
      $consultas1 = mysqli_query($conexao,$sqll1)
      ?>

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
        
        <?php while($dados1 = $consultas1->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dados1['id']; ?></td>
          <td><?php echo $dados1['nome']; ?></td> 
          <td><?php echo $dados1['nascimento']; ?></td>
          <td><?php echo $dados1['cpf']; ?></td>
          <td><?php echo $dados1['rg']; ?></td>
          <td><?php echo $dados1['tel_number']; ?></td>
          <td><?php echo $dados1['celular']; ?></td>
          <td><?php echo $dados1['email']; ?></td> 
          <td><?php echo $dados1['voluntario']; ?></td>
          <td><?php echo $dados1['especialidade']; ?></td>
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
      <?php
      $conexao = mysqli_connect("localhost","root","","bd_participantes"); #conexao com o banco de dados participantes
      $sqll = 'SELECT * FROM tb_participantes';
      $consultas = mysqli_query($conexao,$sqll)
      ?>

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
        
        <?php while($dados = $consultas->fetch_array()) { ?> 
        <tr> 
          <td><?php echo $dados['id']; ?></td>
          <td><?php echo $dados['nome']; ?></td> 
          <td><?php echo $dados['nome_pai']; ?></td> 
          <td><?php echo $dados['nascimento']; ?></td>
          <td><?php echo $dados['nome_mae']; ?></td>
          <td><?php echo $dados['cpf']; ?></td>
          <td><?php echo $dados['tel_number']; ?></td>
          <td><?php echo $dados['celular']; ?></td>
          <td><?php echo $dados['email']; ?></td> 
          <td><?php echo $dados['redesocial']; ?></td>
          <td><?php echo $dados['youtube']; ?></td>
          <td><?php echo $dados['outros']; ?></td>
          <td><?php echo $dados['especifique']; ?></td>
          </td> 
        </tr> 
        <?php } ?> 
      </table> 
    </body> 
</html>
