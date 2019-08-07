<?php


//Afficher la liste des articles

// include("../app/model/article/lire_articles.php");
include("../app/model/article/lire_articles.php");


$nb_articles = lire_nb("blog_posts");
$pages =ceil($nb_articles / NB_PAR_PAGE);

// echo "Nombres de commentaires = " . lire_nb("blog_comments");

if($nb_articles) {
 // var_dump($nb_articles);

} else {
	die ("Erreur");
}

if (isset($_GET["page"])) {
	$page_demandee = $_GET["page"];
	if ($_GET["page"] > $pages) {
		$page_demandee = $pages;
	}
	if ($_GET["page"] <= 0) {
		$page_demandee = 1;
	}
} else {
	$page_demandee = 1;
}

$offset = ($page_demandee - 1) * NB_PAR_PAGE;
// var_dump($offset);
$articles = lire_articles($page_demandee, NB_PAR_PAGE);
if($articles) {
 // var_dump($articles);

} else {
	die ("Erreur");
}

 // var_dump($articles);
foreach ($articles as $cle => $article) {
	// echo "clé=" .$cle;
	// var_dump($article);

	$articles[$cle]["post_date"] = "Publié le :" . $article["post_date"];

}


define("PAGE_TITLE", "Liste des articles");
include("../app/view/article/index.php");