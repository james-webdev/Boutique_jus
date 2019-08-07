
<?php 


include ("../app/model/commentaire/lire_commentaires.php");

$commentaires = lire_commentaires();




include("../app/view/commentaire/index.php");