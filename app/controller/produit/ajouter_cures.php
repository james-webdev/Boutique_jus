<?php 

//include("../../model/produit/lire_produits.php");



// die("Action détail article");

// var_dump($_GET);

include("../app/model/produit/ajouter_cures.php");

//var_dump($produits);



ajouter_cures();

include("../app/controller/produit/admin_cures.php");




