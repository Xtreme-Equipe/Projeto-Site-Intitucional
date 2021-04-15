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
    $admin = isset($_GET['admin']) ? $_GET['admin'] : "0";
    $class_editar = '';
    $class_descartar = 'hidden';

    if($admin=='1'){
        $class_editar = 'hidden';
        $class_descartar = '';
    }
?>

<div class="barra_admin btn">
    <div>
        <form class="<?=$class_editar?>" action="" method="GET"><!--habilita a edição da página-->
            <input type="hidden" name="admin" value="1">
            <button class="editar">Editar página</button>
        </form>

        <form class="<?=$class_descartar?>" action="" method="GET"> <!--habilita o descarte de alterações-->
            <input type="hidden" name="admin" value="0">
            <button class="descartar">Descartar</button>
        </form>

    </div>
    <span class="welcome">
        Bem-vindo(a) <strong><?=$nome_logado?></strong>
</span>
    
   <div class="sair">
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