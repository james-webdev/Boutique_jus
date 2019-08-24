<?php
function ajouter_laits() {
   global $pdo;

   // AJOUT DU PRODUIT
   try {
     $query = "INSERT INTO st_products (pro_title, pro_descr, pro_img_url, pro_price) VALUES ('".$_POST['pro_title']."', '".$_POST['pro_descr']."', '".$_POST['pro_img_url']."', '".$_POST['pro_price']."')";

               // die ($query);
     //var_dump($query);
     $req = $pdo->prepare($query);

     $req->execute();

     $req->closeCursor();
 }
 catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
  return false;
}

   // RECUPERATION DE L'ID DU PRODUIT

try {
   $query = "SELECT pro_id FROM st_products WHERE pro_title='".$_POST['pro_title']."'";

               // die ($query);
   //var_dump($query);
   $req = $pdo->prepare($query);

   $req->execute();

   $req->setFetchMode(PDO::FETCH_ASSOC);
   $pro_id = $req->fetchAll();

   //var_dump($pro_id);

   $req->closeCursor();
}
catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
  return false;
}

   // AJOUT DU LIEN CATEGORIE / PRODUIT

try {
   $query = "INSERT INTO st_products_has_st_categories (st_products_pro_id, st_categories_cat_id) VALUES ('".$pro_id[0]['pro_id']."', '2')";

               // die ($query);
   //var_dump($query);
   $req = $pdo->prepare($query);

   $req->execute();

   $req->setFetchMode(PDO::FETCH_ASSOC);
   $pro_id = $req->fetchAll();
     //var_dump ($produits);

   $req->closeCursor();
}
catch (Exception $e) {
     // die ("SQL Erreur : " . utf8_encode($e->getMessage()));
  return false;
}

}

