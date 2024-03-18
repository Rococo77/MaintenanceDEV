<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Espilon</title>
	<meta name="description" content="Epsilon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../front/background.css">
    <link rel="stylesheet" href="../front/style.css">
    <script src="https://kit.fontawesome.com/b30f5d3ef8.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <header>
        <nav id="top">
            <ul id="connection">
                <li id="signup">
                    <a href="userRegistrationForm.php"><i class="fas fa-user-plus"></i> Inscription</a>
				</li>
            </ul>
        </nav>
        <div class="cleared"></div>

        
    </header>

    <section>
        <div id="inside">
        <h1>Connexion</h1>
        <form action="userPasswordReset-validation.php" method="post">
            <table>
                <tr>
                    <td class="label">Mail</td>
                    <td><input type="email" name="bca-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"><br></td>
                </tr>
                <tr>
                    <td class="label"></td>
                    <td><input type="submit" name="valid" value="Demander le changement de mon mot de passe"></td>
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