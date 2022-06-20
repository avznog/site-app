<?php include("env.php"); ?>

<!DOCTYPE html>
<head>
    <title>Mes données</title>
    <link rel="stylesheet" type="text/css" href="style/mydata.css" />
</head>

<body>
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
                            <?php
                                $ch = curl_init();
                                curl_setopt(
                                $ch,
                                CURLOPT_URL, "http://projets-tomcat.isep.fr:8080/appService/?ACTION=GETLOG&TEAM=G7_A");
                                curl_setopt($ch, CURLOPT_HEADER, FALSE); 
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
                                $data = curl_exec($ch); //$data contient les donnees brutes, sous forme d’une longue chaine de caracteres.
                                curl_close($ch);

                                $data_tab = str_split($data,33);
                                $size=count($data_tab);

                                $trame = $data_tab[$size-2];
                                
                                list($t, $o, $r, $c, $n, $v, $a, $x, $year, $month, $day, $hour, $min, $sec) = sscanf($trame,"%1s%4s%1s%1s%2s%4s%4s%2s%4s%2s%2s%2s%2s%2s");
                                $tempValue =hexdec($v);
                                echo $tempValue;
                                //$hour=$hour."h".$min."m".$sec."s";
                                //$datum=$year."-".$month."-".$day;
                                $tempValue1=34;
                                $hour=12h12m12s;
                                $datum=2021-02-22;

                                
                                
                                try{
                                    //On se connecte à la BDD
                                    
                                    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                    //On crée une table 
                                    $form = 'UPDATE data SET value = '$_POST[tempValue1]', hour = '$_POST[hour]', datum = '$_POST[datum]'', WHERE iddata = 1';
                                    $db->exec($form);
                                }
                                catch(PDOException $e){
                                    echo 'Erreur : '.$e->getMessage();
                                }

                                $req = $db->prepare('UPDATE data SET value = :tempValue, hour = :hour, datum = :datum, WHERE iddata = 1');

                                $req->execute();
                            
                            ?> °C
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
                        <?php echo $_SESSION["data"][1]["value"]; ?> %
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
                        <?php echo $_SESSION["data"][2]["value"]; ?> g
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
                        <?php echo $_SESSION["data"][3]["value"]; ?> dB
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
                        <?php echo $_SESSION["data"][4]["value"]; ?> BPM
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