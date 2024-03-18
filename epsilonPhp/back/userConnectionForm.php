<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Espilon</title>
	<meta name="description" content="Plateforme de peer-learning de l'EPSI Lille">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../front/background.css">
    <link rel="stylesheet" href="../front/style.css">
    <script src="https://kit.fontawesome.com/b30f5d3ef8.js" crossorigin="anonymous"></script>
</head>
<body>
<div id="background">
        <div id="stars"></div><div id="stars2"></div><div id="stars3"></div>
    </div>
<div class="container">
    <header>
        <nav id="top">
            <ul id="connection">
                <li id="signup">
                    <a href="userRegistrationForm.php"><i class="fas fa-user-plus"></i> Inscription</a>
				</li>
            </ul>
        </nav>
    </header>

    <section>
        <div id="inside">
        <h1>Connexion</h1>
        <form action="userConnectionForm-validation.php" method="post">
            <table>
                <tr>
                    <td class="label">Mail</td>
                    <td><input type="email" name="bca-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br></td>
                </tr>
                <tr>
                    <td class="label">Mot de passe</td>
                    <td><input type="password" name="bca-pwd" pattern=".{8,}"></td>
                </tr>
                <tr>
                    <td class="label">Rester connecté</td>
                    <td><input type="checkbox" name="bca-stayIn"></td>
                </tr>
                <tr>
                    <td class="label"></td>
                    <td><input type="submit" name="valid"></td>
                </tr>
            </table>
        </form>
        <ul id="retour">
            <li id="return">
                <a href="index.php">Retour</a></li>
        </ul>
        </div>
    </section>
</div>
    
</body>
</html>