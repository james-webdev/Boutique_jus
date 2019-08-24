<?php
 function lire_produit_cures() {
   global $pdo;
   try {
     $query = " 
     		 SELECT   *
          FROM     st_products, st_categories, st_products_has_st_categories
          WHERE    st_products_pro_id=pro_id
          AND      cat_id= st_categories_cat_id
          AND       cat_id=3   ";


           //var_dump($query);
               // die ($query);
     
     $req = $pdo->prepare($query);
     
   
	 $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $produits = $req->fetchAll();
     //var_dump ($req);
     $req->closeCursor();
     return $produits;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }

   }