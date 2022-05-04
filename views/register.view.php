<!DOCTYPE html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style/register.css" />
</head>
<body>
<div class="limiter1">
		<div class="container1" style="background-color : rgb(195, 166, 253);">
			<div class="wrap1">
                    <a href="accueil.php">
                        <img class="img2" src="ressources/Infinite_measures.gif" alt="Infinite Measures">
                    </a>
                    <div class="headwrap1">
                        <h1>Créez votre compte Take'R</h1>
                    </div>
                    <br></br>
				<form class="registration" method="POST">
                            <div class="inputgroup">
                                <!-- Les REQUIRED ONT ETE SUPPRIMES POUR UNE SIMPLICITE DE TEST ET DE DEVELOPPEMENT -->
                                <div>
                                    <input class="input" type="text" name="firstname" placeholder="Prénom">
                                    <input class="input" type="text" name="name" placeholder="Nom de Famille" >
                                </div>
                                <div>
                                    <input class="input2" type="text" name="birthPlace" placeholder="Pays de naissance" >
                                </div>
                                <div>
                                    <input class="input2" type="text" name="birthDate" placeholder="Date de naissance (JJ/MM/AAAA)">
                                </div>
                                <hr></hr>
                                <div>
                                    <input class="input2" type="mail" name="mail" placeholder="xyz@exemple.com" >
                                </div>
                                <div>
                                    <input class="input2" type="password" name="password" placeholder="Mot de passe" minlength="8" >
                                </div>
                                <div>
                                    <input class="input2" type="password" name="confirmPassword" placeholder="Confirmez le mot de passe" minlength="8" >
                                </div>
                                <hr></hr>
                                <div>
                                    <input class="input2" type="tel" name="phone" placeholder="Numéro de téléphone">
                                </div>
                                <div>
                                    <button class="btn btnToLogin"><a href="login.php"> Déjà inscrit ? Connectez-vous !</a></button>
                                    <input type="submit" class="btn" style="background-color:rgb(195, 166, 253)"  value="s'inscrire" name="register">
                                    
                                </div>
                            </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>