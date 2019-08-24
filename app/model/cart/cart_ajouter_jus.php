<?php
  function cart_ajouter_jus($form) {
   global $pdo;

   // AJOUT DU PRODUIT
   try {
     $query = "INSERT INTO st_caddies (st_customers_cus_id, st_products_pro_id, cad_qt) 
                VALUES (:cus_id, :pro_id, :cad_qt)";

               // die ($query);
     //var_dump($query);
      $req = $pdo->prepare($query);
      $req->bindParam(":cus_id", $form["cus_id"], PDO::PARAM_INT);
      $req->bindParam(":pro_id", $form["pro_id"], PDO::PARAM_INT);
      $req->bindParam(":cad_qt", $form["cad_qt"], PDO::PARAM_INT);

      $req->execute();
      //var_dump($req);

  
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }

   }
