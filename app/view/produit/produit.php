<?php

// die("Action détail article");

include("../app/view/layout/header.inc.php"); ?>


<h1><?= $article["post_title"] ?></h1>
<p><?= $article["post_content"] ?></p>


<?php include("../app/view/layout/footer.inc.php"); ?>