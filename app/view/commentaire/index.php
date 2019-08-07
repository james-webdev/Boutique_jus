
<?php 



include("../app/view/layout/header.inc.php");


 ?>
<h1>Liste de commentaires</h1>

<?php 

// var_dump($commentaires);


foreach ($commentaires as $commentaire) { ?>
	<p><?= $commentaire["comment_date"] ?></p>
	<p><?= $commentaire["comment_content"] ?></p>

<?php }
?>


<?php 

include ("../app/view/layout/footer.inc.php");

?>