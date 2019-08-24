<?php  
function verif_login($form) {
  global $pdo;
try {
      $query ="SELECT *
      FROM st_customers 
      WHERE cus_mail=:login 
      AND cus_password=:password
       ";


      $req = $pdo->prepare($query);
      $req->bindParam(":login", $form["cus_mail"], PDO::PARAM_INT );
      $req->bindParam(":password",$form["cus_password"], PDO::PARAM_INT );
      
      

      $req->execute();
      
    
      $req->setFetchMode(PDO::FETCH_ASSOC);
      $data= $req->fetch();
      $req->closeCursor();
      
      return $data;
      
      
    } catch (Exception $e) {
      return false;
    }
}  