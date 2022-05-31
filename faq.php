<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    
</head>
<body>
    <?php
    include("header.php");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DB_NAME = "site-app";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$DB_NAME);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    ?>
    <div class="imgfaq">
        <img  src="resources/faq.jfif" alt="">
    </div>
    <?php
        $requet = "SELECT question, answer FROM faq";
        $result = $conn->query($requet);
        while($row = $result->fetch_assoc()){
            printf("
            <div class=\"faq-question\">
                <div class=\"faq-q\">
                    <h2 class=\"QUE\">%s<button class=\"btn\"><span class=\"down\"><i class=\"fa-solid fa-angle-down\"></i></span><span class=\"up\"><i class=\"fa-solid fa-angle-up\"></i></span></button></h2> 
                    <p class=\"REP\">%s</p>
                </div>                
                
            </div>	",$row['question'],$row['answer']);
        }
    ?>
    <script src="faq.js"></script>
    <?php
    include("footer.php");
    ?>
</body>
</html>



<?php
//<<<<<<< HEAD

?>
<!--=======
?>
>>>>>>> 4ae48ecd243da0934bdf785f6994b0733aaef4d7
-->
