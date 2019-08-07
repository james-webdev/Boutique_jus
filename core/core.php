 <?php

 function lire_nb($table) {
   global $pdo;
   try {
     $query = " 
     		   SELECT count(*) AS nombre
               FROM " . $table;

               // die ($query);
     
     $req = $pdo->prepare($query);
    

 // $req->bindParam(':table', $table, PDO::PARAM_STR);

    $req->execute();

     $req->setFetchMode(PDO::FETCH_ASSOC);
     $data = $req->fetch();
     //var_dump ($data);
     $req->closeCursor();
     return $data["nombre"];
   }
   catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
   	return false;
   }
 }

 