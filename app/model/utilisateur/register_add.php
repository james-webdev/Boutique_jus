<?php  
function register_add($form) {
  global $pdo;
try {
/*      $query ="
      INSERT INTO st_customers
      (cus_lastname, cus_firstname, cus_password, cus_mail, cus_civility)
      VALUES (:nom, :prenom, :pass, :mail, 0)";*/

      $query ="
      INSERT INTO st_customers
      (cus_lastname, cus_firstname, cus_password, cus_mail, cus_civility)
      VALUES ('".$form["cus_nom"]."', '".$form["cus_prenom"]."', '".$form["cus_pass"]."', '".$form["cus_mail"]."', '1')";

     /* var_dump($query);*/
      $req = $pdo->prepare($query);
/*      $req->bindParam(":nom", $form["cus_nom"], PDO::PARAM_INT );
      $req->bindParam(":prenom", $form["cus_prenom"], PDO::PARAM_INT );
      $req->bindParam(":pass", $form["cus_pass"], PDO::PARAM_INT );
      $req->bindParam(":mail", $form["cus_mail"], PDO::PARAM_INT ); */
    /*  var_dump($req);*/
      $req->execute();
      return true;
      
    } catch (Exception $e) {
      return false;
    }
}  