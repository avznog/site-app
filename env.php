<?php
session_start();
$db = new PDO(
    "mysql:host=localhost;dbname=site-app",
    "root",
    ""
);  

$q = $db->prepare("SELECT * FROM user");
$q->execute();
$_SESSION["users"] = $q->fetchAll();

function redirect($page){
    header("Location: " . $page);
    exit();
}

$q2 = $db->prepare("SELECT * FROM data");
$q2->execute();
$_SESSION["data"] = $q2->fetchAll();

$q3 = $db->prepare("SELECT * FROM point");
$q3->execute();
$_SESSION["points"] = $q3->fetchAll();
?>