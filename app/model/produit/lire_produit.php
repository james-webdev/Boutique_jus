<?php
 function lire_article($id) {
   global $pdo;
   try {
     $query = "
               SELECT * 
               FROM blog_posts A, blog_users B, blog_categories C
               WHERE A.post_author = B.ID
               AND post_category=cat_id
               AND post_ID = :id"; 

               // die ($query);
     
     $req = $pdo->prepare($query);
     
     $req->bindParam(":id", $id, PDO::PARAM_INT);
	 
	 $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $data = $req->fetch();
     //var_dump ($data);
     $req->closeCursor();
     return $data;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }
 }