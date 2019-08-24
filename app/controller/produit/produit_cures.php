<?php 

//include("../../model/produit/lire_produits.php");



// die("Action détail article");

// var_dump($_GET);

include("../app/model/produit/lire_produit_cures.php");

//var_dump($produits);



$produits = lire_produit_cures();



include("../app/view/produit/produit_cures.php");

