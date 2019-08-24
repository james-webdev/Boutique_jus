<?php
 function lire_produit() {
   global $pdo;
   try {
     $query = " 
           SELECT  *
           FROM     st_products";

           //var_dump($query);
               // die ($query);
     
     $req = $pdo->prepare($query);
     
   
   $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $produits = $req->fetchAll();
     //var_dump ($produits);
     $req->closeCursor();

     return $produits;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
    return false;
   }
 }

