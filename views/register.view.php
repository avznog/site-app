<!DOCTYPE html>
<head>
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style/register.css" />
</head>
<body>
<div class="limiter1">
		<div class="container1" style="background-color : #D0C5EE;">
			<div class="wrap1">
                    <a href="accueil.php">
                        <img class="img2" src="ressources/infinite_measure.png" alt="Infinite Measures">
                    </a>
                    <div class="headwrap1">
                        <h1>Créez votre compte Take'R</h1>
                    </div>
                    <br></br>
				<form class="registration" method="POST" action="register.php">
                            <div class="inputgroup">
                                <!-- Les REQUIRED ONT ETE SUPPRIMES POUR UNE SIMPLICITE DE TEST ET DE DEVELOPPEMENT -->
                                <div>
                                    <label class="input">Prénom</label><br />
                                    <input class="input" type="text" name="firstname" placeholder="Prénom"><br/>
                                    <label class="input">Nom</label><br />
                                    <input class="input" type="text" name="name" placeholder="Nom de Famille" >
                                </div>
                                <div>
                                    <label class="input2">Pays</label><br />
                                    <input class="input2" type="text" name="birthPlace" placeholder="Pays de naissance" ><br />
                                </div>
                                <div>
                                    <label class="input2">Date de naissance</label><br />
                                    <input class="input2" type="text" name="birthDate" placeholder="Date de naissance (JJ/MM/AAAA)"><br />
                                </div>
                                <hr></hr>
                                <div>
                                    <label class="input2">Adresse électronique</label><br />
                                    <input class="input2" type="mail" name="mail" placeholder="xyz@exemple.com" >
                                </div>
                                <div>
                                    <label class="input2">Mot de Passe</label><br />
                                    <input class="input2" type="password" name="password" placeholder="Mot de passe" minlength="8" >
                                </div>
                                <div>
                                    <label class="input2">Confirmez votre mot de passe</label><br />
                                    <input class="input2" type="password" name="confirmPassword" placeholder="Confirmez le mot de passe" minlength="8" >
                                </div>
                                <hr></hr>
                                <div>
                                    <label class="input2">Téléphone</label><br />
                                    <input class="input2" type="tel" name="phone" placeholder="Numéro de téléphone">
                                </div>
                                <div>
                                    <button class="btn btnToLogin"><a href="login.php"> Déjà inscrit ? Connectez-vous !</a></button>
                                    <input type="submit" class="btn" style="background-color:#D0C5EE" value="s'inscrire" name="register">
                                    
                                </div>
                            </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>