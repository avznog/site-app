<?php include("env.php"); ?>

<!DOCTYPE html>
<head>
    <title>Mes données</title>
    <!--<link rel="stylesheet" type="text/css" href="style/mydata.css" />-->
    <link rel="stylesheet" type="text/css" href="../style/mydata.css" />
</head>

<body>
    <header id="entete">
        <div>
            <!--<img class="logo" src="ressources/Infinite_measures.gif" alt="logo Infinite Measures"/>-->
            <img class="logo" src="../ressources/Infinite_measures.gif" alt="logo Infinite Measures"/>
        </div>
        <div class="page">
            <ul class="liste">
                <li class="bienvenue">Bienvenue user</li>
                <li><button class="donnees" onclick="location.href='mydata.view.php';">Mes données</button></li>
                <li ><button class="profil" onclick="location.href='editprofile.view.php';">Profil</button></li>
            </ul>
        </div>
        
    </header>
    <div class="container">
        <div class="headerContainer">
            <h1 class="titleCapteurs">Capteurs</h1>
        </div>
        <div class="smallerContainer">

            <div class="capteursContainer firstcontainer">
                <div class="caseCapteur">
                    <h3 class="sensorName"><?php echo $_SESSION["data"][0]["name"]; ?></h3>
                    <div class="sensorDescritpion">
                        <h4 class="titleSensorDescription">Objectif: </h4>
                        <div class="description">
                           <?php echo $_SESSION["data"][0]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capteursContainer seccontainer">
                <div class="caseCapteur">
                    <h3 class="sensorName"><?php echo $_SESSION["data"][1]["name"]; ?></h3>
                    <div class="sensorDescritpion">
                        <h4 class="titleSensorDescription">Objectif: </h4>
                        <div class="description">
                        <?php echo $_SESSION["data"][1]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capteursContainer thirdcontainer">
                <div class="caseCapteur">
                    <h3 class="sensorName"><?php echo $_SESSION["data"][2]["name"]; ?></h3>
                    <div class="sensorDescritpion">
                        <h4 class="titleSensorDescription">Objectif: </h4>
                        <div class="description">
                        <?php echo $_SESSION["data"][2]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capteursContainer fourthcontainer">
                <div class="caseCapteur">
                    <h3 class="sensorName"><?php echo $_SESSION["data"][3]["name"]; ?></h3>
                    <div class="sensorDescritpion">
                        <h4 class="titleSensorDescription">Objectif: </h4>
                        <div class="description">
                        <?php echo $_SESSION["data"][3]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capteursContainer fifthcontainer">
                <div class="caseCapteur">
                    <h3 class="sensorName"><?php echo $_SESSION["data"][4]["name"]; ?></h3>
                    <div class="sensorDescritpion">
                        <h4 class="titleSensorDescription">Objectif: </h4>
                        <div class="description">
                        <?php echo $_SESSION["data"][4]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="capteursContainer pointsContainer">
                <div class="caseCapteur">
                    <h3 class="sensorName">Points</h3>
                    <div class="sensorDescritpion">
                        <div class="description">
                        <?php echo $_SESSION["points"][0]["value"]; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>