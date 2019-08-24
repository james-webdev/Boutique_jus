<?php 

//include("../../model/produit/lire_produits.php");



// die("Action détail article");

// var_dump($_GET);

include("../app/model/produit/lire_produit_laits.php");

//var_dump($produits);



$produits = lire_produit_laits();



include("../app/view/produit/admin_laits.php");




