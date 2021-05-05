<?php 

$connexion = new PDO("mysql:host=localhost:3306;dbname=franckphp1", "root", "");
$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>