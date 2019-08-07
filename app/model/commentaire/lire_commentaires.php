<?php
 function lire_commentaires() {
   global $pdo;
   try {
     $query = " 
            SELECT *
               FROM blog_comments, blog_users
               WHERE comment_author=ID"; 

               // die ($query);
     
     $req = $pdo->prepare($query);
     
   
   $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $commentaires = $req->fetchAll();
     //var_dump ($data);
     $req->closeCursor();
     return $commentaires;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
    return false;
   }
 }