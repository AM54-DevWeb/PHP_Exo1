<?php 

//si l'url a un &id= (on a cliqué sur un article)
if(isset($_GET["id"])){
    ?>
    <center><h1> Page de l'article <?php echo $_GET["id"] ; ?></h1></center>
    <?php


        include("connexion_bdd.php");

        //selectionner tout depuis article ou l'id de l'article = l'id de l'article sur lequel on a cliqué
        $sql = "SELECT * FROM article WHERE id=".$_GET["id"];

        //on récupére tous les articles correspondants à la requete
        $listArticles = $connexion->query($sql);

        //on affecte le premier est articles
        $article = $listArticles->fetch();

    ?> 
    
        <div class="card bg-light mb-3 cardArticle">
            <div class="card-header"><?php echo $article["designation"]; ?></div>
            <div class="card-body">
                <h4 class="card-title"><?php echo $article["prix"].""."€"; ?></h4>
                <img class="imgCookie" src="<?php echo $article["url_image"]; ?>" alt="cookie">
                <div class="ingredients">
                    <div class="ingredientsText">
                        <ul><h5 class="titreIngredients">Liste des ingrédients</h5>
                            <li class="liIngredients liIngredients1">Oeufs</li>
                            <li class="liIngredients">Farine</li>
                            <li class="liIngredients">Pépites de chocolat</li>
                        </ul>
                    </div>
                </div>
                <p class="card-text"><?php echo $article["description"]; ?></p>
                <a href="index.php?page=article&id=<?php echo $article["id"]; ?>" class="btn btn-primary">Acheter</a>
            </div>
        </div>
    
    <?php 
        //var_dump($article);
}else{
    echo "Cette page d'article n'existe pas";
}

?>

<br><a href="index.php?page=accueil">Retour a l'accueil</a>