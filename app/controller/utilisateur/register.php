<?php 
if($_SERVER["REQUEST_METHOD"] == "GET") {
    define("PAGE_TITLE", "Page de register");
    include("../app/view/login/register.php");
 } else {
    //var_dump($_POST); exit();
        include("../app/model/utilisateur/register_add.php");
        if(register_add($_POST)){
           header("location:index.php?module=utilisateur&action=login&notif=ok");
        } else {
           header("location:index.php?module=utilisateur&action=register&notif=nok");    
        }
 }