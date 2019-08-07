<?php 



// die("Action détail article");

// var_dump($_GET);

include("../app/model/article/lire_article.php");
$article = lire_article($_GET["id"]);
// var_dump($article);


define("PAGE_TITLE", $article["post_title"]);
define("PAGE_DESCR",substr($article["post_title"], 0, 165) . "...");
include("../app/view/article/article.php");