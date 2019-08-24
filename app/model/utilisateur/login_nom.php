<?php
  function lire_login_nom() {
   global $pdo;
   try {
     $query = "SELECT cus_firstname, cus_lastname
          FROM st_customers 
          WHERE cus_id =  1";


           //var_dump($query);
               // die ($query);
     
     $req = $pdo->prepare($query);
     
   
	 $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $name = $req->fetchAll();
     //var_dump ($req);
    $req->closeCursor();
    var_dump($name);
     return $name;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }

   }
 
 lire_login_nom();