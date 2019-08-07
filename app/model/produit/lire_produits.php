<?php
 function lire_articles($offset, $limite) {
   global $pdo;
   try {
     $query = " 
     		   SELECT post_ID, post_title, post_date, post_img_url, LEFT(post_content, " . POST_TR . ") AS post_content 
               FROM blog_posts
               ORDER BY post_date DESC
               LIMIT :offset, :limite";

               // die ($query);
     
     $req = $pdo->prepare($query);
     
     $req->bindParam(':offset', $offset, PDO::PARAM_INT);
	 $req->bindParam(':limite', $limite, PDO::PARAM_INT);
	 $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $articles = $req->fetchAll();
     //var_dump ($data);
     $req->closeCursor();
     return $articles;
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }
 }