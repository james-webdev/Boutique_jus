
<?php 

include("../app/view/layout/header.inc.php"); ?>



<h1> Liste des articles </h1>

<?php foreach ($articles as $article) { ?>
	
	<h2> <a href="index.php?module=article&action=article&id=<?= $article ["post_ID"] ?>"><?= $article ["post_title"] ?></a></h2>
	<div><?= $article ["post_date"] ?></div>
	<p><?= $article ["post_content"] ?></p>

<?php } ?>

Nb pages = <?= $pages; ?>


<!-- page de tabination -->
<div>


	<?php for ($i=1; $i <= $pages ; $i++) { ?>
	 	<?php if($i != $page_demandee) { ?>
	   		<a href="index.php?module=article&action=index&page=<?= $i ?>"><?= $i ?> </a>
    	<?php } else { ?>
      		<?= $i ?>
	 	<?php } ?>
	<?php } ?>
	
	
</div>



<?php include("../app/view/layout/footer.inc.php"); ?>
