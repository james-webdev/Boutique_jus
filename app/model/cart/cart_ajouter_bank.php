<?php
function cart_ajouter_bank() {
   global $pdo;

   // AJOUT DU PRODUIT
   try {
     $query = "INSERT INTO st_products (pro_title, pro_descr, pro_img_url, pro_price) VALUES ('".$_POST['pro_title']."', '".$_POST['pro_descr']."', '".$_POST['pro_img_url']."', '".$_POST['pro_price']."')";

               // die ($query);
     //var_dump($query);
     $req = $pdo->prepare($query);

     $req->execute();

     $req->closeCursor();
 }
 catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
  return false;
}