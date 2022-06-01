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
					<img class="img" style="width: 40px;height:40px;" src="ressources/infinite_measure.png" alt="Infinite Measures">
					<h2>Connexion</h2>
					<br></br>
					<div class="inputwrap">
						<label class="inputtext">Email ou Téléphone</label>
						<input class="inputtext" type="text" name="mailOrPhone" required>
					</div><br/>
					<div class="inputwrap2">
						<label class="inputtext">Mot de Passe</label>
						<input class="inputtext" type="password" name="password" minlength="8" required>
					</div>
					<div>
                        <p1>
						Vous n'avez pas encore de compte ? <a href="register.php">Créez-en un ici!</a>
                        </p1>
					</div>
                    <br/>
                    <div>
						<input type="submit" name="login" class="btnLogin" value="Suivant" >
                        
                        
                    </div>

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