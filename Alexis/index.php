<!DOCTYPE html>
<html>
<head>
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="./style/index.css">
</head>
<body>
    <header>
        <h1>Site Upload File</h1>
    </header>

    <container>
        <h3>EPSI | LON</h3>
        <div>
            <img src="./image/alexis_texas.jpg" alt="alexis_texas" >
            <img src="./image/652d4c37_2022.jpg" alt="Corentin Tolisso">
        </div>
        <div>
            <p class="inline">Alexis LHUSSIER</p>
            <p class="inline">Corentin Rossetto</p>
        </div>
        <p>Groupe: Melvin Malagowski, Bastien Passet</p>
        <p>12/20 : Facile de modifier dans l'ensemble, cependant certaines fonction de base comme include le header sont manquantes. De plus, le mimetype pour un fichier word n'est pas évidement à connaitre. </p>

        <button id="showFormButton">Afficher le formulaire</button>

        <form id="uploadForm" action="./php/upload.php" method="post" enctype="multipart/form-data" visibility="hidden">
            <input type="text" name="Nom" placeholder="Nom" style="margin : 5px;">
            <input type="text" name="Prenom" placeholder="Prenom"style="margin : 5px;">
            <input type="file" name="userfile"style="margin : 5px;">
            <button type="submit" name="submit"style="margin : 5px;">Upload</button>
        </form>
        <?php require './php/footer.php'; ?>
    </container>
    

</body>

<script>
    document.getElementById('showFormButton').addEventListener('click', function () {
        // Afficher le formulaire
        document.getElementById('uploadForm').style.display = 'flex';
        document.getElementById('uploadForm').style.flexDirection = 'column';
        document.getElementById('uploadForm').style.width = '85%';
        
        // Masquer le bouton
        this.style.display = 'none';
    });
</script>
</html>
