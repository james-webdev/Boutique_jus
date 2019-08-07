<?php
 function lire_categories() {
   global $pdo;
   try {
    
  $query = "
               SELECT *
               FROM blog_categories
               ORDER BY cat_descr";
               // die ($query);
     
     $req = $pdo->prepare($query);
    
	  $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $data = $req->fetchAll();
     //var_dump ($data);
     $req->closeCursor();
     return $data;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }
 }