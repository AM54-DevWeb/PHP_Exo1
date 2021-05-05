<?php

include("connexion_bdd.php");

$sql = "SELECT * FROM article";

//foreach ($connexion->query($sql) as $row){
//    print_r($row);

foreach ($connexion->query($sql) as $article) {
    //echo $article["designation"];
?>

    <div class="card bg-light mb-3">
        <div class="card-header"><?php echo $article["designation"]; ?></div>
        <div class="card-body">
            <h4 class="card-title"><?php echo $article["prix"].""."€"; ?></h4>
            <img class="imgCookie" src="<?php echo $article["url_image"]; ?>" alt="cookie">
            <p class="card-text"><?php echo $article["description"]; ?></p>
            <a href="index.php?page=article&id=<?php echo $article["id"]; ?>" class="btn btn-primary savoirPlus">En savoir +</a>
            <a href="index.php?page=article&id=<?php echo $article["id"]; ?>" class="btn btn-primary">Acheter</a>
        </div>
    </div>

<?php
}
?>