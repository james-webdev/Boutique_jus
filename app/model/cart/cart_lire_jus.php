<?php
  function cart_lire_jus() {
   global $pdo;
   try {
     $query = " 
     		  
         SELECT * FROM `st_caddies`, st_products
       WHERE st_customers_cus_id= :cus_id
       AND `st_products_pro_id`=pro_id ";

           //var_dump($query);
               // die ($query);
     
     $req = $pdo->prepare($query);
     $req->bindParam(":cus_id", $_SESSION["user"]["cus_id"], PDO::PARAM_INT);
   
	 $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $cart = $req->fetchAll();
     //var_dump ($cart);
    
     return $cart;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }

   }
 
