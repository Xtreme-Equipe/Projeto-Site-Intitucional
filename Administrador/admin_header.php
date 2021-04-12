<?php
    session_start();
    $nome_logado = '';
    $islogado = FALSE;
    if(isset($_SESSION) && isset($_SESSION['name'])){
        if($_SESSION['name']){
            $islogado = TRUE;
            $nome_logado = $_SESSION['name'];
        }
    }

    if(!$islogado){
        echo '<!--';
    }
?>
<div class="barra_admin btn">
    <div class='welcome'>
        Bem-vindo(a) <strong><?=$nome_logado?></strong>
    </div>
    <div>
        <form action="../Administrador/login.php" method="POST">
            <input type="hidden" name="logout" value="True">
            <button class="sair">Sair</button>
        </form>
    </div>
</div> 
<?php
    if(!$islogado){
        echo '-->';
        
    }
?>