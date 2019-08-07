<!DOCTYPE html>
<html lang= "fr">
     <head>
     <meta charset="utf-8">
   	 <title> </title>
</head>

<body>
	<div>Footer</div>

	
<h3>Liste des categories</h3>
<ul>
	

<?php foreach ($categories as $categorie) { ?>
	
	
	<li><?= $categorie ["cat_descr"] ?></li>

<?php } ?>

</ul>
</body>

</html>