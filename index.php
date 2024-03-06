<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'upload</title>
</head>
<body>
    <h1>Formulaire d'upload de fichier</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>
</body>
<?php
if(isset($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file is a PDF
    if($fileType != "pdf") {
        echo "Seuls les fichiers PDF sont autorisés.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Le fichier existe déjà.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Le fichier est trop volumineux.";
        $uploadOk = 0;
    }

    // Upload file if all checks pass
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "Le fichier ". basename( $_FILES["fileToUpload"]["name"]). " a été téléchargé.";
            
            // Save file details to database
            $filename = basename($_FILES["fileToUpload"]["name"]);
            $filesize = $_FILES["fileToUpload"]["size"];
            $filetype = $_FILES["fileToUpload"]["type"];
            $filecontent = file_get_contents($target_file);
            
            // Connect to database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "systuploadfich";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            // Insert file details into database
            $sql = "INSERT INTO files (filename, filesize, filetype, filecontent) VALUES ('$filename', '$filesize', '$filetype', '$filecontent')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Les détails du fichier ont été enregistrés dans la base de données.";
            } else {
                echo "Erreur lors de l'enregistrement des détails du fichier: " . $conn->error;
            }
            
            $conn->close();
        } else {
            echo "Une erreur s'est produite lors du téléchargement du fichier.";
        }
    }
}
?>
</html>