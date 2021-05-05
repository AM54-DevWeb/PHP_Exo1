<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
    <!--              NAVBAR                           -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost/franckphp1/index.php?page=accueil">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>
            </ul>

            <!-- CONNEXION DECONNEXION  -->
            <div class="connexionDeco">
            <?php
                if (isset($_SESSION["login"])) {
                    echo "Bienvenue ". $_SESSION["login"]."<div class='espaceCo'></div>";
                    echo '<a href="/franckphp1/index.php?page=deconnexion">Déconnectez-vous</a>';
                } else {
                    echo '<a href="/franckphp1/index.php?page=connexion">Connectez-vous</a>'.'<div class="espaceCo"></div>'.'<a href="/franckphp1/index.php?page=inscription">Inscrivez-vous</a>';
                }
            ?>
            </div>
            <!-- CONNEXION DECONNEXION  -->


            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--              NAVBAR                           -->
    </header>


    <?php

    var_dump($_GET);
    //Ma page de base
    $page = "accueil";

    //Mes pages dispos 
    $pagesDispos = [
        "accueil", "connexion","inscription","article"
    ];

    $pagesDisposCo = [
        "accueil", "connexion", "membre", "admin", "deconnexion", "article"
    ];


    if (isset($_GET['page']) /* ce que l'on cherche, dans quel tableau */ && in_array($_GET['page'], $pagesDispos)) {
        $page = $_GET['page'];
        include($page . '.php');
    } elseif (isset($_SESSION['login']) /* EST CONNECTE */ && isset($_GET['page']) && in_array($_GET['page'], $pagesDisposCo)) {
        $page = $_GET['page'];
        include($page . '.php');
    } elseif (isset($_GET['page']) && !in_array($_GET['page'], $pagesDispos))
    //si l'utilisateur cherche une page qui n'existe pas (qui n'est pas dans $pagesDispos)
    {
        include('404.php');
        //afficher la page 404 plutot que accueil
    } else {
        include($page . '.php')/* ('index.php?page=accueil') */;
        //s'il n'y a pas de paramétre ?page dans l'url, afficher la page accueil
    }

    ?>

</body>

</html>