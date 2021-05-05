<?php
$login = "";
$password = "";
if (isset($_POST['login'])) {
    $login = $_POST['login'];
}
if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

if ($login != "" && $password == "") {
    echo "vous avez oublié d'écrire votre mot de passe";
}

if ($login == "" && $password != "") {
    echo "vous avez oublié d'écrire votre login";
}

if ($login == "" && $password == "") {
    echo "Veuillez entrer un login et un mot de passe";
}

if ($login != "" && $password != "") {
    //lien BDD
    include("connexion_bdd.php");

        //pseudo = "" de base + 'login' pour la bdd; donc pseudo = '"login"'
    $sql = "SELECT * FROM utilisateur WHERE pseudo = '" .$login. "' AND mot_de_passe = '" .$password . "'";

    //connexion a la BDD
    $resultat = $connexion->query($sql);
    $utilisateur = $resultat-> fetch();

    if($utilisateur){
        $_SESSION["login"] = $login;
    }else{
        echo "Mauvais login/Mot de passe";
    }
}

if (isset($_SESSION["login"])) {
    header('Location: index.php?page=accueil');
}

?>

<form action="" method="post">
    <input type="text" name="login" value="<?php echo $login; ?>" />
    <input type="password" name="password" value="<?php echo $password; ?>" />

    <input type="submit" />
</form>