<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/editProfile.css">
    <title>editProfil</title>
</head>
<body>
    <header id="menu">
        <div><img class="logo" src="../ressources/logo_taker.png" alt="logo Take'R"/></div>
        <div class="page">
            <ul class="liste">
                <li class="bienvenue">Bienvenue user</li>
                <li class="donnees">Mes données</li>
                <li class="profil">Profil</li>
            </ul>
        </div>
        
    </header>
    <div id="info">
        <div id="choix">
            <div class="bouton">Mon Profil</div>
            <div class="boutonMdP">Mot de Passe</div>
        </div>
        <div id="bloc">
            
                <label class="prenom">Prénom</label>
                <label class="nom">Nom</label><br/>
                <input name="nom" type="text" value="prénomUser"/>
                <span class="nom"><input name="nom" type="text" value="nomUser"/></span><br/><br/>
                <label>Date de naissance</label><br/>
                <input name="date" type="text" value="JJ/MM/AAAA"/><br/><br/>
                <label>Pays de résidence</label><br/>
                <input name="pays" type="text" value="France"/><br/><br/>
                <label>Téléphone</label><br/>
                <input name="nombre" type="text" value="00 00 00 00 00"/><br/><br/>
                <label>Adresse électronique</label><br/>
                <input name="nom" type="text" value="adresse@mail.com"/><br/><br/>
                
        </div>
    </div>
</body>
</html>