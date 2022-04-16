<?php
$db = new PDO(
    "mysql:host=localhost;dbname=site-app",
    "root",
    "root"
);

$users = getUsers($db);
echo $users[0]["firstname"];
checkConnection($users,$users[0]);


function getUsers($db){
    $response = $db->prepare("SELECT * FROM user");
    $response->execute();
    $users = $response->fetchALL();
    return $users;
}

function checkConnection($users,$user){
    for($i = 0;$i<sizeof($users);$i++){
        echo "<br />Voici le premier utilisateur : ".$user["firstname"] . " " . $user["name"] ;
        if($user["mail"] == $users[$i]["mail"] AND $user["password"] == $users[$i]["password"]){
            echo "connected";
        }
    }
}

?>