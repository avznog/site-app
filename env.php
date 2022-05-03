<?php
session_start();
$db = new PDO(
    "mysql:host=localhost;dbname=site-app",
    "root",
    "root"
);  

$q = $db->prepare("SELECT * FROM user");
$q->execute();
$_SESSION["users"] = $q->fetchAll();

function redirect($page){
    header("Location: " . $page);
    exit();
}
?>