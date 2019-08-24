<?php 

//include("../../model/produit/lire_produits.php");



// die("Action détail article");

// var_dump($_GET);

include("../app/model/produit/supprime_jus.php");

//var_dump($produits);



supprime_jus();

include("../app/controller/produit/admin_jus.php");




