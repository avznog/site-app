<?php
session_start();
include("views/login.view.php");

include("env.php");
echo $_SESSION["users"];

for($i=0;$i<sizeof($_SESSION["users"]);$i++){
    
    if($_SESSION["users"][$i]["mail"] == $_POST["mailOrPhone"] || $_SESSION["users"][$i]["phone"] == $_POST["mailOrPhone"]){
        if($_SESSION["users"][$i]["password"] == $_POST["password"]){
            redirect("accueil.php");
        }
    }else{
        echo "wrong connection";
    }
}
include("footer.php");
?>