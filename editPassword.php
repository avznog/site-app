<?php
include("header.php");
include("views/editpassword.view.php");
include("env.php");
if(isset($_POST["btnSubmit"])){
    $req = $db->prepare('UPDATE user SET name = :name, firstname = :firstname, birthdate = :birthdate, country = :country, phone = :phone , mail = :mail WHERE iduser = 0');

    $req->execute(array(
    
           'name' => $_POST["newname"],
           'firstname' => $_POST["newfirstname"],
           'birthdate' => $_POST["newbirthdate"],
           'country' => $_POST["newcountry"],
           'phone' => $_POST["newphone"],
           'mail' => $_POST["newmail"]
    
           ));
}


include("footer.php");
?>