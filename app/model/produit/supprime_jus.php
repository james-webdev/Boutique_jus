<?php
  function supprime_jus() {
   global $pdo;
   try {
     $query = "DELETE FROM st_products_has_st_categories WHERE st_products_pro_id=".$_GET['id'];

               // die ($query);
      $req = $pdo->prepare($query);

      $req->execute();

   $req->closeCursor();
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }

   try {
     $query = "DELETE FROM st_products WHERE pro_id=".$_GET['id'];

               // die ($query);
      $req = $pdo->prepare($query);

      $req->execute();

   $req->closeCursor();
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
    return false;
   }
   }
 




