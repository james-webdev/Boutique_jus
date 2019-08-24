<?php 





// die("Action détail article");

// var_dump($_GET);








include("../app/model/cart/cart_lire_jus.php");

$cart = cart_lire_jus();
$total = 0;


                     
 //var_dump($cart); 
      
//$cart = cart(); //var_dump($_SESSION);

include("../app/view/cart/cart.php");
