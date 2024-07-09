<nav class="navbar">
    
    <?php 

    require_once "../classes/Usuario.php";

    session_start();

    $nome = $_SESSION['nome'] ?? null;
    $img = $_SESSION['imagem'] ?? null;

     

    
     if(!isset($nome)){
         
        echo '<a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>';
        echo '<a href="./login.php"><button class="nav-button btn-success">Login</button></a>';
        echo '<a href="./novoUsuario.php"><button class="nav-button btn-dark">Novo Usuario</button></a>';
    }else{

        Usuario::cartaoUsuario($img, $nome);
        echo '<a href="./feed.php"><button class="nav-button btn-secondary">Feed</button></a>';
        echo '<a href="./perfil.php?usr='. $_SESSION['codUsu'] .'"><button class="nav-button btn-secondary">Perfil Usuario</button></a>';
        echo '<a href="./logout.php"><button class="nav-button btn-red">Sair</button></a>';
    }

    ?>
</nav>