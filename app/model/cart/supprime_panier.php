<?php
  function supprime_panier() {
   global $pdo;
   try {
     $query = "DELETE FROM st_caddies WHERE st_customers_cus_id=".$_GET['id'];

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
   
 




