<?php

include("env.php");
include("views/register.view.php");
if(isset($_POST["register"]))
if(register()){
    makeRegister($db); 
}else{
    echo "Vous êtes déjà inscrit dans la base de données";
}

function register(){

// Code erreur selon la réponse de la database: 
// pas dans la database, inscritpion: code true
// Déjà dans la database: code false

    for($i=0;$i<sizeof($_SESSION["users"]);$i++){
        echo $_SESSION["users"][$i]["mail"];
        if($_SESSION["users"] == $_SESSION["users"][$i]["mail"]){
            return false;
        }
    }
    return true;
}

function makeRegister($db){
   
    $q = $db->prepare("INSERT INTO users (name, firstname, mail, job, password) VALUES (:name, :firstname, :mail, :job, :password)");
    $q->execute([
        'name' => $_POST["name"],
        'firstname' => $_POST["firstname"],
        'mail' => $_POST["mail"],
        'job' => "",
        'password' => $_POST["password"]
    ]);
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["firstname"] = $_POST["firstname"];
    $_SESSION["mail"] = $_POST["mail"];
    $_SESSION["job"] = $_POST["job"];

    redirect("accueil.php");

    
}


?>