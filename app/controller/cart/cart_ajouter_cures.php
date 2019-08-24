<?php 



//var_dump($_POST); exit;

include("../app/model/cart/cart_ajouter_cures.php");

// die("Action détail article");



//include("../app/model/produit/ajouter_jus.php");

//var_dump($produits);


cart_ajouter_cures($_POST);

header("location:index?module=produit&action=produit_cures");

//include("../app/model/produit/lire_produit_jus.php");

//$produits = lire_produit_jus(); 

//include("../app/view/produit/produit_jus.php");

//include("../app/controller/produit/admin_jus.php");
