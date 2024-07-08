<?php 

    // echo print_r($_GET);
    $url = $_GET["url"] ?? null;

    
    if($url == "feed"){
        header("Location: ./paginas/feed.php");
    }
    else if ($url == "login"){
        header("Location: ./paginas/login.php");
    }
    else if ($url == "criar"){
        header("Location: ./paginas/novoUsuario.php");
    }
    
    

?>