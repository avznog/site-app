<!DOCTYPE html>
<head>
    <title>connection</title>
    <link rel="stylesheet" type="text/css" href="style/login.css" />
</head>
<body>
<div class="limiter">
		<div class="container" style="background-color : #D0C5EE;">
			<div class="wrap">
				<form class="login-form" method="POST">
					<a href="accueil.php">
					<img class="img" style="width: 40px;height:40px;" src="ressources/Infinite_measures.gif" alt="Infinite Measures">
					</a>
					<h2>Connexion</h2>
					<br></br>
					<div class="inputwrap">
						<input class="inputtext" type="text" name="mailOrPhone" placeholder="Email ou Téléphone" required>
					</div>
					<div class="inputwrap2">
						<input class="inputtext" type="password" name="password" placeholder="Mot de passe" minlength="8" required>
					</div>
					<div>
                        <p1>
						Vous n'avez pas encore de compte ? <a href="register.view.php">Créez-en un ici!</a>
                        </p1>
					</div>
                    <br></br>
                    <div>
						<input type="submit" name="login" class="btnLogin" value="Suivant" >
                        
                        
                    </div>
                    <br></br>
					<div>
						<p2>
                            <img class="img1" src="ressources/configuration.jpg" alt="configuration"> Options de connexion
                        </p2>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>