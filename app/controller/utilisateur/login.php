<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    include("../app/view/login/login.php");
} else {
    include("../app/model/utilisateur/verif_login.php");
    $user = verif_login($_POST);
    if($user) {

        $_SESSION["user"] = $user; 
        if ($_SESSION["user"]["cus_civility"] == "1") {
            header("location:index.php?module=produit&action=index&notif=ok");
        } else {
            header("location:index.php?module=produit&action=admin_jus&notif=ok");
        }
    } else {
        header("location:index.php?module=utilisateur&action=login&notif=nok");
    }
}


