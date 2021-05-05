Bienvenue administrateur

<?php

if (isset($_SESSION['login'])) {
    echo "Vous êtes connecté Admin";
}

echo '<br><a href="/franckphp1/index.php?page=accueil">Retourner à l\'accueil</a>'
?>




