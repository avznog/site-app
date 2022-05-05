<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!--<link rel="stylesheet" type="text/css" href="style/editProfile.css">-->
	<link rel="stylesheet" type="text/css" href="../style/editpassword.css">
	<title>Mot de Passe</title>
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
	<div id="info">
		<div id="choix">
			<button class="bouton" onclick="location.href='editprofile.view.php';">Profil</button>
			<button class="boutonMdP" onclick="location.href='editpassword.view.php';">Mot de Passe</button>
		</div>

		<div id="bloc">
    		<label for="pass">Mot de passe actuel</label><br/>
    		<input type="password" id="pass" name="password"><br/><br/>
		    <label for="pass">Nouveau mot de passe (8 charactères minimum)</label><br/>
		    <input type="password" id="pass" name="password" minlength="8" required><br/><br/><br/>
		    <input class="MdP" type="submit" value="Changer mon mot de passe"><br/>
		</div>

		

</body>
</html>
