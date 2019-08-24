<?php  

include("../app/model/produit/lire_produit_laits.php");





$produits = lire_produit_laits();



include("../app/view/produit/produit_laits.php");
