<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <!--<link rel="stylesheet" type="text/css" href="style/editProfile.css">-->
    <link rel="stylesheet" type="text/css" href="../style/editProfile.css">
    <title>editProfil</title>
</head>
    <body>
        
        <div id="info">
            <div id="choix">
                <button class="bouton" onclick="location.href='editprofile.view.php';">Profil</button>
                <button class="boutonMdP" onclick="location.href='editpassword.view.php';">Mot de Passe</button>
            </div>
            <div id="bloc">
                <form method="POST">
                    <label class="prenom">Prénom</label><br />
                    <input name="newfirstname" type="text" placeholder="Prénom"/><br /><br />
                    <label class="nom">Nom</label><br/>
                    <input name="newname" type="text" placeholder="Nom"/><br/><br />
                    <label>Date de naissance</label><br/>
                    <input name="newdate" type="text" placeholder="JJ/MM/AAAA"/><br/><br/>
                    <label>Pays de résidence</label><br/>
                    <input name="newcountry" type="text" placeholder="France"/><br/><br/>
                    <label>Téléphone</label><br/>
                    <input name="newphone" type="text" placeholder="00 00 00 00 00"/><br/><br/>
                    <label>Adresse électronique</label><br/>
                    <input name="newmail" type="text" placeholder="adresse@mail.com"/><br/><br/>
                    <input class="MdP" type="submit" name="btnSubmit"/>
                </form>
            </div>
        </div>
</body>
</html>