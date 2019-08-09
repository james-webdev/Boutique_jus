<?php

// die("Action détail article");

include("../layout/header.inc.php"); ?>


<h1><?= $article["post_title"] ?></h1>
<p><?= $article["post_content"] ?></p>


<?php include("../layout/footer.inc.php"); ?>