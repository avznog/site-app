<?php
include("views/login.view.php");


for($i=0;$i<sizeof($_SESSION["users"]);$i++){
    if($_SESSION["users"][$i]["mail"] == $_POST["mail"] || $_SESSION["users"][$i]["phone"] == $_POST["phone"])
}
?>